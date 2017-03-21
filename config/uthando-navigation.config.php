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
                        'visible'   => false,
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
                ],
                'route'     => 'admin/portfolio',
                'resource'  => 'menu:admin'
            ],
        ],
    ],
];
