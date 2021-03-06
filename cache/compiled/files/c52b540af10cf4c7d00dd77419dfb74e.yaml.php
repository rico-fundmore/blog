<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/avoy.me/httpdocs/blog/user/themes/bootstrap/blueprints/blog.yaml',
    'modified' => 1581899950,
    'data' => [
        'title' => 'Blog',
        '@extends' => [
            'type' => 'default',
            'context' => 'blueprints://pages'
        ],
        'child_type' => 'item',
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'advanced' => [
                            'fields' => [
                                'overrides' => [
                                    'fields' => [
                                        'header.child_type' => [
                                            'default' => 'item'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'blog' => [
                            'type' => 'tab',
                            'title' => 'Blog List',
                            'fields' => [
                                'header.headertitle' => [
                                    'type' => 'text',
                                    'label' => 'Header Title',
                                    'default' => 'Your Local Multimedia Blog'
                                ],
                                'header.headercontent' => [
                                    'type' => 'text',
                                    'label' => 'Header Subtitle',
                                    'default' => 'Everything about web & graphics & motion'
                                ],
                                'header.headerimage' => [
                                    'type' => 'pagemediaselect',
                                    'label' => 'Header Image'
                                ],
                                'header.content.items' => [
                                    'type' => 'select',
                                    'label' => 'Items',
                                    'default' => '@self.children',
                                    'options' => [
                                        '@self.children' => 'Children'
                                    ]
                                ],
                                'header.content.limit' => [
                                    'type' => 'text',
                                    'label' => 'Max Item Count',
                                    'default' => 5,
                                    'validate' => [
                                        'required' => true,
                                        'type' => 'int',
                                        'min' => 1
                                    ]
                                ],
                                'header.content.order.by' => [
                                    'type' => 'select',
                                    'label' => 'Order By',
                                    'default' => 'date',
                                    'options' => [
                                        'folder' => 'Folder',
                                        'title' => 'Title',
                                        'date' => 'Date',
                                        'default' => 'Default'
                                    ]
                                ],
                                'header.content.order.dir' => [
                                    'type' => 'select',
                                    'label' => 'Order',
                                    'default' => 'desc',
                                    'options' => [
                                        'asc' => 'Ascending',
                                        'desc' => 'Descending'
                                    ]
                                ],
                                'header.content.pagination' => [
                                    'type' => 'toggle',
                                    'label' => 'Pagination',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'Enabled',
                                        0 => 'Disabled'
                                    ]
                                ]
                            ]
                        ],
                        'sidebar' => [
                            'type' => 'tab',
                            'title' => 'Sidebar',
                            'fields' => [
                                'header.sidebar.about' => [
                                    'type' => 'fieldset',
                                    'icon' => 'info-circle',
                                    'title' => 'About',
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.sidebar.about.pic' => [
                                            'type' => 'pagemediaselect',
                                            'label' => 'My Pic'
                                        ],
                                        'header.sidebar.about.title' => [
                                            'type' => 'title',
                                            'label' => 'About Me Title',
                                            'default' => 'About Me'
                                        ],
                                        'header.sidebar.about.text' => [
                                            'type' => 'textarea',
                                            'label' => 'About Me Text'
                                        ],
                                        'header.sidebar.about.socials' => [
                                            'label' => 'Social Links',
                                            'type' => 'list',
                                            'fields' => [
                                                '.title' => [
                                                    'label' => 'Title',
                                                    'type' => 'text'
                                                ],
                                                '.fa' => [
                                                    'label' => 'Font Awesome Class',
                                                    'type' => 'text'
                                                ],
                                                '.url' => [
                                                    'label' => 'Link URL',
                                                    'type' => 'text'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'header.sidebar.rposts' => [
                                    'type' => 'fieldset',
                                    'icon' => 'file-text-o',
                                    'title' => 'Recent Posts',
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.sidebar.rposts.title' => [
                                            'type' => 'title',
                                            'label' => 'Recent Posts Title',
                                            'default' => 'Recent Posts'
                                        ],
                                        'header.sidebar.rposts.pages' => [
                                            'type' => 'pages',
                                            'multiple' => true,
                                            'label' => 'Recent Posts Title'
                                        ]
                                    ]
                                ],
                                'header.sidebar.favcourses' => [
                                    'type' => 'fieldset',
                                    'icon' => 'file-text-o',
                                    'title' => 'Recent Posts',
                                    'collapsible' => true,
                                    'fields' => [
                                        'header.sidebar.favcourses.title' => [
                                            'type' => 'title',
                                            'label' => 'Favorite Courses Title',
                                            'default' => 'Favorite Courses'
                                        ],
                                        'header.sidebar.favcourses.links' => [
                                            'label' => 'Resources',
                                            'type' => 'list',
                                            'fields' => [
                                                '.title' => [
                                                    'label' => 'Title',
                                                    'type' => 'text'
                                                ],
                                                '.author' => [
                                                    'label' => 'Author',
                                                    'type' => 'text'
                                                ],
                                                '.url' => [
                                                    'label' => 'Resource URL',
                                                    'type' => 'text'
                                                ],
                                                '.image' => [
                                                    'type' => 'pagemediaselect',
                                                    'label' => 'Custom Icon'
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
