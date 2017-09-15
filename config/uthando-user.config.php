<?php

return [
    'uthando_user' => [
        'acl' => [
            'roles' => [
                'guest' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoPortfolio\Controller\Portfolio' => ['action' => ['view']],
                            ],
                        ],
                    ],
                ],
                'admin' => [
                    'privileges' => [
                        'allow' => [
                            'controllers' => [
                                'UthandoPortfolio\Controller\Admin' => ['action' => 'all'],
                                'UthandoPortfolio\Controller\Tag' => ['action' => 'all'],
                            ],
                        ],
                    ],
                ],
            ],
            'resources' => [
                'UthandoPortfolio\Controller\Admin',
                'UthandoPortfolio\Controller\Portfolio',
                'UthandoPortfolio\Controller\Tag',
            ],
        ],
    ],
];
