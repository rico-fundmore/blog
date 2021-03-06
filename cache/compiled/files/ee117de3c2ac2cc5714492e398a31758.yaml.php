<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/avoy.me/httpdocs/blog/user/plugins/tinypng/blueprints.yaml',
    'modified' => 1581049873,
    'data' => [
        'name' => 'TinyPNG',
        'version' => '1.0.0',
        'description' => 'Compress all image with TinyPNG',
        'icon' => 'compress',
        'author' => [
            'name' => 'Dallas Lu',
            'email' => 'i@luda.me'
        ],
        'homepage' => 'https://github.com/ladotech/grav-plugin-tinypng',
        'keywords' => 'grav, tinypng, plugin, compress, tinify',
        'bugs' => 'https://github.com/ladotech/grav-plugin-tinypng/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'api_key' => [
                    'type' => 'text',
                    'label' => 'API Key',
                    'help' => 'You can get api key from this page: https://tinypng.com/developers',
                    'placeholder' => 'YOUR_TINYPNG_API_KEY'
                ]
            ]
        ]
    ]
];
