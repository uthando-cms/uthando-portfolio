<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Mvc\Controller
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Mvc\Controller;

use UthandoCommon\Controller\AbstractCrudController;

/**
 * Class Admin
 *
 * @package UthandoPortfolio\Mvc\Controller
 */
class Admin extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'portfolioId'];
    protected $serviceName = 'UthandoPortfolio';
    protected $route = 'admin/portfolio';
}
