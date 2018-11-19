<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 20/08/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Hydrator;

use UthandoPortfolio\Model\TagModel as TagModel;
use UthandoCommon\Hydrator\AbstractHydrator;

/**
 * Class Tag
 * @package UthandoPortfolio\Hydrator
 */
class TagHydrator extends AbstractHydrator
{
    /**
     * @param TagModel $object
     * @return array
     */
    public function extract($object)
    {
        return [
            'portfolioTagId'    => $object->getPortfolioTagId(),
            'name'              => $object->getName(),
        ];
    }
}
