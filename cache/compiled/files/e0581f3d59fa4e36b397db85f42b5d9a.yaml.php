<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/avoy.me/httpdocs/blog/user/themes/avoy/blueprints.yaml',
    'modified' => 1582067979,
    'data' => [
        'name' => 'Avoy',
        'version' => '1.7.0',
        'description' => 'My website powered by bootstrap 4 and js',
        'icon' => 'bold',
        'author' => [
            'name' => 'Anton Voytenko',
            'email' => 'avoy18@gmail.com',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://avoy.me',
        'demo' => 'https://avoy.me',
        'keywords' => 'bootstrap, theme, framework',
        'bugs' => 'https://avoy.me',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'bootstrapper'
            ],
            1 => [
                'name' => 'grav',
                'version' => '>=1.5.10'
            ]
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
