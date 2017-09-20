<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 15/09/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Service;

use UthandoCommon\Service\AbstractMapperService;
use UthandoPortfolio\Mapper\Tag as TagMapper;
use UthandoPortfolio\Model\Tag as TagModel;
use Zend\EventManager\Event;

/**
 * Class Tag
 * @package UthandoPortfolio\Service
 * @method TagMapper getMapper($mapperClass = null, array $options = [])
 */
class Tag extends AbstractMapperService
{
    protected $serviceAlias = 'UthandoPortfolioTag';

    public function attachEvents()
    {
        $this->getEventManager()->attach([
            'pre.add', 'pre.edit'
        ], [$this, 'checkName']);
    }

    public function checkName(Event $e)
    {
        $post = $e->getParam('post');
        $form = $e->getParam('form');
        $model = $e->getParam('model', new TagModel());

        if (null === $post) {
            return;
        }

        /* @var \UthandoPortfolio\InputFilter\Tag $inputFilter */
        $inputFilter = $form->getInputFilter();
        $inputFilter->addNameNoRecordExists($model->getName());

        //$form->setData($post);

        $e->setParam('post', $post);
    }

    public function getTagsByPortfolioId($id)
    {
        $mapper = $this->getMapper();
        $result = $mapper->getTagsByPortfolioId($id);
        $tags = [];

        foreach ($result as $tag) {
            $tags[] = $tag;
        }

        return $tags;
    }
}
