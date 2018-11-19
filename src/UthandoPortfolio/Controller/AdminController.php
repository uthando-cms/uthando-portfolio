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

use UthandoCommon\Controller\AbstractCrudController;
use UthandoPortfolio\Service\PortfolioService;

/**
 * Class Admin
 *
 * @package UthandoPortfolio\Mvc\Controller
 */
class AdminController extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'portfolioId'];
    protected $serviceName = PortfolioService::class;
    protected $route = 'admin/portfolio';
}
