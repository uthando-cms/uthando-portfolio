<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 15/09/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Controller;

use UthandoCommon\Controller\AbstractCrudController;
use UthandoPortfolio\Service\TagService;

class TagController extends AbstractCrudController
{
    protected $controllerSearchOverrides = ['sort' => 'portfolioTagId'];
    protected $serviceName = TagService::class;
    protected $route = 'admin/portfolio/tag';
    protected $routes = [];
}
