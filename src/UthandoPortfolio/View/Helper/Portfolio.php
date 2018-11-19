<?php declare(strict_types=1);
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 23/01/18 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\View\Helper;


use UthandoCommon\Service\ServiceManager;
use UthandoCommon\View\AbstractViewHelper;
use UthandoPortfolio\Service\PortfolioService;

class Portfolio extends AbstractViewHelper
{
    /**
     * @var \UthandoPortfolio\Service\PortfolioService
     */
    protected $service;

    public function __invoke(string $tag)
    {
        $models = $this->getService()->getPortfolioIdByTag($tag);
        return $models;
    }

    /**
     * @return \UthandoPortfolio\Service\PortfolioService
     */
    public function getService()
    {
        if (!$this->service instanceof TagService) {

            $service = $this->getServiceLocator()
                ->getServiceLocator()
                ->get(ServiceManager::class)
                ->get(PortfolioService::class);
            $this->setService($service);
        }

        return $this->service;
    }

    /**
     * @param \UthandoPortfolio\Service\PortfolioService $service
     * @return $this
     */
    public function setService(\UthandoPortfolio\Service\PortfolioService $service)
    {
        $this->service = $service;
        return $this;
    }
}
