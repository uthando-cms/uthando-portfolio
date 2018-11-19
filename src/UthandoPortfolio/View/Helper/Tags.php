<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 2017 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\View\Helper;

use UthandoCommon\Service\ServiceManager;
use UthandoPortfolio\Model\TagModel as TagModel;
use UthandoPortfolio\Service\TagService as TagService;
use UthandoCommon\View\AbstractViewHelper;

/**
 * Class Tags
 *
 * @package UthandoPortfolio\View\Helper
 */
class Tags extends AbstractViewHelper
{
    /**
     * @var TagService
     */
    protected $service;

    public function __invoke()
    {
        $tags = $this->getService()->fetchAll();

        $html = '';

        /** @var TagModel $tag */
        foreach ($tags as $tag) {
            $html .= '<a class="no-underline" href="#"><span class="label label-default">' . $tag->getName() . '</span>&nbsp;</a>';
        }

        return $html;
    }

    /**
     * @return TagService
     */
    public function getService()
    {
        if (!$this->service instanceof TagService) {

            $service = $this->getServiceLocator()
                ->getServiceLocator()
                ->get(ServiceManager::class)
                ->get(TagService::class);
            $this->setService($service);
        }

        return $this->service;
    }

    /**
     * @param TagService $service
     * @return $this
     */
    public function setService(TagService $service)
    {
        $this->service = $service;
        return $this;
    }
}
