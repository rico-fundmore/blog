<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/avoy.me/httpdocs/blog/user/themes/bootstrap/blueprints.yaml',
    'modified' => 1581785785,
    'data' => [
        'name' => 'Avoy Blog, powered by Bootstrap',
        'version' => '1.7.0',
        'description' => 'Bootstrap is built using the popular **Bootstrap** Framework',
        'icon' => 'bold',
        'author' => [
            'name' => 'Anton Voytenko',
            'email' => 'devs@getgrav.org',
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
