<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Hydrator
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Hydrator;

use UthandoCommon\Hydrator\AbstractHydrator;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Hydrator
 */
class Portfolio extends AbstractHydrator
{
    /**
     * @param \UthandoPortfolio\Model\Portfolio object
     * @return array
     */
    public function extract($object)
    {
        return [
            'portfolioId'   => $object->getPortfolioId(),
            'label'         => $object->getLabel(),
            'image'         => $object->getImage(),
            'link'          => $object->getLink(),
            'description'   => $object->getDescription(),
        ];
    }
}
