<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 2017 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\Model;

use UthandoCommon\Model\Model;
use UthandoCommon\Model\ModelInterface;

/**
 * Class Tag
 *
 * @package UthandoBlog\Model
 */
class Tag implements ModelInterface
{
    use Model;

    /**
     * @var int
     */
    protected $portfolioTagId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getPortfolioTagId()
    {
        return $this->portfolioTagId;
    }

    /**
     * @param int $portfolioTagId
     * @return Tag
     */
    public function setPortfolioTagId($portfolioTagId)
    {
        $this->portfolioTagId = $portfolioTagId;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Tag
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
}