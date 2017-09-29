<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 18/08/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Mapper;

use UthandoCommon\Mapper\AbstractDbMapper;
use Zend\Db\Sql\Select;

/**
 * Class Tag
 * @package UthandoPortfolio\Mapper
 */
class Tag extends AbstractDbMapper
{
    protected $table = 'portfolioTag';
    protected  $primary = 'portfolioTagId';

    /**
     * @param $id
     * @return \Zend\Db\ResultSet\HydratingResultSet|\Zend\Db\ResultSet\ResultSet|\Zend\Paginator\Paginator
     */
    public function getTagsByPortfolioId($id)
    {
        $id = (int) $id;
        $select = $this->getSelect();
        $select->join(
            'portfolioTagMap',
            'portfolioTag.portfolioTagId=portfolioTagMap.portfolioTagId',
            [],
            Select::JOIN_LEFT
        )->where->equalTo('portfolioTagMap.portfolioId', $id);

        $this->getSqlString($select);

        return $this->fetchResult($select);
    }

    public function getTagByName($name)
    {
        $seo = (string) $name;
        $select = $this->getSelect();
        $select->where->equalTo('name', $name);
        $result = $this->fetchResult($select);

        return $result->current();
    }
}