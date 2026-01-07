<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/config/navigation.yaml',
    'modified' => 1767728456,
    'size' => 585,
    'data' => [
        'main_menu' => [
            0 => [
                'title' => 'Home',
                'type' => 'static_node',
                'route' => '/'
            ],
            1 => [
                'title' => 'Latest News',
                'type' => 'smart_node',
                'route' => '/blog',
                'collection' => [
                    'items' => '@root.descendants',
                    'filter' => [
                        'type' => 'blog'
                    ],
                    'order' => [
                        'by' => 'date',
                        'dir' => 'desc'
                    ],
                    'limit' => 5
                ]
            ],
            2 => [
                'title' => 'Services',
                'type' => 'static_node',
                'route' => '/services',
                'children' => [
                    0 => [
                        'title' => 'Consulting',
                        'type' => 'static_node',
                        'route' => '/services/consulting'
                    ],
                    1 => [
                        'title' => 'Development',
                        'type' => 'static_node',
                        'route' => '/services/development'
                    ]
                ]
            ]
        ]
    ]
];
