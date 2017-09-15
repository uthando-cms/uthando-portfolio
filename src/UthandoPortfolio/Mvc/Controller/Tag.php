<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 15/09/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Mvc\Controller;

use UthandoCommon\Controller\AbstractCrudController;

class Tag extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'tagId'];
    protected $serviceName = 'UthandoPortfolioTag';
    protected $route = 'admin/portfolio/tag';
    protected $routes = [];
}
