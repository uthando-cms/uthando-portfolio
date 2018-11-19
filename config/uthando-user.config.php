<?php

use UthandoPortfolio\Controller\AdminController;
use UthandoPortfolio\Controller\PortfolioController;
use UthandoPortfolio\Controller\TagController;

return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                PortfolioController::class => ['action' => ['view']],
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                AdminController::class => ['action' => 'all'],
                                TagController::class => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                AdminController::class,
                PortfolioController::class,
                TagController::class,
            ],
        ],
    ],
];
