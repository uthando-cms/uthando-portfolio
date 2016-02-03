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

use UthandoCommon\Service\ServiceTrait;
use Zend\Mvc\Controller\AbstractActionController;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Mvc\Controller
 */
class Portfolio extends AbstractActionController
{
    use ServiceTrait;

    public function viewAction()
    {
        /* @var \UthandoPortfolio\Service\Portfolio $service */
        $service = $this->getService('UthandoServiceManager')
            ->get('UthandoPortfolio');

        $models = $service->fetchAll();

        return ['models' => $models];
    }
}
