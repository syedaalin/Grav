<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/themes/ngo-theme/blueprints.yaml',
    'modified' => 1767918684,
    'size' => 26365,
    'data' => [
        'name' => 'NGO Theme',
        'slug' => 'ngo-theme',
        'type' => 'theme',
        'version' => '3.0.0',
        'description' => 'NGO Premium Theme - 2026 Agentic Standard',
        'icon' => 'microchip',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'https://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'https://demo.getgrav.org/onepage-skeleton',
        'keywords' => 'quark, spectre, theme, core, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-quark/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'global_tab' => [
                            'type' => 'tab',
                            'title' => 'Global',
                            'fields' => [
                                'production-mode' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.PRODUCTION_MODE',
                                    'help' => 'THEME_NGO.ADMIN.PRODUCTION_MODE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'grid-size' => [
                                    'type' => 'select',
                                    'label' => 'THEME_NGO.ADMIN.GRID_SIZE',
                                    'help' => 'THEME_NGO.ADMIN.GRID_SIZE_HELP',
                                    'size' => 'small',
                                    'options' => [
                                        '' => 'THEME_NGO.ADMIN.GRID_SIZE_NONE',
                                        'grid-xl' => 'THEME_NGO.ADMIN.GRID_SIZE_EXTRA_LARGE',
                                        'grid-lg' => 'THEME_NGO.ADMIN.GRID_SIZE_LARGE',
                                        'grid-md' => 'THEME_NGO.ADMIN.GRID_SIZE_MEDIUM'
                                    ]
                                ],
                                'search_section' => [
                                    'type' => 'section',
                                    'title' => 'Search Configuration',
                                    'underline' => true
                                ],
                                'search_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Search',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'sustainability_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NGO.ADMIN.SUSTAINABILITY',
                                    'underline' => true
                                ],
                                'sustainability_score' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NGO.ADMIN.SUSTAINABILITY_SCORE',
                                    'help' => 'THEME_NGO.ADMIN.SUSTAINABILITY_SCORE_HELP',
                                    'size' => 'x-small',
                                    'default' => 'A+'
                                ],
                                'co2_per_view' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NGO.ADMIN.CO2_PER_VIEW',
                                    'help' => 'THEME_NGO.ADMIN.CO2_PER_VIEW_HELP',
                                    'size' => 'x-small',
                                    'default' => '0.3g'
                                ],
                                'agentic_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NGO.ADMIN.AGENTIC_SETTINGS',
                                    'underline' => true
                                ],
                                'ai_disclosure' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.AI_DISCLOSURE',
                                    'help' => 'THEME_NGO.ADMIN.AI_DISCLOSURE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'ai_assistant' => [
                                    'type' => 'toggle',
                                    'label' => 'AI Assistant',
                                    'help' => 'Enable the AI-powered chatbot assistant for site navigation and support',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'doodle_engine' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.DOODLE_ENGINE',
                                    'help' => 'THEME_NGO.ADMIN.DOODLE_ENGINE_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'eco_mode' => [
                                    'type' => 'toggle',
                                    'label' => 'Sustainability Mode',
                                    'help' => 'Optimize assets and minimize CO2 footprint (Agentic Standard)',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'focus_mode' => [
                                    'type' => 'toggle',
                                    'label' => 'Neurodivergent Focus Mode',
                                    'help' => 'Minimize animations and simplify layouts for better focus',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ]
                            ]
                        ],
                        'header_tab' => [
                            'type' => 'tab',
                            'title' => 'Header & Nav',
                            'fields' => [
                                'header_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NGO.ADMIN.HEADER_DEFAULTS',
                                    'underline' => true
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'THEME_NGO.ADMIN.CUSTOM_LOGO',
                                    'size' => 'large',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'header-fixed' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.HEADER_FIXED',
                                    'help' => 'THEME_NGO.ADMIN.HEADER_FIXED_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-animated' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.HEADER_ANIMATED',
                                    'help' => 'THEME_NGO.ADMIN.HEADER_ANIMATED_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-dark' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.HEADER_DARK',
                                    'help' => 'THEME_NGO.ADMIN.HEADER_DARK_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'header-transparent' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.HEADER_TRANSPARENT',
                                    'help' => 'THEME_NGO.ADMIN.HEADER_TRANSPARENT_HELP',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'utility_bar_section' => [
                                    'type' => 'section',
                                    'title' => 'Utility Bar Settings',
                                    'underline' => true
                                ],
                                'utility_hijri_toggle' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Hijri Date',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'utility_prayer_toggle' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Prayer Times',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'utility_prayer_city' => [
                                    'type' => 'text',
                                    'label' => 'Default City for Prayer Times',
                                    'default' => 'Karachi',
                                    'size' => 'medium'
                                ],
                                'utility_language_toggle' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Language Switcher',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'utility_accessibility_toggle' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Accessibility Tools',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'mega_menu_section' => [
                                    'type' => 'section',
                                    'title' => 'Mega Menu Structure',
                                    'underline' => true
                                ],
                                'mega_menu_structure' => [
                                    'type' => 'list',
                                    'label' => 'Menu Columns',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Column Title'
                                        ],
                                        '.links' => [
                                            'type' => 'list',
                                            'label' => 'Links',
                                            'fields' => [
                                                '.text' => [
                                                    'type' => 'text',
                                                    'label' => 'Link Text'
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'URL'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'cta_section_header' => [
                                    'type' => 'section',
                                    'title' => 'Header CTA Button',
                                    'underline' => true
                                ],
                                'cta_button' => [
                                    'type' => 'fieldset',
                                    'title' => 'CTA Button Configuration',
                                    'collapsed' => false,
                                    'fields' => [
                                        'enabled' => [
                                            'type' => 'toggle',
                                            'label' => 'Enable CTA Button',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ],
                                        'text' => [
                                            'type' => 'text',
                                            'label' => 'Button Text',
                                            'default' => 'Student Login',
                                            'size' => 'medium'
                                        ],
                                        'url' => [
                                            'type' => 'url',
                                            'label' => 'Button URL',
                                            'default' => 'https://moodle.aabtaab.com',
                                            'size' => 'medium'
                                        ],
                                        'icon' => [
                                            'type' => 'text',
                                            'label' => 'Button Icon',
                                            'default' => 'graduation-cap',
                                            'help' => 'FontAwesome icon name (without fa- prefix)'
                                        ],
                                        'external' => [
                                            'type' => 'toggle',
                                            'label' => 'Open in New Tab',
                                            'highlight' => 1,
                                            'default' => 1,
                                            'options' => [
                                                1 => 'PLUGIN_ADMIN.ENABLED',
                                                0 => 'PLUGIN_ADMIN.DISABLED'
                                            ],
                                            'validate' => [
                                                'type' => 'bool'
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'hero_tab' => [
                            'type' => 'tab',
                            'title' => 'Hero',
                            'fields' => [
                                'hero_section' => [
                                    'type' => 'section',
                                    'title' => 'Hero Section Settings',
                                    'underline' => true
                                ],
                                'hero_video_url' => [
                                    'type' => 'file',
                                    'label' => 'Hero Background Video',
                                    'destination' => 'theme://images/hero',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'video/*'
                                    ]
                                ],
                                'hero_glass_opacity' => [
                                    'type' => 'range',
                                    'label' => 'Glass Overlay Opacity',
                                    'default' => 60,
                                    'min' => 0,
                                    'max' => 100,
                                    'append' => '%'
                                ],
                                'hero_primary_cta_text' => [
                                    'type' => 'text',
                                    'label' => 'Primary CTA Text',
                                    'default' => 'Explore Services'
                                ],
                                'hero_primary_cta_link' => [
                                    'type' => 'text',
                                    'label' => 'Primary CTA Link',
                                    'default' => '/services'
                                ],
                                'hero_secondary_cta_text' => [
                                    'type' => 'text',
                                    'label' => 'Secondary CTA Text',
                                    'default' => 'Support Our Mission'
                                ],
                                'hero_secondary_cta_link' => [
                                    'type' => 'text',
                                    'label' => 'Secondary CTA Link',
                                    'default' => '/donate'
                                ],
                                'inspiration_section' => [
                                    'type' => 'section',
                                    'title' => 'Daily Inspiration Settings',
                                    'underline' => true
                                ],
                                'inspiration_text' => [
                                    'type' => 'text',
                                    'label' => 'Inspiration Text',
                                    'help' => 'The quote or verse to display in the hero section',
                                    'default' => '"Indeed, with hardship [will be] ease."',
                                    'size' => 'large'
                                ],
                                'inspiration_source' => [
                                    'type' => 'text',
                                    'label' => 'Inspiration Source',
                                    'help' => 'The source of the inspiration (e.g., Quran 94:6)',
                                    'default' => 'Quran 94:6',
                                    'size' => 'medium'
                                ]
                            ]
                        ],
                        'services_tab' => [
                            'type' => 'tab',
                            'title' => 'Services',
                            'fields' => [
                                'services_section' => [
                                    'type' => 'section',
                                    'title' => 'Services Configuration',
                                    'underline' => true
                                ],
                                'services_list' => [
                                    'type' => 'list',
                                    'label' => 'Service Cards',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon (Line Awesome)'
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Description'
                                        ],
                                        '.link' => [
                                            'type' => 'text',
                                            'label' => 'Link URL'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'events_tab' => [
                            'type' => 'tab',
                            'title' => 'Events',
                            'fields' => [
                                'events_section' => [
                                    'type' => 'section',
                                    'title' => 'Events Calendar',
                                    'underline' => true
                                ],
                                'events_list' => [
                                    'type' => 'list',
                                    'label' => 'Upcoming Events',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Event Title'
                                        ],
                                        '.date' => [
                                            'type' => 'datetime',
                                            'label' => 'Date & Time'
                                        ],
                                        '.location' => [
                                            'type' => 'text',
                                            'label' => 'Location'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Event Link/Registration'
                                        ],
                                        '.type' => [
                                            'type' => 'text',
                                            'label' => 'Event Type',
                                            'default' => 'Seminar'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'ngo_tools_tab' => [
                            'type' => 'tab',
                            'title' => 'NGO Tools',
                            'fields' => [
                                'ngo_section' => [
                                    'type' => 'section',
                                    'title' => 'Project Timeline',
                                    'underline' => true
                                ],
                                'project_timeline_list' => [
                                    'type' => 'list',
                                    'label' => 'Active Projects (Timeline)',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Project Title'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Short Description'
                                        ],
                                        '.goal' => [
                                            'type' => 'text',
                                            'label' => 'Funding Goal (e.g. $10k)'
                                        ],
                                        '.raised' => [
                                            'type' => 'text',
                                            'label' => 'Amount Raised (e.g. $7.5k)'
                                        ],
                                        '.percent' => [
                                            'type' => 'range',
                                            'label' => 'Completion %',
                                            'min' => 0,
                                            'max' => 100,
                                            'default' => 0,
                                            'append' => '%'
                                        ],
                                        '.status' => [
                                            'type' => 'select',
                                            'label' => 'Status',
                                            'options' => [
                                                'active' => 'Active',
                                                'completed' => 'Completed',
                                                'planning' => 'Planning'
                                            ]
                                        ]
                                    ]
                                ],
                                'khums_section' => [
                                    'type' => 'section',
                                    'title' => 'Khums Calculator Settings',
                                    'underline' => true
                                ],
                                'khums_rate' => [
                                    'type' => 'number',
                                    'label' => 'Khums Rate (%)',
                                    'default' => 20,
                                    'size' => 'x-small'
                                ],
                                'khums_currency' => [
                                    'type' => 'text',
                                    'label' => 'Currency Symbol',
                                    'default' => '$',
                                    'size' => 'x-small'
                                ],
                                'prayer_section' => [
                                    'type' => 'section',
                                    'title' => 'Religious Utility Settings',
                                    'underline' => true
                                ],
                                'prayer_times_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Prayer Times',
                                    'help' => 'Show prayer times in the utility bar',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'prayer_api_key' => [
                                    'type' => 'text',
                                    'label' => 'Aladhan API Key (Optional)',
                                    'help' => 'API key if using a premium prayer times service',
                                    'size' => 'medium'
                                ],
                                'hijri_adjustment' => [
                                    'type' => 'number',
                                    'label' => 'Hijri Date Adjustment',
                                    'help' => 'Number of days to adjust the Hijri calendar (e.g., -1, 0, 1)',
                                    'default' => 0,
                                    'size' => 'x-small'
                                ],
                                'trust_signals_section' => [
                                    'type' => 'section',
                                    'title' => 'Trust Signals & Badges',
                                    'underline' => true
                                ],
                                'trust_signals_images' => [
                                    'type' => 'list',
                                    'label' => 'Trust Badges (Payment/SSL)',
                                    'fields' => [
                                        '.name' => [
                                            'type' => 'text',
                                            'label' => 'Name'
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Badge Image',
                                            'destination' => 'theme://images/badges',
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Link (optional)'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'education_tab' => [
                            'type' => 'tab',
                            'title' => 'Education',
                            'fields' => [
                                'education_section' => [
                                    'type' => 'section',
                                    'title' => 'Education & LMS Settings',
                                    'underline' => true
                                ],
                                'student_login_title' => [
                                    'type' => 'text',
                                    'label' => 'Student Login Title',
                                    'default' => 'Student Login',
                                    'size' => 'medium'
                                ],
                                'student_login_description' => [
                                    'type' => 'text',
                                    'label' => 'Student Login Description',
                                    'default' => 'Access your Moodle courses and dashboard.',
                                    'size' => 'medium'
                                ],
                                'student_login_button_text' => [
                                    'type' => 'text',
                                    'label' => 'Student Login Button Text',
                                    'default' => 'Sign In to Portal',
                                    'size' => 'medium'
                                ],
                                'featured_courses_list' => [
                                    'type' => 'list',
                                    'label' => 'Featured Courses',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Course Title'
                                        ],
                                        '.instructor' => [
                                            'type' => 'text',
                                            'label' => 'Instructor Name'
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Course Thumbnail',
                                            'destination' => 'theme://images/courses',
                                            'multiple' => false,
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Course Link',
                                            'default' => '#'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'shop_tab' => [
                            'type' => 'tab',
                            'title' => 'Shop',
                            'fields' => [
                                'products_section' => [
                                    'type' => 'section',
                                    'title' => 'Products & Shop Configuration',
                                    'underline' => true
                                ],
                                'products_list' => [
                                    'type' => 'list',
                                    'label' => 'Product Highlights',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Product Title'
                                        ],
                                        '.price' => [
                                            'type' => 'text',
                                            'label' => 'Price'
                                        ],
                                        '.type' => [
                                            'type' => 'select',
                                            'label' => 'Type',
                                            'options' => [
                                                'physical' => 'Physical',
                                                'digital' => 'Digital'
                                            ]
                                        ],
                                        '.image' => [
                                            'type' => 'file',
                                            'label' => 'Product Image',
                                            'destination' => 'theme://images/products',
                                            'accept' => [
                                                0 => 'image/*'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Product Link',
                                            'default' => '#'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'footer_tab' => [
                            'type' => 'tab',
                            'title' => 'Footer & Content',
                            'fields' => [
                                'footer_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NGO.ADMIN.FOOTER_DEFAULTS',
                                    'underline' => true
                                ],
                                'sticky-footer' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NGO.ADMIN.STICKY_FOOTER',
                                    'help' => 'THEME_NGO.ADMIN.STICKY_FOOTER_HELP',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'contact_section' => [
                                    'type' => 'section',
                                    'title' => 'Contact Information',
                                    'underline' => true
                                ],
                                'footer_about_title' => [
                                    'type' => 'text',
                                    'label' => 'Footer About Title',
                                    'help' => 'Title for the About section in footer',
                                    'size' => 'medium',
                                    'default' => 'About Our Mission'
                                ],
                                'footer_mission' => [
                                    'type' => 'textarea',
                                    'label' => 'Footer Mission Statement',
                                    'help' => 'Brief mission statement displayed in footer',
                                    'size' => 'medium',
                                    'default' => 'Faith. Knowledge. Access.'
                                ],
                                'contact_address' => [
                                    'type' => 'textarea',
                                    'label' => 'Contact Address',
                                    'help' => 'Physical address for the organization',
                                    'size' => 'medium',
                                    'placeholder' => '123 Main St, City, Country'
                                ],
                                'contact_email' => [
                                    'type' => 'email',
                                    'label' => 'Contact Email',
                                    'help' => 'Primary contact email address',
                                    'size' => 'medium',
                                    'placeholder' => 'info@example.org'
                                ],
                                'contact_phone' => [
                                    'type' => 'text',
                                    'label' => 'Contact Phone',
                                    'help' => 'Primary contact phone number',
                                    'size' => 'medium',
                                    'placeholder' => '+1 234 567 8900'
                                ],
                                'contact_whatsapp' => [
                                    'type' => 'text',
                                    'label' => 'WhatsApp Number',
                                    'help' => 'WhatsApp contact number (include country code)',
                                    'size' => 'medium',
                                    'placeholder' => '+1234567890'
                                ],
                                'social_section' => [
                                    'type' => 'section',
                                    'title' => 'Social Media Links',
                                    'underline' => true
                                ],
                                'social_links' => [
                                    'type' => 'list',
                                    'label' => 'Social Media Links',
                                    'help' => 'Add social media profiles',
                                    'fields' => [
                                        '.network' => [
                                            'type' => 'select',
                                            'label' => 'Network',
                                            'options' => [
                                                'facebook' => 'Facebook',
                                                'twitter' => 'Twitter',
                                                'instagram' => 'Instagram',
                                                'linkedin' => 'LinkedIn',
                                                'youtube' => 'YouTube',
                                                'whatsapp' => 'WhatsApp'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'url',
                                            'label' => 'URL',
                                            'placeholder' => 'https://facebook.com/yourpage'
                                        ]
                                    ]
                                ],
                                'footer_links_section' => [
                                    'type' => 'section',
                                    'title' => 'Footer Quick Links',
                                    'underline' => true
                                ],
                                'footer_links' => [
                                    'type' => 'list',
                                    'label' => 'Footer Quick Links',
                                    'help' => 'Links displayed in footer Quick Links section',
                                    'fields' => [
                                        '.text' => [
                                            'type' => 'text',
                                            'label' => 'Link Text',
                                            'placeholder' => 'Services'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Link URL',
                                            'placeholder' => '/services'
                                        ],
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon (optional)',
                                            'placeholder' => 'book',
                                            'help' => 'FontAwesome icon name (without fa- prefix)'
                                        ]
                                    ]
                                ],
                                'newsletter_section' => [
                                    'type' => 'section',
                                    'title' => 'Newsletter Settings',
                                    'underline' => true
                                ],
                                'newsletter_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Newsletter Signup',
                                    'highlight' => 0,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'newsletter_action' => [
                                    'type' => 'url',
                                    'label' => 'Newsletter Form Action',
                                    'help' => 'URL where newsletter form should submit',
                                    'size' => 'medium',
                                    'placeholder' => 'https://example.com/subscribe'
                                ],
                                'other_tabs' => [
                                    'type' => 'tab',
                                    'title' => 'Other Content',
                                    'fields' => [
                                        'blog_section' => [
                                            'type' => 'section',
                                            'title' => 'THEME_NGO.ADMIN.BLOG_DEFAULTS',
                                            'underline' => true
                                        ],
                                        'blog-page' => [
                                            'type' => 'text',
                                            'label' => 'THEME_NGO.ADMIN.BLOG_PAGE',
                                            'help' => 'THEME_NGO.ADMIN.BLOG_PAGE_HELP',
                                            'size' => 'medium',
                                            'default' => '/blog'
                                        ],
                                        'testimonials_section' => [
                                            'type' => 'section',
                                            'title' => 'Testimonials',
                                            'underline' => true
                                        ],
                                        'testimonials_list' => [
                                            'type' => 'list',
                                            'label' => 'Testimonials',
                                            'fields' => [
                                                '.name' => [
                                                    'type' => 'text',
                                                    'label' => 'Name'
                                                ],
                                                '.role' => [
                                                    'type' => 'text',
                                                    'label' => 'Role (e.g. Student, Donor)'
                                                ],
                                                '.quote' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Quote'
                                                ],
                                                '.image' => [
                                                    'type' => 'file',
                                                    'label' => 'Photo',
                                                    'destination' => 'theme://images/testimonials',
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                '.video_url' => [
                                                    'type' => 'text',
                                                    'label' => 'Video URL (optional)',
                                                    'help' => 'Link to video testimonial'
                                                ]
                                            ]
                                        ],
                                        'faq_section' => [
                                            'type' => 'section',
                                            'title' => 'FAQ & Istafta Settings',
                                            'underline' => true
                                        ],
                                        'faq_list' => [
                                            'type' => 'list',
                                            'label' => 'Common Q&A',
                                            'fields' => [
                                                '.q' => [
                                                    'type' => 'text',
                                                    'label' => 'Question'
                                                ],
                                                '.a' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Answer'
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
