<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Service
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Service;

use UthandoCommon\Service\AbstractRelationalMapperService;
use UthandoPortfolio\Model\Portfolio as PortfolioModel;
use UthandoPortfolio\Model\Tag as TagModel;
use UthandoPortfolio\Service\Tag;
use Zend\Db\Sql\Where;
use Zend\EventManager\Event;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Service
 */
class Portfolio extends AbstractRelationalMapperService
{
    /**
     * @var string
     */
    protected $serviceAlias = 'UthandoPortfolio';

    protected $referenceMap = [
        'tags' => [
            'refCol' => 'portfolioId',
            'service' => 'UthandoPortfolioTag',
            'getMethod' => 'getTagsByPortfolioId'
        ],
    ];

    /**
     * Attach events
     */
    public function attachEvents()
    {
        $this->getEventManager()->attach([
            'pre.form'
        ], [$this, 'setTagsArray']);

        $this->getEventManager()->attach([
            'pre.add', 'pre.edit'
        ], [$this, 'setValidation']);

        $this->getEventManager()->attach([
            'post.add', 'post.edit'
        ], [$this, 'saveTags']);
    }

    public function setTagsArray(Event $e)
    {
        $model = $e->getParam('model');

        if (!$model instanceof PortfolioModel) {
            return;
        }

        $tags = $model->getTags();

        $tagsArray = [];

        foreach ($tags as $tag) {
            if ($tag instanceof TagModel) {
                $tagsArray[] = $tag->getPortfolioTagId();
            } else {
                $tagsArray[] = $tag;
            }
        }

        $model->setTags($tagsArray);
    }

    /**
     * @param Event $e
     */
    public function saveTags(Event $e)
    {
        $model      = $e->getParam('model', new PortfolioModel());
        $post       = $e->getParam('post');
        $saved      = $e->getParam('saved');
        $tags       = $post['tags'];

        /* @var Tag $tagService */
        $tagService = $this->getRelatedService('tags');
        $mapper     = $tagService->getMapper();

        $id         = $model->getPortfolioId() ?? $saved;

        $currentTags = $tagService->getTagsByPortfolioId($id);
        $keptTags = [];

        /* @var TagModel $tag */
        foreach ($currentTags as $tag) {
            if (!in_array($tag->getPortfolioTagId(), $tags)) {
                $where = new Where();
                $where->equalTo('tagId', $tag->getPortfolioTagId())
                    ->and->equalTo('portfolioId', $id);
                $mapper->delete($where, 'portfolioTagMap');
            } else {
                $keptTags[] = $tag->getPortfolioTagId();
            }
        }

        $tags = array_diff($tags, $keptTags);

        foreach ($tags as $tag) {
            $mapper->insert([
                'tagId' => $tag,
                'portfolioId' => $id
            ], 'portfolioTagMap');
        }
    }

    /**
     * @param Event $e
     */
    public function setValidation(Event $e)
    {
        $form = $e->getParam('form');
        $model = $e->getParam('model', new PortfolioModel());
        $post = $e->getParam('post');

        $form->setData($post);

        $e->setParam('post', $post);
    }

    /**
     * @param int $id
     * @param null $col
     * @return array|mixed|\UthandoCommon\Model\ModelInterface
     */
    public function getById($id, $col = null)
    {
        $model = parent::getById($id, $col);
        $this->populate($model, true);

        return $model;
    }

    public function getPortfolioIdByTag($tag)
    {
        $models = $this->getMapper()->getPortfolioIdByTag($tag);
        return $models;
    }
}
