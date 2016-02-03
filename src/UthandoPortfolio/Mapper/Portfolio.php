<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Mapper
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Mapper;

use UthandoCommon\Mapper\AbstractDbMapper;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Mapper
 */
class Portfolio extends AbstractDbMapper
{
    protected $table = 'portfolio';
    protected $primary = 'portfolioId';
}
