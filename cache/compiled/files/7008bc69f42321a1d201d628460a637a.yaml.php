<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/config/system.yaml',
    'modified' => 1768243274,
    'size' => 461,
    'data' => [
        'home' => [
            'alias' => '/home',
            'hide_in_urls' => true
        ],
        'pages' => [
            'theme' => 'nur-ul-huda'
        ],
        'cache' => [
            'enabled' => true,
            'check' => [
                'method' => 'file'
            ]
        ],
        'assets' => [
            'css_pipeline' => false,
            'js_pipeline' => false,
            'enable_asset_timestamp' => false
        ],
        'errors' => [
            'display' => true,
            'log' => true
        ],
        'debugger' => [
            'enabled' => false,
            'provider' => 'clockwork'
        ],
        'gpm' => [
            'releases' => 'testing',
            'verify_peer' => true
        ],
        'updates' => [
            'safe_upgrade' => true,
            'safe_upgrade_snapshot_limit' => 5
        ],
        'strict_mode' => [
            'twig2_compat' => false,
            'twig3_compat' => true
        ]
    ]
];
