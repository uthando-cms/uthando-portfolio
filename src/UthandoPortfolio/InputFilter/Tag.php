<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @author      Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @link        https://github.com/uthando-cms for the canonical source repository
 * @copyright   Copyright (c) 31/08/17 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license     see LICENSE
 */

namespace UthandoPortfolio\InputFilter;

use Zend\Filter\Digits;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\InputFilter\InputFilter;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorAwareTrait;
use Zend\Validator\StringLength;

/**
 * Class Tag
 * @package UthandoPortfolio\InputFilter
 */
class Tag extends InputFilter implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;

    public function init()
    {
        $this->add([
            'name' => 'tagId',
            'required' => false,
            'filters' => [
                ['name' => StringTrim::class],
                ['name' => StripTags::class],
                ['name' => Digits::class]
            ],
        ]);

        $this->add([
            'name' => 'name',
            'required'      => true,
            'filters'       => [
                ['name' => StripTags::class],
                ['name' => StringTrim::class],
            ],
            'validators'    => [
                ['name' => StringLength::class, 'options' => [
                    'encoding' => 'UTF-8',
                    'min' => 2,
                    'max' => 255
                ]],
            ],
        ]);
    }

    public function addNameNoRecordExists($exclude = null)
    {
        $exclude = (!$exclude) ?: [
            'field' => 'name',
            'value' => $exclude,
        ];

        $this->get('name')
            ->getValidatorChain()
            ->attachByName('Zend\Validator\Db\NoRecordExists', [
                'table' => 'portfolioTag',
                'field' => 'name',
                'adapter' => $this->getServiceLocator()->getServiceLocator()->get('Zend\Db\Adapter\Adapter'),
                'exclude' => $exclude,
            ]);

        return $this;
    }
}
