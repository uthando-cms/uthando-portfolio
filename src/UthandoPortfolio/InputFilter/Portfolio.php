<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\InputFilter
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\InputFilter;

use Zend\InputFilter\InputFilter;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\InputFilter
 */
class Portfolio extends InputFilter
{
    public function init()
    {
        $this->add([
            'name' => 'portfolioId',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
                ['name' => 'Digits'],
            ],
        ]);

        $this->add([
            'name' => 'label',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
            ],
            'validators' => [
                ['name'    => 'StringLength','options' => [
                    'encoding' => 'UTF-8',
                    'max'      => 255,
                ]],
            ],
        ]);

        $this->add([
            'name' => 'image',
            'required' => true,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
            ],
            'validators' => [
                ['name'    => 'StringLength','options' => [
                    'encoding' => 'UTF-8',
                    'max'      => 255,
                ]],
            ],
        ]);

        $this->add([
            'name' => 'link',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
            ],
            'validators' => [
                ['name'    => 'StringLength','options' => [
                    'encoding' => 'UTF-8',
                    'max'      => 255,
                ]],
            ],
        ]);

        $this->add([
            'name' => 'decription',
            'required' => false,
            'filters' => [
                ['name' => 'StringTrim'],
                ['name' => 'StripTags'],
            ],
        ]);
    }
}
