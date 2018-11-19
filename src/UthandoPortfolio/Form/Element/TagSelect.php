<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 31/08/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Form\Element;

use UthandoCommon\Service\ServiceManager;
use UthandoPortfolio\Service\TagService;
use Zend\Form\Element\Select;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;

class TagSelect extends Select implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    protected $emptyOption = '---Please select tags---';

    public function setOptions($options)
    {
        parent::setOptions($options);

        if (array_key_exists('empty_option', $options)) {
            $this->setEmptyOption($options['empty_option']);
        }
    }

    public function init()
    {
        $tags = $this->getServiceLocator()
            ->getServiceLocator()
            ->get(ServiceManager::class)
            ->get(TagService::class)
            ->fetchAll();

        $tagOptions = [];

        /* @var $tag \UthandoPortfolio\Model\TagModel*/
        foreach($tags as $tag) {
            $tagOptions[$tag->getPortfolioTagId()] = $tag->getName();
        }

        $this->setValueOptions($tagOptions);
    }
}
