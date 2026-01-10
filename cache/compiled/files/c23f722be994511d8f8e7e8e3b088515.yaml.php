<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints.yaml',
    'modified' => 1768084379,
    'size' => 27005,
    'data' => [
        'name' => 'Nur-ul-Huda',
        'slug' => 'nur-ul-huda',
        'type' => 'theme',
        'version' => '2.1.2',
        'description' => 'Modern Islamic theme with prayer times, Hijri calendar, Moodle LMS integration, Snipcart e-commerce, and JazzCash payment gateway support. Built with Tailwind CSS v4.',
        'icon' => 'mosque',
        'author' => [
            'name' => 'Syed Aalin',
            'email' => 'syedaalin@example.com',
            'url' => 'https://github.com/syedaalin'
        ],
        'homepage' => 'https://github.com/syedaalin/grav-theme-nur-ul-huda',
        'demo' => 'http://localhost:8888',
        'keywords' => 'islamic, prayer-times, hijri-calendar, moodle, tailwind-v4, religious, education, ecommerce, snipcart, jazzcash, responsive, modern, accessibility',
        'bugs' => 'https://github.com/syedaalin/grav-theme-nur-ul-huda/issues',
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
                        'visual_tab' => [
                            'type' => 'tab',
                            'title' => 'Visual Identity',
                            'fields' => [
                                'global_section' => [
                                    'type' => 'section',
                                    'title' => 'Global Settings',
                                    'underline' => true
                                ],
                                'direction' => [
                                    'type' => 'toggle',
                                    'label' => 'Text Direction',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.PRODUCTION_MODE',
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
                                    'default' => '#2ecc71',
                                    'help' => 'The main spiritual color of the theme (Emerald Green)'
                                ],
                                'accent_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Accent Color',
                                    'default' => '#f1c40f',
                                    'help' => 'The accent color (Gold)'
                                ],
                                'blur_strength' => [
                                    'type' => 'range',
                                    'label' => 'Glass Blur Strength',
                                    'default' => 12,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 30
                                    ],
                                    'help' => 'Controls the blur strength of Glassmorphism elements (0-30px)'
                                ],
                                'typography' => [
                                    'type' => 'select',
                                    'label' => 'Typography Pairings',
                                    'default' => 'inter_noto',
                                    'options' => [
                                        'inter_noto' => 'Inter + Noto Nastaliq (Urdu Optimized)',
                                        'roboto_mono' => 'Roboto + Roboto Mono',
                                        'outfit' => 'Outfit + Inter'
                                    ]
                                ]
                            ]
                        ],
                        'glass_tab' => [
                            'type' => 'tab',
                            'title' => 'Glassmorphism',
                            'fields' => [
                                'glass_section' => [
                                    'type' => 'section',
                                    'title' => 'Glass Effect Settings',
                                    'underline' => true,
                                    'text' => 'Configure the global glassmorphism style for headers and panels. <button id=\'btn-reset-glass\' class=\'button button-small\' style=\'float: right; margin-top: -5px;\'><i class=\'fa fa-undo\'></i> Reset Defaults</button>'
                                ],
                                'glass_opacity' => [
                                    'type' => 'range',
                                    'label' => 'Glass Density (Translucency)',
                                    'default' => 0.12,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 1,
                                        'step' => 0.01
                                    ],
                                    'help' => 'Pillar 1: Translucency - The tint strength of the surface (Standard: 0.12)'
                                ],
                                'glass_blur' => [
                                    'type' => 'range',
                                    'label' => 'Diffusion (Blur)',
                                    'default' => 25,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 50
                                    ],
                                    'help' => 'Pillar 2: Diffusion - How blurry the background should be (Standard: 25px)'
                                ],
                                'glass_border_opacity' => [
                                    'type' => 'range',
                                    'label' => 'Edge Visibility (Reflective Edge)',
                                    'default' => 0.15,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 1,
                                        'step' => 0.01
                                    ],
                                    'help' => 'Pillar 3: Reflective Edge - Opacity of the white border (Standard: 0.15)'
                                ],
                                'glass_thickness' => [
                                    'type' => 'range',
                                    'label' => 'Edge Thickness',
                                    'default' => 1,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 5,
                                        'step' => 1
                                    ],
                                    'help' => 'Pillar 3: Reflective Edge - Physical width of the glass edge (Standard: 1px)'
                                ],
                                'glass_shadow_intensity' => [
                                    'type' => 'range',
                                    'label' => 'Depth (Shadow Intensity)',
                                    'default' => 0.1,
                                    'validate' => [
                                        'min' => 0,
                                        'max' => 1,
                                        'step' => 0.01
                                    ],
                                    'help' => 'Pillar 4: Depth - Intensity of the soft, diffused shadow (Standard: 0.1)'
                                ]
                            ]
                        ],
                        'header_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_TAB',
                            'fields' => [
                                'header_intro' => [
                                    'type' => 'display',
                                    'content' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_TAB_INTRO',
                                    'markdown' => true
                                ],
                                'logos_section' => [
                                    'type' => 'section',
                                    'title' => 'Link & Assets',
                                    'underline' => true
                                ],
                                'custom_logo' => [
                                    'type' => 'file',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.LOGO',
                                    'size' => 'large',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'markdown' => true,
                                    'description' => 'THEME_NUR_UL_HUDA.ADMIN.LOGO_DESCRIPTION',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.LOGO_HELP',
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'validate' => [
                                        'method' => 'Grav\\Theme\\NurUlHuda::validateLogo'
                                    ]
                                ],
                                'behavior_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_DEFAULTS',
                                    'underline' => true
                                ],
                                'header-fixed' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_FIXED',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_FIXED_HELP',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_ANIMATED',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_ANIMATED_HELP',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_DARK',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_DARK_HELP',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_TRANSPARENT',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.HEADER_TRANSPARENT_HELP',
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
                        'top_banner_tab' => [
                            'type' => 'tab',
                            'title' => 'Top Banner',
                            'fields' => [
                                'top_banner_section' => [
                                    'type' => 'section',
                                    'title' => 'Utility Bar Settings',
                                    'underline' => true,
                                    'text' => 'Configure the top bar (Top Banner) that appears above the main header.'
                                ],
                                'top_banner_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Top Banner',
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
                                    'placeholder' => 'Important update: Eid prayer will be at 8:00 AM.',
                                    'help' => 'Text to scroll in the Top Banner.'
                                ],
                                'top_banner_announcement_expires' => [
                                    'type' => 'datetime',
                                    'label' => 'Expiration Date & Time',
                                    'help' => 'The announcement will automatically hide after this time.'
                                ],
                                'top_banner_announcement_bg_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Announcement Background',
                                    'default' => '#b91c1c',
                                    'help' => 'Background color when announcement is active (default Red).'
                                ],
                                'top_banner_announcement_text_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Announcement Text Color',
                                    'default' => '#ffffff',
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
                                    'default' => '#111827',
                                    'help' => 'Customize the background color. Default is Deep Navy.'
                                ],
                                'top_banner_text_color' => [
                                    'type' => 'colorpicker',
                                    'label' => 'Text Color',
                                    'default' => '#f1c40f',
                                    'help' => 'Customize text color. Default is Yellow (Active Accent).'
                                ],
                                'top_banner_show_dates' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Date Ticker',
                                    'help' => 'Display Gregorian and Hijri dates',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'top_banner_show_prayer_ticker' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Prayer Countdown',
                                    'help' => 'Display next prayer name and countdown timer',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'top_banner_show_contact' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Contact Info',
                                    'help' => 'Display Phone and Email (configured in Footer tab)',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'validate' => [
                                        'type' => 'bool'
                                    ]
                                ],
                                'top_banner_show_social' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Social Icons',
                                    'help' => 'Display Social Media icons (configured in Footer tab)',
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
                        'sanctum_tab' => [
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
                                    'default' => 0,
                                    'help' => 'Adjust Hijri date manually (+/- days)'
                                ],
                                'adhan_media' => [
                                    'type' => 'file',
                                    'label' => 'Adhan Media',
                                    'destination' => 'theme://media',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => '.mp3'
                                    ]
                                ],
                                'default_location' => [
                                    'type' => 'text',
                                    'label' => 'Geo-Location Default',
                                    'default' => 'Karachi',
                                    'help' => 'Fallback city for prayer times'
                                ]
                            ]
                        ],
                        'integrations_tab' => [
                            'type' => 'tab',
                            'title' => 'Integrations',
                            'fields' => [
                                'moodle_section' => [
                                    'type' => 'section',
                                    'title' => 'Moodle LMS',
                                    'underline' => true
                                ],
                                'moodle_url' => [
                                    'type' => 'text',
                                    'label' => 'Moodle URL',
                                    'placeholder' => 'https://moodle.yoursite.com'
                                ],
                                'moodle_token' => [
                                    'type' => 'password',
                                    'label' => 'Web Service API Token'
                                ],
                                'commerce_section' => [
                                    'type' => 'section',
                                    'title' => 'Headless Commerce',
                                    'underline' => true
                                ],
                                'snipcart_key' => [
                                    'type' => 'text',
                                    'label' => 'Snipcart Public API Key'
                                ],
                                'payment_section' => [
                                    'type' => 'section',
                                    'title' => 'Payment Gateways',
                                    'underline' => true
                                ],
                                'jazzcash_merchant' => [
                                    'type' => 'text',
                                    'label' => 'JazzCash Merchant ID'
                                ],
                                'jazzcash_salt' => [
                                    'type' => 'password',
                                    'label' => 'JazzCash Integrity Salt'
                                ]
                            ]
                        ],
                        'components_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_NUR_UL_HUDA.ADMIN.COMPONENTS',
                            'fields' => [
                                'components_intro' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.COMPONENTS_INTRO',
                                    'text' => 'THEME_NUR_UL_HUDA.ADMIN.COMPONENTS_INTRO_TEXT',
                                    'underline' => true
                                ],
                                'hero_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_COMPONENT',
                                    'underline' => true
                                ],
                                'hero_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_ENABLED',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_DEFAULT_STYLE',
                                    'default' => 'hero-large',
                                    'options' => [
                                        'hero-fullscreen' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_FULLSCREEN',
                                        'hero-large' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_LARGE',
                                        'hero-medium' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_MEDIUM',
                                        'hero-small' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_SMALL',
                                        'hero-tiny' => 'THEME_NUR_UL_HUDA.ADMIN.HERO_TINY'
                                    ]
                                ],
                                'services_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.SERVICES_COMPONENT',
                                    'underline' => true
                                ],
                                'services_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SERVICES_ENABLED',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SERVICES_DEFAULT_COLUMNS',
                                    'default' => 3,
                                    'options' => [
                                        2 => 'THEME_NUR_UL_HUDA.ADMIN.COLUMNS_2',
                                        3 => 'THEME_NUR_UL_HUDA.ADMIN.COLUMNS_3',
                                        4 => 'THEME_NUR_UL_HUDA.ADMIN.COLUMNS_4'
                                    ]
                                ],
                                'features_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.FEATURES_COMPONENT',
                                    'underline' => true
                                ],
                                'features_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.FEATURES_ENABLED',
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
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.FEATURES_DEFAULT_LAYOUT',
                                    'default' => 'standard',
                                    'options' => [
                                        'small' => 'THEME_NUR_UL_HUDA.ADMIN.FEATURES_SMALL',
                                        'standard' => 'THEME_NUR_UL_HUDA.ADMIN.FEATURES_STANDARD'
                                    ]
                                ],
                                'gallery_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.GALLERY_COMPONENT',
                                    'underline' => true
                                ],
                                'gallery_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.GALLERY_ENABLED',
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
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.ISTAFTA_COMPONENT',
                                    'underline' => true
                                ],
                                'istafta_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.ISTAFTA_ENABLED',
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
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.KHUMS_COMPONENT',
                                    'underline' => true
                                ],
                                'khums_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.KHUMS_ENABLED',
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
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.TIMELINE_COMPONENT',
                                    'underline' => true
                                ],
                                'timeline_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.TIMELINE_ENABLED',
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
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.TRUST_SIGNALS_COMPONENT',
                                    'underline' => true
                                ],
                                'trust_signals_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.TRUST_SIGNALS_ENABLED',
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
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.COURSES_COMPONENT',
                                    'underline' => true
                                ],
                                'courses_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.COURSES_ENABLED',
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
                        'footer_tab' => [
                            'type' => 'tab',
                            'title' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_TAB',
                            'fields' => [
                                'footer_intro' => [
                                    'type' => 'display',
                                    'content' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_TAB_INTRO',
                                    'markdown' => true
                                ],
                                'footer_behavior_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_BEHAVIOR',
                                    'underline' => true
                                ],
                                'sticky-footer' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.STICKY_FOOTER',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.STICKY_FOOTER_HELP',
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
                                'footer_show_social' => [
                                    'type' => 'toggle',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_SHOW_SOCIAL',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_SHOW_SOCIAL_HELP',
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
                                'footer_content_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_CONTENT',
                                    'underline' => true
                                ],
                                'footer_branding_section' => [
                                    'type' => 'section',
                                    'title' => 'Footer Branding',
                                    'underline' => true
                                ],
                                'site_name' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SITE_NAME',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.SITE_NAME_HELP',
                                    'placeholder' => 'Nur-ul-Huda Islamic Center'
                                ],
                                'site_tagline' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SITE_TAGLINE',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.SITE_TAGLINE_HELP',
                                    'placeholder' => 'Guiding Light of Faith'
                                ],
                                'contact_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.CONTACT_INFO',
                                    'underline' => true
                                ],
                                'contact_phone' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.CONTACT_PHONE',
                                    'placeholder' => '+1 (234) 567-8900'
                                ],
                                'contact_address' => [
                                    'type' => 'textarea',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.CONTACT_ADDRESS',
                                    'placeholder' => '123 Main Street, City, State, ZIP',
                                    'rows' => 3
                                ],
                                'footer_copyright' => [
                                    'type' => 'textarea',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COPYRIGHT',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COPYRIGHT_HELP',
                                    'rows' => 3,
                                    'placeholder' => '© 2026 Your Organization. All rights reserved.'
                                ],
                                'footer_social_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_MEDIA',
                                    'underline' => true,
                                    'text' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_MEDIA_FOOTER_TEXT'
                                ],
                                'social_facebook' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_FACEBOOK',
                                    'placeholder' => 'https://facebook.com/yourpage',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_twitter' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_TWITTER',
                                    'placeholder' => 'https://twitter.com/yourhandle',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_instagram' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_INSTAGRAM',
                                    'placeholder' => 'https://instagram.com/yourhandle',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_youtube' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_YOUTUBE',
                                    'placeholder' => 'https://youtube.com/@yourchannel',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_telegram' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_TELEGRAM',
                                    'placeholder' => 'https://t.me/yourgroup',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_whatsapp' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_WHATSAPP',
                                    'placeholder' => 'https://wa.me/1234567890',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_WHATSAPP_HELP',
                                    'validate' => [
                                        'type' => 'URL'
                                    ]
                                ],
                                'social_email' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.SOCIAL_EMAIL',
                                    'placeholder' => 'info@yoursite.com',
                                    'validate' => [
                                        'type' => 'email'
                                    ]
                                ],
                                'footer_columns' => [
                                    'type' => 'list',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COLUMNS',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COLUMNS_HELP',
                                    'btnLabel' => 'THEME_NUR_UL_HUDA.ADMIN.ADD_FOOTER_COLUMN',
                                    'fields' => [
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COLUMN_TITLE',
                                            'placeholder' => 'Quick Links'
                                        ],
                                        '.links' => [
                                            'type' => 'list',
                                            'label' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_COLUMN_LINKS',
                                            'btnLabel' => 'THEME_NUR_UL_HUDA.ADMIN.ADD_LINK',
                                            'fields' => [
                                                '.text' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.LINK_TEXT',
                                                    'placeholder' => 'About Us'
                                                ],
                                                '.url' => [
                                                    'type' => 'text',
                                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.LINK_URL',
                                                    'placeholder' => '/about'
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                'footer_preview_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_PREVIEW',
                                    'underline' => true
                                ],
                                'footer_preview_info' => [
                                    'type' => 'display',
                                    'content' => 'THEME_NUR_UL_HUDA.ADMIN.FOOTER_PREVIEW_INFO',
                                    'markdown' => true
                                ]
                            ]
                        ],
                        'nur-ul-huda_legacy' => [
                            'type' => 'tab',
                            'title' => 'Nur-ul-Huda Options',
                            'fields' => [
                                'grid-size' => [
                                    'type' => 'select',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE_HELP',
                                    'size' => 'small',
                                    'options' => [
                                        '' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE_NONE',
                                        'grid-xl' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE_EXTRA_LARGE',
                                        'grid-lg' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE_LARGE',
                                        'grid-md' => 'THEME_NUR_UL_HUDA.ADMIN.GRID_SIZE_MEDIUM'
                                    ]
                                ],
                                'blog_section' => [
                                    'type' => 'section',
                                    'title' => 'THEME_NUR_UL_HUDA.ADMIN.BLOG_DEFAULTS',
                                    'underline' => true
                                ],
                                'blog-page' => [
                                    'type' => 'text',
                                    'label' => 'THEME_NUR_UL_HUDA.ADMIN.BLOG_PAGE',
                                    'help' => 'THEME_NUR_UL_HUDA.ADMIN.BLOG_PAGE_HELP',
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
