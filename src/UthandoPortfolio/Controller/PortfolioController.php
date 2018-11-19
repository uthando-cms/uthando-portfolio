<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Mvc\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Controller;

use UthandoCommon\Service\ServiceManager;
use UthandoCommon\Service\ServiceTrait;
use UthandoPortfolio\Service\PortfolioService;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Mvc\Controller
 */
class PortfolioController extends AbstractActionController
{
    use ServiceTrait;

    public function viewAction()
    {
        /* @var \UthandoPortfolio\Service\PortfolioService $service */
        $service = $this->getService(ServiceManager::class)
            ->get(PortfolioService::class);

        $models = $service->fetchAll();

        return ['models' => $models];
    }
}
