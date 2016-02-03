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
                        'resource'  => 'menu:admin'
                    ],
                    'add' => [
                        'label'     => 'Add Item',
                        'action'    => 'add',
                        'route'     => 'admin/portfolio/edit',
                        'resource'  => 'menu:admin'
                    ],
                ],
                'route'     => 'admin/portfolio',
                'resource'  => 'menu:admin'
            ],
        ],
    ],
];
