<?php

use UthandoPortfolio\Controller\AdminController;
use UthandoPortfolio\Controller\PortfolioController;
use UthandoPortfolio\Controller\TagController;
use UthandoPortfolio\Service\PortfolioService;
use UthandoPortfolio\Service\TagService;
use UthandoPortfolio\View\Helper\Portfolio;
use UthandoPortfolio\View\Helper\Tags;

return [
    'controllers' => [
        'invokables' => [
            AdminController::class      => AdminController::class,
            PortfolioController::class  => PortfolioController::class,
            TagController::class        => TagController::class
        ],
    ],
    'uthando_services' => [
        'invokables' => [
            PortfolioService::class => PortfolioService::class,
            TagService::class       => TagService::class,
        ],
    ],
    'view_helpers' => [
        'aliases' => [
            'Portfolio'     => Portfolio::class,
            'PortfolioTags' => Tags::class,
        ],
        'invokables' => [
            Portfolio::class    => Portfolio::class,
            Tags::class         => Tags::class,
        ]
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
                        'controller'    => PortfolioController::class,
                        'action'        => 'view',
                    ],
                ],
                'may_terminate' => true,
            ],
        ],
    ],
];