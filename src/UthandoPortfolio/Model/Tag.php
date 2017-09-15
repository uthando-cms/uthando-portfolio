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
    protected $tagId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * @param int $tagId
     * @return Tag
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
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