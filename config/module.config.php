<?php

return [
    'controllers' => [
        'invokables' => [
            'UthandoPortfolio\Controller\Admin'     => 'UthandoPortfolio\Mvc\Controller\Admin',
            'UthandoPortfolio\Controller\Portfolio' => 'UthandoPortfolio\Mvc\Controller\Portfolio',
        ],
    ],
    'form_elements' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\Form\Portfolio',
        ],
    ],
    'hydrators' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\Hydrator\Portfolio',
        ],
    ],
    'input_filters' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\InputFilter\Portfolio',
        ],
    ],
    'uthando_mappers' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\Mapper\Portfolio',
        ],
    ],
    'uthando_models' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\Model\Portfolio',
        ]
    ],
    'uthando_services' => [
        'invokables' => [
            'UthandoPortfolio' => 'UthandoPortfolio\Service\Portfolio',
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