<?php

use UthandoPortfolio\View\Helper\Portfolio;
use UthandoPortfolio\View\Helper\Tags;
use UthandoPortfolio\Form\Element\TagSelect;

return [
    'controllers' => [
        'invokables' => [
            'UthandoPortfolio\Controller\Admin'     => 'UthandoPortfolio\Mvc\Controller\Admin',
            'UthandoPortfolio\Controller\Portfolio' => 'UthandoPortfolio\Mvc\Controller\Portfolio',
            'UthandoPortfolio\Controller\Tag'       => 'UthandoPortfolio\Mvc\Controller\Tag',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\Form\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\Form\Tag',

            TagSelect::class        => TagSelect::class,
        ],
    ],
    'hydrators' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\Hydrator\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\Hydrator\Tag',
        ],
    ],
    'input_filters' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\InputFilter\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\InputFilter\Tag',
        ],
    ],
    'uthando_mappers' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\Mapper\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\Mapper\Tag',
        ],
    ],
    'uthando_models' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\Model\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\Model\Tag',
        ]
    ],
    'uthando_services' => [
        'invokables' => [
            'UthandoPortfolio'      => 'UthandoPortfolio\Service\Portfolio',
            'UthandoPortfolioTag'   => 'UthandoPortfolio\Service\Tag',
        ],
    ],
    'view_helpers' => [
        'invokables' => [
            'Portfolio'     => Portfolio::class,
            'PortfolioTags' => Tags::class,
        ],
    ],
    'view_manager' => [
        'template_map' => include __DIR__ . '/../template_map.php'
    ],
    'router' => [
        'routes' => [
            'portfolio' => [
                'type' => 'Literal',
                'options' => [
                    'route' => '/portfolio',
                    'defaults' => [
                        '__NAMESPACE__' => 'UthandoPortfolio\Controller',
                        'controller'    => 'Portfolio',
                        'action'        => 'view',
                    ],
                ],
                'may_terminate' => true,
            ],
        ],
    ],
];