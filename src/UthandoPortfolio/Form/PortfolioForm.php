<?php
/**
 * Uthando CMS (http://www.shaunfreeman.co.uk/)
 *
 * @package   UthandoPortfolio\Form
 * @author    Shaun Freeman <shaun@shaunfreeman.co.uk>
 * @copyright Copyright (c) 2016 Shaun Freeman. (http://www.shaunfreeman.co.uk)
 * @license   see LICENSE
 */

namespace UthandoPortfolio\Form;

use TwbBundle\Form\View\Helper\TwbBundleForm;
use UthandoPortfolio\Form\Element\TagSelect;
use Zend\Form\Element\Button;
use Zend\Form\Element\Csrf;
use Zend\Form\Element\Hidden;
use Zend\Form\Element\Text;
use Zend\Form\Element\Textarea;
use Zend\Form\Form;

/**
 * Class Portfolio
 *
 * @package UthandoPortfolio\Form
 */
class PortfolioForm extends Form
{
    /**
     * Set up form elements
     */
    public function init()
    {
        $this->add([
            'name' => 'label',
            'type' => Text::class,
            'attributes' => [
                'placeholder' => 'Label',
            ],
            'options' => [
                'label' => 'Label',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'image',
            'type' => Text::class,
            'attributes' => [
                'placeholder' => 'Image',
                'id' => 'portfolio-image',
            ],
            'options' => [
                'label' => 'Image',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
                'add-on-append' => new Button('portfolio-image-button', [
                    'label' => 'Add Image',
                ]),
            ],
        ]);

        $this->add([
            'name' => 'link',
            'type' => Text::class,
            'attributes' => [
                'placeholder' => 'Link',
            ],
            'options' => [
                'label' => 'Link',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'tags',
            'type' => TagSelect::class,
            'options' => [
                'label' => 'Tags',
                'required' => true,
                'empty_option' => null,
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
                'help-block' => '<ul class="text-info">
                  <li>For Windows & Linux: Hold down the control (ctrl) button to select multiple options</li>
                  <li>For Mac: Hold down the command button to select multiple options</li>
                </ul>'
            ],
            'attributes' => [
                'multiple' => true,
                'size' => 10
            ],
        ]);

        $this->add([
            'name' => 'description',
            'type' => Textarea::class,
            'attributes' => [
                'placeholder' => 'Description',
            ],
            'options' => [
                'label' => 'Description',
                'twb-layout' => TwbBundleForm::LAYOUT_HORIZONTAL,
                'column-size' => 'sm-10',
                'label_attributes' => [
                    'class' => 'col-sm-2',
                ],
            ],
        ]);

        $this->add([
            'name' => 'portfolioId',
            'type' => Hidden::class,
        ]);

        $this->add([
            'name' => 'security',
            'type' => Csrf::class,
        ]);
    }
}
