<?php

return [
    'navigation' => [
        'admin' => [
            'portfolio' => [
                'label' => 'Portfolio',
                'params' => [
                    'icon' => 'fa-camera',
                ],
                'pages' => [
                    'list' => [
                        'label'     => 'Portfolio List',
                        'action'    => 'index',
                        'route'     => 'admin/portfolio',
                        'resource'  => 'menu:admin',
                    ],
                    'add' => [
                        'label'     => 'Add Portfolio Item',
                        'action'    => 'add',
                        'route'     => 'admin/portfolio/edit',
                        'resource'  => 'menu:admin',
                        'visible'   => false,
                    ],
                    'edit' => [
                        'label'     => 'Edit Portfolio Item',
                        'action'    => 'edit',
                        'route'     => 'admin/portfolio/edit',
                        'resource'  => 'menu:admin',
                        'visible'   => false,
                    ],
                    'tag' => [
                        'label' => 'Tags',
                        'route' => 'admin/portfolio/tag',
                        'resource' => 'menu:admin',
                        'pages' => [
                            'add' => [
                                'label'     => 'Add Tag',
                                'action'    => 'add',
                                'route'     => 'admin/blog/tag/edit',
                                'resource'  => 'menu:admin',
                                'visible' => false,
                            ],
                            'edit' => [
                                'label'     => 'Edit Tag',
                                'action'    => 'edit',
                                'route'     => 'admin/blog/tag/edit',
                                'resource'  => 'menu:admin',
                                'visible' => false,
                            ],
                        ],
                    ],
                ],
                'route'     => 'admin/portfolio',
                'resource'  => 'menu:admin'
            ],
        ],
    ],
];
