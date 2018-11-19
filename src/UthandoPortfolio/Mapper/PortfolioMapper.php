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
use Zend\Db\Sql\Select;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Mapper
 */
class PortfolioMapper extends AbstractDbMapper
{
    protected $table = 'portfolio';
    protected $primary = 'portfolioId';

    public function getPortfolioIdByTag($tag)
    {
        $tag = (string) $tag;
        $select = $this->getSelect();
        $select->join(
            'portfolioTagMap',
            'portfolio.portfolioId=portfolioTagMap.portfolioId',
            [],
            Select::JOIN_LEFT
        )->join(
            'portfolioTag',
            'portfolioTag.portfolioTagId=portfolioTagMap.portfolioTagId',
            [],
            Select::JOIN_LEFT
        )->where->equalTo('portfolioTag.name', $tag);

        return $this->fetchResult($select);
    }
}
