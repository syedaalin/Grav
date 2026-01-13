<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints.yaml',
    'modified' => 1768275297,
    'size' => 45795,
    'data' => [
        'name' => 'Nur-ul-Huda',
        'slug' => 'nur-ul-huda',
        'type' => 'theme',
        'version' => '2.1.2',
        'description' => 'Modern Islamic theme with prayer times, Hijri calendar, Moodle LMS integration, Snipcart e-commerce, and JazzCash payment gateway support. Built with Modern Vanilla CSS (2026).',
        'icon' => 'mosque',
        'author' => [
            'name' => 'Syed Aalin',
            'email' => 'syedaalin@example.com',
            'url' => 'https://github.com/syedaalin'
        ],
        'homepage' => 'https://github.com/syedaalin/grav-theme-nur-ul-huda',
        'demo' => 'http://localhost:8888',
        'keywords' => 'islamic, prayer-times, hijri-calendar, moodle, religious, education, ecommerce, snipcart, jazzcash, responsive, modern, accessibility',
        'bugs' => 'https://github.com/syedaalin/grav-theme-nur-ul-huda/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
            ],
            1 => [
                'name' => 'php',
                'version' => '>=8.2'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs_primary' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'general_tab' => [
                            'type' => 'tab',
                            'title' => 'General Settings',
                            'fields' => [
                                'global_section' => [
                                    'type' => 'section',
                                    'title' => 'Global Settings',
                                    'underline' => true
                                ],
                                'direction' => [
                                    'type' => 'toggle',
                                    'label' => 'Text Direction',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'highlight' => 1,
                                    'default' => 'ltr',
                                    'options' => [
                                        'ltr' => 'LTR',
                                        'rtl' => 'RTL'
                                    ],
                                    'help' => 'Controls text direction for the entire site'
                                ],
                                'language' => [
                                    'type' => 'select',
                                    'label' => 'Primary Language',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'en',
                                    'options' => [
                                        'en' => 'English',
                                        'ar' => 'Arabic (العربية)',
                                        'ur' => 'Urdu (اردو)',
                                        'fa' => 'Persian (فارسی)'
                                    ],
                                    'help' => 'Sets the lang attribute for accessibility and SEO'
                                ],
                                'number_format' => [
                                    'type' => 'select',
                                    'label' => 'Number Format',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'western',
                                    'options' => [
                                        'western' => 'Western (0-9)',
                                        'arabic_indic' => 'Arabic-Indic (٠-٩)',
                                        'persian' => 'Persian (۰-۹)'
                                    ],
                                    'help' => 'Choose numeral system for displaying numbers'
                                ],
                                'date_calendar' => [
                                    'type' => 'select',
                                    'label' => 'Date Calendar',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'gregorian',
                                    'options' => [
                                        'gregorian' => 'Gregorian Only',
                                        'both' => 'Gregorian + Hijri',
                                        'hijri_primary' => 'Hijri + Gregorian'
                                    ],
                                    'help' => 'Choose which calendar system to display'
                                ],
                                'production-mode' => [
                                    'type' => 'toggle',
                                    'label' => 'Production Mode',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'styling_section' => [
                                    'type' => 'section',
                                    'title' => 'Design Tokens',
                                    'underline' => true
                                ],
                                'primary_spirit_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Primary Spirit Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.55 0.18 165)',
                                    'help' => 'The main spiritual color of the theme (Emerald Green)'
                                ],
                                'accent_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Accent Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.85 0.15 85)',
                                    'help' => 'The accent color (Gold)'
                                ],
                                'font_section' => [
                                    'type' => 'section',
                                    'title' => 'Typography Settings',
                                    'underline' => true,
                                    'text' => 'Configure dynamic fonts. Select from local 2025 favorites or custom import.'
                                ],
                                'custom_fonts' => [
                                    'type' => 'file',
                                    'label' => 'Custom Fonts Library',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Drag and drop your font files here. They will be auto-named by filename.',
                                    'destination' => 'theme://fonts/custom',
                                    'multiple' => true,
                                    'accept' => [
                                        0 => '.ttf',
                                        1 => '.woff',
                                        2 => '.woff2'
                                    ]
                                ],
                                'font_heading' => [
                                    'type' => 'select',
                                    'label' => 'Heading Font Family',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => '\'PlusJakartaSans-VariableFont_wght\', sans-serif',
                                    'data-options@' => '\\Grav\\Theme\\NurUlHuda::getFontOptions',
                                    'help' => 'Select the primary font for headings'
                                ],
                                'font_body' => [
                                    'type' => 'select',
                                    'label' => 'Body Font Family',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => '\'Outfit-VariableFont_wght\', sans-serif',
                                    'data-options@' => '\\Grav\\Theme\\NurUlHuda::getFontOptions',
                                    'help' => 'Select the primary font for body text'
                                ]
                            ]
                        ],
                        'header_tab' => [
                            'type' => 'tab',
                            'title' => 'Header',
                            'fields' => [
                                'header_intro' => [
                                    'type' => 'display',
                                    'content' => 'Configure your site header and navigation',
                                    'markdown' => true
                                ],
                                'logos_section' => [
                                    'type' => 'section',
                                    'title' => 'Link & Assets',
                                    'underline' => true
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'Logo',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'size' => 'large',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'markdown' => true,
                                    'description' => 'Your site logo',
                                    'help' => 'Upload your site logo',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'validate' => [
                                        'method' => 'Grav\\Theme\\NurUlHuda::validateLogo'
                                    ]
                                ],
                                'site_name' => [
                                    'type' => 'text',
                                    'label' => 'Site Name',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Global Site Name (displayed in Header & Footer)',
                                    'placeholder' => 'Nur-ul-Huda'
                                ],
                                'site_tagline' => [
                                    'type' => 'text',
                                    'label' => 'Site Tagline',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Short description of your site (displayed in Footer & Title)',
                                    'placeholder' => 'Guiding Light of Faith'
                                ],
                                'behavior_section' => [
                                    'type' => 'section',
                                    'title' => 'Header Options',
                                    'underline' => true
                                ],
                                'header-fixed' => [
                                    'type' => 'toggle',
                                    'label' => 'Fixed Header',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Keep header visible when scrolling',
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
                                    'label' => 'Animated Header',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Animate header on scroll',
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
                                    'label' => 'Dark Header',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Use dark header style',
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
                                    'label' => 'Transparent Header',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Make header transparent',
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
                                'header_styling_section' => [
                                    'type' => 'section',
                                    'title' => 'Header Styling',
                                    'underline' => true
                                ],
                                'header_padding' => [
                                    'type' => 'text',
                                    'label' => 'Vertical Padding',
                                    'default' => '1rem',
                                    'width' => '100%',
                                    'help' => 'e.g. 1rem, 16px'
                                ]
                            ]
                        ],
                        'top_banner_tab' => [
                            'type' => 'tab',
                            'title' => 'Top Banner',
                            'fields' => [
                                'top_banner_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Top Banner',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'top_banner_announcement_section' => [
                                    'type' => 'section',
                                    'title' => 'Announcement Ticker',
                                    'underline' => true
                                ],
                                'top_banner_announcement_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Announcement',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'top_banner_announcement_text' => [
                                    'type' => 'text',
                                    'label' => 'Announcement Text',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'placeholder' => 'Important update: Eid prayer will be at 8:00 AM.',
                                    'help' => 'Text to scroll in the Top Banner.'
                                ],
                                'top_banner_announcement_expires' => [
                                    'type' => 'datetime',
                                    'label' => 'Expiration Date & Time',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'The announcement will automatically hide after this time.'
                                ],
                                'top_banner_announcement_bg_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Announcement Background',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.55 0.25 25)',
                                    'help' => 'Background color when announcement is active (default Red).'
                                ],
                                'top_banner_announcement_text_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Announcement Text Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.98 0 0)',
                                    'help' => 'Text color for the announcement.'
                                ],
                                'top_banner_appearance_section' => [
                                    'type' => 'section',
                                    'title' => 'Appearance & Content',
                                    'underline' => true
                                ],
                                'top_banner_bg_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Background Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.2 0.02 260)',
                                    'help' => 'Customize the background color. Default is Deep Navy.'
                                ],
                                'top_banner_text_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Text Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'oklch(0.85 0.15 85)',
                                    'help' => 'Customize text color. Default is Yellow (Active Accent).'
                                ],
                                'top_banner_widgets_section' => [
                                    'type' => 'section',
                                    'title' => 'Widget Arrangement',
                                    'underline' => true
                                ],
                                'top_banner_widgets_order' => [
                                    'type' => 'selectize',
                                    'label' => 'Widget Order',
                                    'default' => [
                                        0 => 'date',
                                        1 => 'prayer',
                                        2 => 'hijri'
                                    ],
                                    'options' => [
                                        'date' => 'Gregorian Date',
                                        'prayer' => 'Prayer Times',
                                        'hijri' => 'Hijri Date'
                                    ],
                                    'help' => 'Reorder the three core components: Gregorian Date, Prayer Times, and Hijri Date.'
                                ]
                            ]
                        ],
                        'theme_colors_tab' => [
                            'import@' => 'tabs/theme-colors'
                        ],
                        'bottom_banner_tab' => [
                            'type' => 'tab',
                            'title' => 'Bottom Banner',
                            'fields' => [
                                'bottom_banner_header_section' => [
                                    'type' => 'section',
                                    'title' => 'Header',
                                    'underline' => true
                                ],
                                'bottom_banner_show_logo' => [
                                    'type' => 'toggle',
                                    'label' => 'Site Logo',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'bottom_banner_show_site_name' => [
                                    'type' => 'toggle',
                                    'label' => 'Site Name',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'bottom_banner_show_tagline' => [
                                    'type' => 'toggle',
                                    'label' => 'Site Tagline',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'bottom_banner_copyright' => [
                                    'type' => 'textarea',
                                    'label' => 'Copyright Text',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Custom copyright text',
                                    'rows' => 3,
                                    'placeholder' => '© 2026 Your Organization. All rights reserved.'
                                ],
                                'bottom_banner_newsletter_section' => [
                                    'type' => 'section',
                                    'title' => 'Newsletter Strip',
                                    'underline' => true
                                ],
                                'bottom_banner_newsletter_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Newsletter',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 1,
                                    'highlight' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'bottom_banner_newsletter_title' => [
                                    'type' => 'text',
                                    'label' => 'Newsletter Title',
                                    'width' => '33%',
                                    'default' => 'Stay Connected'
                                ],
                                'bottom_banner_newsletter_text' => [
                                    'type' => 'text',
                                    'label' => 'Newsletter Description',
                                    'width' => '33%',
                                    'default' => 'Join our spiritual journey for weekly insights.'
                                ],
                                'bottom_banner_widgets_section' => [
                                    'type' => 'section',
                                    'title' => 'Banner Arrangement',
                                    'underline' => true
                                ],
                                'bottom_banner_widgets_order' => [
                                    'type' => 'selectize',
                                    'label' => 'Section Order',
                                    'default' => [
                                        0 => 'brand',
                                        1 => 'social',
                                        2 => 'nav',
                                        3 => 'newsletter',
                                        4 => 'copyright'
                                    ],
                                    'options' => [
                                        'brand' => 'Brand & Tagline',
                                        'social' => 'Social Connectivity',
                                        'nav' => 'Footer Navigation',
                                        'newsletter' => 'Newsletter Signup',
                                        'copyright' => 'Copyright Strip'
                                    ],
                                    'help' => 'Reorder major sections of the bottom banner.'
                                ],
                                'bottom_banner_social_section' => [
                                    'type' => 'section',
                                    'title' => 'Body',
                                    'underline' => true
                                ],
                                'social_facebook_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_facebook' => [
                                                    'type' => 'text',
                                                    'label' => 'Facebook',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://facebook.com/yourpage',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_facebook_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_twitter_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_twitter' => [
                                                    'type' => 'text',
                                                    'label' => 'Twitter',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://twitter.com/yourhandle',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_twitter_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_instagram_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_instagram' => [
                                                    'type' => 'text',
                                                    'label' => 'Instagram',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://instagram.com/yourhandle',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_instagram_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_youtube_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_youtube' => [
                                                    'type' => 'text',
                                                    'label' => 'YouTube',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://youtube.com/@yourchannel',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_youtube_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_telegram_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_telegram' => [
                                                    'type' => 'text',
                                                    'label' => 'Telegram',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://t.me/yourgroup',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_telegram_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_linkedin_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_linkedin' => [
                                                    'type' => 'text',
                                                    'label' => 'LinkedIn',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://linkedin.com/company/yourorg',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_linkedin_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_tiktok_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_tiktok' => [
                                                    'type' => 'text',
                                                    'label' => 'TikTok',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://tiktok.com/@yourhandle',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_tiktok_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_pinterest_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_pinterest' => [
                                                    'type' => 'text',
                                                    'label' => 'Pinterest',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://pinterest.com/yourhandle',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_pinterest_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_snapchat_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_snapchat' => [
                                                    'type' => 'text',
                                                    'label' => 'Snapchat',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://snapchat.com/add/yourhandle',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_snapchat_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_spotify_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_spotify' => [
                                                    'type' => 'text',
                                                    'label' => 'Spotify',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://open.spotify.com/show/yourshow',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_spotify_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_discord_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_discord' => [
                                                    'type' => 'text',
                                                    'label' => 'Discord Invite',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://discord.gg/yourinvite',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_discord_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_google_maps_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_google_maps' => [
                                                    'type' => 'text',
                                                    'label' => 'Google Maps',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://goo.gl/maps/yourlocation',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_google_maps_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_whatsapp_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_whatsapp' => [
                                                    'type' => 'text',
                                                    'label' => 'WhatsApp',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'https://wa.me/1234567890',
                                                    'help' => 'Your WhatsApp number with country code',
                                                    'validate' => [
                                                        'type' => 'URL'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_whatsapp_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_phone_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_phone' => [
                                                    'type' => 'text',
                                                    'label' => 'Phone',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => '+1234567890',
                                                    'help' => 'Enter phone number for Click-to-Call icon',
                                                    'validate' => [
                                                        'type' => 'text'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_phone_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'social_email_group' => [
                                    'type' => 'columns',
                                    'width' => '33%',
                                    'fields' => [
                                        'col_input' => [
                                            'type' => 'column',
                                            'width' => '75%',
                                            'fields' => [
                                                'social_email' => [
                                                    'type' => 'text',
                                                    'label' => 'Email',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
                                                    'placeholder' => 'info@yoursite.com',
                                                    'validate' => [
                                                        'type' => 'email'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'col_toggle' => [
                                            'type' => 'column',
                                            'width' => '25%',
                                            'fields' => [
                                                'social_email_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => '&nbsp;',
                                                    'style' => 'vertical',
                                                    'width' => '100%',
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
                                'bottom_banner_show_social_labels_mobile' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Names on Mobile',
                                    'help' => 'Show platform name on small screens',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'highlight' => 1,
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'bottom_banner_show_social_labels_desktop' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Names on Desktop',
                                    'help' => 'Show platform name on large screens',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'highlight' => 1,
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
                        ]
                    ]
                ],
                'tabs_secondary' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'glass_tab' => [
                            'type' => 'tab',
                            'title' => 'Glassmorphism',
                            'fields' => [
                                'glass_section' => [
                                    'type' => 'section',
                                    'title' => 'Adjustable Glassmorphism Scales',
                                    'underline' => true,
                                    'text' => 'Configure the 2026 Glassmorphism properties.'
                                ],
                                'glass_bg_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Base Color',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => '#ffffff',
                                    'help' => 'Base color of the glass surface'
                                ],
                                'glass_opacity' => [
                                    'type' => 'range',
                                    'label' => 'Opacity %',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'validate' => [
                                        'min' => 10,
                                        'max' => 90
                                    ],
                                    'default' => 65,
                                    'help' => 'Translucency percentage'
                                ],
                                'glass_blur' => [
                                    'type' => 'range',
                                    'label' => 'Blur Radius (px)',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 50
                                    ],
                                    'default' => 16,
                                    'help' => 'Background blur intensity'
                                ],
                                'glass_border_opacity' => [
                                    'type' => 'range',
                                    'label' => 'Border Opacity %',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 100
                                    ],
                                    'default' => 15,
                                    'help' => 'Sensitivity of the glass edge'
                                ],
                                'glass_highlight' => [
                                    'type' => 'range',
                                    'label' => 'Specular Highlight %',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 100
                                    ],
                                    'default' => 40,
                                    'help' => 'Intensity of the inner reflective edge'
                                ],
                                'glass_noise' => [
                                    'type' => 'toggle',
                                    'label' => 'Noise Texture',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'highlight' => 1,
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ],
                                    'help' => 'Enable subtle noise for premium frosted texture'
                                ]
                            ]
                        ],
                        'islamic_features_tab' => [
                            'type' => 'tab',
                            'title' => 'Religious Utilities',
                            'fields' => [
                                'prayer_section' => [
                                    'type' => 'section',
                                    'title' => 'Prayers & Calendar',
                                    'underline' => true
                                ],
                                'prayer_method' => [
                                    'type' => 'select',
                                    'label' => 'Prayer Calculation Standard',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'tehran',
                                    'options' => [
                                        'tehran' => 'University of Tehran',
                                        'karachi' => 'University of Islamic Sciences, Karachi',
                                        'isna' => 'ISNA',
                                        'leva' => 'Leva Institute, Qom'
                                    ]
                                ],
                                'hijri_offset' => [
                                    'type' => 'number',
                                    'label' => 'Hijri Calibration',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 0,
                                    'help' => 'Adjust Hijri date manually (+/- days)'
                                ],
                                'adhan_media' => [
                                    'type' => 'file',
                                    'label' => 'Adhan Media',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'destination' => 'theme://media',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => '.mp3'
                                    ]
                                ],
                                'default_location' => [
                                    'type' => 'text',
                                    'label' => 'Geo-Location Default',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'Karachi',
                                    'help' => 'Fallback city for prayer times'
                                ]
                            ]
                        ],
                        'integrations_advanced_tab' => [
                            'type' => 'tab',
                            'title' => 'Integrations & Advanced',
                            'fields' => [
                                'moodle_section' => [
                                    'type' => 'section',
                                    'title' => 'Moodle LMS',
                                    'underline' => true
                                ],
                                'moodle_url' => [
                                    'type' => 'text',
                                    'label' => 'Moodle URL',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'placeholder' => 'https://moodle.yoursite.com'
                                ],
                                'moodle_token' => [
                                    'type' => 'password',
                                    'label' => 'Web Service API Token',
                                    'style' => 'vertical',
                                    'width' => '33%'
                                ],
                                'commerce_section' => [
                                    'type' => 'section',
                                    'title' => 'Headless Commerce',
                                    'underline' => true
                                ],
                                'snipcart_key' => [
                                    'type' => 'text',
                                    'label' => 'Snipcart Public API Key',
                                    'style' => 'vertical',
                                    'width' => '33%'
                                ],
                                'payment_section' => [
                                    'type' => 'section',
                                    'title' => 'Payment Gateways',
                                    'underline' => true
                                ],
                                'jazzcash_merchant' => [
                                    'type' => 'text',
                                    'label' => 'JazzCash Merchant ID',
                                    'style' => 'vertical',
                                    'width' => '33%'
                                ],
                                'jazzcash_salt' => [
                                    'type' => 'password',
                                    'label' => 'JazzCash Integrity Salt',
                                    'style' => 'vertical',
                                    'width' => '33%'
                                ]
                            ]
                        ],
                        'components_tab' => [
                            'type' => 'tab',
                            'title' => 'Components',
                            'fields' => [
                                'components_intro' => [
                                    'type' => 'section',
                                    'title' => 'Components',
                                    'text' => 'Enable or disable theme components',
                                    'underline' => true
                                ],
                                'hero_section' => [
                                    'type' => 'section',
                                    'title' => 'Hero Section',
                                    'underline' => true
                                ],
                                'hero_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Hero',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'hero_default_style' => [
                                    'type' => 'select',
                                    'label' => 'Default Hero Style',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'hero-large',
                                    'options' => [
                                        'hero-fullscreen' => 'Full Screen',
                                        'hero-large' => 'Large',
                                        'hero-medium' => 'Medium',
                                        'hero-small' => 'Small',
                                        'hero-tiny' => 'Tiny'
                                    ]
                                ],
                                'services_section' => [
                                    'type' => 'section',
                                    'title' => 'Services Section',
                                    'underline' => true
                                ],
                                'services_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Services',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'services_default_columns' => [
                                    'type' => 'select',
                                    'label' => 'Default Columns',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 3,
                                    'options' => [
                                        2 => '2 Columns',
                                        3 => '3 Columns',
                                        4 => '4 Columns'
                                    ]
                                ],
                                'features_section' => [
                                    'type' => 'section',
                                    'title' => 'Features Section',
                                    'underline' => true
                                ],
                                'features_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Features',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'features_default_layout' => [
                                    'type' => 'select',
                                    'label' => 'Default Layout',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'default' => 'standard',
                                    'options' => [
                                        'small' => 'Small',
                                        'standard' => 'Standard'
                                    ]
                                ],
                                'gallery_section' => [
                                    'type' => 'section',
                                    'title' => 'Gallery Section',
                                    'underline' => true
                                ],
                                'gallery_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Gallery',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'istafta_section' => [
                                    'type' => 'section',
                                    'title' => 'Istafta Section',
                                    'underline' => true
                                ],
                                'istafta_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Istafta',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'khums_section' => [
                                    'type' => 'section',
                                    'title' => 'Khums Calculator',
                                    'underline' => true
                                ],
                                'khums_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Khums',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'timeline_section' => [
                                    'type' => 'section',
                                    'title' => 'Timeline Section',
                                    'underline' => true
                                ],
                                'timeline_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Timeline',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'trust_signals_section' => [
                                    'type' => 'section',
                                    'title' => 'Trust Signals',
                                    'underline' => true
                                ],
                                'trust_signals_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Trust Signals',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                'courses_section' => [
                                    'type' => 'section',
                                    'title' => 'Courses Section',
                                    'underline' => true
                                ],
                                'courses_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Courses',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                        ],
                        'advanced_tab' => [
                            'type' => 'tab',
                            'title' => 'Advanced Settings',
                            'fields' => [
                                'custom_logo_section' => [
                                    'type' => 'section',
                                    'title' => 'Logo Settings',
                                    'underline' => true
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'Desktop Logo',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'custom_logo_mobile' => [
                                    'type' => 'file',
                                    'label' => 'Mobile Logo',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'favicon' => [
                                    'type' => 'file',
                                    'label' => 'Favicon',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'destination' => 'theme://images',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'dropdown.enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Dropdown Menus',
                                    'style' => 'vertical',
                                    'width' => '33%',
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
                                    'label' => 'Grid Size',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Choose grid overlay size for debugging',
                                    'default' => '',
                                    'options' => [
                                        '' => 'None',
                                        'grid-xl' => 'Extra Large',
                                        'grid-lg' => 'Large',
                                        'grid-md' => 'Medium'
                                    ]
                                ],
                                'blog_section' => [
                                    'type' => 'section',
                                    'title' => 'Blog Settings',
                                    'underline' => true
                                ],
                                'blog-page' => [
                                    'type' => 'text',
                                    'label' => 'Blog Page Path',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Path to your blog page',
                                    'size' => 'medium',
                                    'default' => '/blog'
                                ]
                            ]
                        ],
                        'nur-ul-huda_legacy' => [
                            'type' => 'tab',
                            'title' => 'Options',
                            'fields' => [
                                'grid-size' => [
                                    'type' => 'select',
                                    'label' => 'Grid Size',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Choose grid overlay size for debugging',
                                    'size' => 'small',
                                    'options' => [
                                        '' => 'None',
                                        'grid-xl' => 'Extra Large',
                                        'grid-lg' => 'Large',
                                        'grid-md' => 'Medium'
                                    ]
                                ],
                                'blog_section' => [
                                    'type' => 'section',
                                    'title' => 'Blog Settings',
                                    'underline' => true
                                ],
                                'blog-page' => [
                                    'type' => 'text',
                                    'label' => 'Blog Page Path',
                                    'style' => 'vertical',
                                    'width' => '33%',
                                    'help' => 'Path to your blog page',
                                    'size' => 'medium',
                                    'default' => '/blog'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
