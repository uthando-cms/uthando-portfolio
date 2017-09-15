<?php

return [
    'router' => [
        'routes' => [
            'admin' => [
                'child_routes' => [
                    'portfolio' => [
                        'type' => 'Literal',
                        'options' => [
                            'route' => '/portfolio',
                            'constraints'   => [
                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ],
                            'defaults' => [
                                '__NAMESPACE__' => 'UthandoPortfolio\Controller',
                                'controller'    => 'Admin',
                                'action'        => 'index',
                            ],
                        ],
                        'may_terminate' => true,
                        'child_routes' => [
                            'edit' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/[:action[/id/[:id]]]',
                                    'constraints'   => [
                                        'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                        'id'		=> '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'edit',
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                            'page' => [
                                'type'    => 'Segment',
                                'options' => [
                                    'route'         => '/page/[:page]',
                                    'constraints'   => [
                                        'page' => '\d+'
                                    ],
                                    'defaults'      => [
                                        'action'        => 'list',
                                        'page'          => 1,
                                    ],
                                ],
                                'may_terminate' => true,
                            ],
                            'tag' => [
                                'type' => 'Segment',
                                'options' => [
                                    'route' => '/tag',
                                    'defaults' => [
                                        'controller' => 'Tag',
                                        'action' => 'index',
                                        'force-ssl' => 'ssl'
                                    ]
                                ],
                                'may_terminate' => true,
                                'child_routes' => [
                                    'edit' => [
                                        'type'    => 'Segment',
                                        'options' => [
                                            'route'         => '/[:action[/id/[:id]]]',
                                            'constraints'   => [
                                                'action'    => '[a-zA-Z][a-zA-Z0-9_-]*',
                                                'id'		=> '\d+'
                                            ],
                                            'defaults'      => [
                                                'action'        => 'edit',
                                                'force-ssl'     => 'ssl'
                                            ],
                                        ],
                                        'may_terminate' => true,
                                    ],
                                    'page' => [
                                        'type'    => 'Segment',
                                        'options' => [
                                            'route'         => '/page/[:page]',
                                            'constraints'   => [
                                                'page' => '\d+'
                                            ],
                                            'defaults'      => [
                                                'action'        => 'list',
                                                'page'          => 1,
                                                'force-ssl'     => 'ssl'
                                            ],
                                        ],
                                        'may_terminate' => true,
                                    ],
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
