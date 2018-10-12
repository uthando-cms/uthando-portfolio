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


use UthandoCommon\View\AbstractViewHelper;

class Portfolio extends AbstractViewHelper
{
    /**
     * @var \UthandoPortfolio\Service\Portfolio
     */
    protected $service;

    public function __invoke(string $tag)
    {
        $models = $this->getService()->getPortfolioIdByTag($tag);
        return $models;
    }

    /**
     * @return \UthandoPortfolio\Service\Portfolio
     */
    public function getService()
    {
        if (!$this->service instanceof TagService) {

            $service = $this->getServiceLocator()
                ->getServiceLocator()
                ->get('UthandoServiceManager')
                ->get('UthandoPortfolio');
            $this->setService($service);
        }

        return $this->service;
    }

    /**
     * @param \UthandoPortfolio\Service\Portfolio $service
     * @return $this
     */
    public function setService(\UthandoPortfolio\Service\Portfolio $service)
    {
        $this->service = $service;
        return $this;
    }
}
