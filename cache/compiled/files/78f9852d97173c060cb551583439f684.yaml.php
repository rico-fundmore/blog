<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/avoy.me/httpdocs/blog/user/plugins/admin-power-tools/blueprints/child-pages.yaml',
    'modified' => 1581867223,
    'data' => [
        'name' => 'foo',
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'type' => 'tab',
                            'fields' => [
                                'columns' => [
                                    'type' => 'columns',
                                    'fields' => [
                                        'column2' => [
                                            'type' => 'column',
                                            'fields' => [
                                                'order-child' => [
                                                    'type' => 'order-child',
                                                    'label' => 'Child Pages:',
                                                    'sitemap' => NULL
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
