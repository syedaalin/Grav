<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/themes/my-quark/blueprints.yaml',
    'modified' => 1767809409,
    'size' => 46679,
    'data' => [
        'name' => 'My Quark',
        'version' => '0.5.3',
        'description' => 'Fully dynamic child theme of Quark (2026 Edition - Reorganized)',
        'icon' => 'empire',
        'author' => [
            'name' => 'Aabtaab',
            'email' => 'info@aabtaab.com'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'http://demo.getgrav.org/quark-skeleton',
        'keywords' => 'quark, theme, core, modern, fast, responsive, html5, css3, 2026',
        'bugs' => 'https://github.com/getgrav/grav-theme-quark/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.6.0'
            ],
            1 => [
                'name' => 'quark',
                'version' => '>=2.0.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'tabs' => [
                    'type' => 'tabs',
                    'active' => 1,
                    'fields' => [
                        'design_system_tab' => [
                            'type' => 'tab',
                            'title' => 'Design System',
                            'fields' => [
                                'design_system_info' => [
                                    'type' => 'section',
                                    'title' => 'Foundation Layer',
                                    'underline' => true,
                                    'text' => 'Configure atomic design tokens that form the foundation of your site\'s visual design. These settings cascade throughout all components and features.'
                                ],
                                'design_system_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'colors_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Colors',
                                            'fields' => [
                                                'brand_colors_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Brand Colors',
                                                    'underline' => true
                                                ],
                                                'color_primary' => [
                                                    'type' => 'color',
                                                    'label' => 'Primary Color',
                                                    'default' => '#3b4252',
                                                    'help' => 'Main brand identity color used for primary actions and emphasis',
                                                    'validate' => [
                                                        'required' => true
                                                    ]
                                                ],
                                                'color_secondary' => [
                                                    'type' => 'color',
                                                    'label' => 'Secondary Color',
                                                    'default' => '#88c0d0',
                                                    'help' => 'Secondary color for interactive elements and accents'
                                                ],
                                                'color_accent' => [
                                                    'type' => 'color',
                                                    'label' => 'Accent Color',
                                                    'default' => '#bf616a',
                                                    'help' => 'Highlight color for calls-to-action and important alerts'
                                                ],
                                                'surface_colors_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Surface Colors',
                                                    'underline' => true
                                                ],
                                                'color_background_body' => [
                                                    'type' => 'color',
                                                    'label' => 'Body Background',
                                                    'default' => '#eceff4',
                                                    'help' => 'Main page background color'
                                                ],
                                                'color_background_card' => [
                                                    'type' => 'color',
                                                    'label' => 'Card Background',
                                                    'default' => '#ffffff',
                                                    'help' => 'Background color for cards and elevated surfaces'
                                                ],
                                                'text_colors_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Text Colors',
                                                    'underline' => true
                                                ],
                                                'color_text_primary' => [
                                                    'type' => 'color',
                                                    'label' => 'Primary Text',
                                                    'default' => '#2e3440',
                                                    'help' => 'High contrast text color for body content (WCAG AAA)'
                                                ],
                                                'color_text_secondary' => [
                                                    'type' => 'color',
                                                    'label' => 'Secondary Text',
                                                    'default' => '#4c566a',
                                                    'help' => 'Lower contrast text for supporting content'
                                                ]
                                            ]
                                        ],
                                        'typography_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Typography',
                                            'fields' => [
                                                'font_families_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Font Families',
                                                    'underline' => true
                                                ],
                                                'typography_font_body' => [
                                                    'type' => 'select',
                                                    'label' => 'Body Font',
                                                    'default' => 'Outfit',
                                                    'options' => [
                                                        'optgroup.sans' => 'Sans Serif',
                                                        'Outfit' => 'Outfit',
                                                        'Roboto' => 'Roboto',
                                                        'Open Sans' => 'Open Sans',
                                                        'Inter' => 'Inter',
                                                        'Lato' => 'Lato',
                                                        'Montserrat' => 'Montserrat',
                                                        'Poppins' => 'Poppins',
                                                        'optgroup.serif' => 'Serif',
                                                        'Merriweather' => 'Merriweather',
                                                        'Playfair Display' => 'Playfair Display',
                                                        'Lora' => 'Lora'
                                                    ],
                                                    'help' => 'Font family for body text and paragraphs'
                                                ],
                                                'typography_font_headings' => [
                                                    'type' => 'select',
                                                    'label' => 'Headings Font',
                                                    'default' => 'Outfit',
                                                    'options' => [
                                                        'Outfit' => 'Outfit (Default)',
                                                        'optgroup.display' => 'Display',
                                                        'Bebas Neue' => 'Bebas Neue',
                                                        'Lobster' => 'Lobster',
                                                        'optgroup.serif' => 'Serif',
                                                        'Playfair Display' => 'Playfair Display',
                                                        'Merriweather' => 'Merriweather'
                                                    ],
                                                    'help' => 'Font family for headings (h1-h6)'
                                                ],
                                                'fluid_typography_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Fluid Typography (Responsive Scaling)',
                                                    'underline' => true
                                                ],
                                                'typography_fluid_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Fluid Scaling',
                                                    'default' => 1,
                                                    'help' => 'Uses CSS clamp() for smooth font scaling between viewport sizes',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'typography_size_min' => [
                                                    'type' => 'range',
                                                    'label' => 'Minimum Font Size (Mobile)',
                                                    'default' => 16,
                                                    'min' => 14,
                                                    'max' => 18,
                                                    'step' => 0.5,
                                                    'append' => 'px',
                                                    'help' => 'Base font size on smallest screens'
                                                ],
                                                'typography_size_max' => [
                                                    'type' => 'range',
                                                    'label' => 'Maximum Font Size (Desktop)',
                                                    'default' => 18,
                                                    'min' => 16,
                                                    'max' => 24,
                                                    'step' => 0.5,
                                                    'append' => 'px',
                                                    'help' => 'Base font size on largest screens'
                                                ],
                                                'typography_scale_ratio' => [
                                                    'type' => 'range',
                                                    'label' => 'Type Scale Ratio',
                                                    'default' => 1.25,
                                                    'min' => 1.067,
                                                    'max' => 1.618,
                                                    'step' => 0.001,
                                                    'append' => 'x',
                                                    'help' => 'Multiplier for heading sizes (1.25 = Major Third, 1.618 = Golden Ratio)'
                                                ],
                                                'line_heights_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Line Heights & Spacing',
                                                    'underline' => true
                                                ],
                                                'typography_line_height_body' => [
                                                    'type' => 'range',
                                                    'label' => 'Body Line Height',
                                                    'default' => 1.6,
                                                    'min' => 1.4,
                                                    'max' => 2.0,
                                                    'step' => 0.05,
                                                    'help' => 'Line height for paragraphs (1.6 recommended for readability)'
                                                ],
                                                'typography_line_height_headings' => [
                                                    'type' => 'range',
                                                    'label' => 'Headings Line Height',
                                                    'default' => 1.2,
                                                    'min' => 1.0,
                                                    'max' => 1.4,
                                                    'step' => 0.05,
                                                    'help' => 'Tighter line height for headings'
                                                ],
                                                'typography_letter_spacing_headings' => [
                                                    'type' => 'range',
                                                    'label' => 'Headings Letter Spacing',
                                                    'default' => -0.02,
                                                    'min' => -0.1,
                                                    'max' => 0.1,
                                                    'step' => 0.01,
                                                    'append' => 'em',
                                                    'help' => 'Tracking adjustment for headings (negative = tighter)'
                                                ],
                                                'typography_max_measure' => [
                                                    'type' => 'range',
                                                    'label' => 'Maximum Line Length',
                                                    'default' => 65,
                                                    'min' => 45,
                                                    'max' => 85,
                                                    'step' => 1,
                                                    'append' => 'ch',
                                                    'help' => 'Optimal readable line length in characters (45-75 recommended)'
                                                ]
                                            ]
                                        ],
                                        'spacing_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Spacing & Layout',
                                            'fields' => [
                                                'layout_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Layout Configuration',
                                                    'underline' => true
                                                ],
                                                'layout_container_width' => [
                                                    'type' => 'range',
                                                    'label' => 'Container Max Width',
                                                    'default' => 1200,
                                                    'min' => 800,
                                                    'max' => 1600,
                                                    'step' => 50,
                                                    'append' => 'px',
                                                    'help' => 'Maximum width for content containers'
                                                ],
                                                'layout_spacing_scale' => [
                                                    'type' => 'range',
                                                    'label' => 'Spacing Scale',
                                                    'default' => 1.0,
                                                    'min' => 0.5,
                                                    'max' => 2.0,
                                                    'step' => 0.1,
                                                    'append' => 'x',
                                                    'help' => 'Global spacing multiplier for padding and margins'
                                                ],
                                                'grid_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Grid System',
                                                    'underline' => true
                                                ],
                                                'layout_grid_size' => [
                                                    'type' => 'select',
                                                    'label' => 'Grid System',
                                                    'default' => 'grid-xl',
                                                    'options' => [
                                                        'grid-lg' => 'Large Grid',
                                                        'grid-xl' => 'Extra Large Grid'
                                                    ],
                                                    'help' => 'Base grid system for layout calculations'
                                                ]
                                            ]
                                        ],
                                        'visual_effects_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Visual Effects',
                                            'fields' => [
                                                'shapes_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Shapes & Corners',
                                                    'underline' => true
                                                ],
                                                'radius_corners' => [
                                                    'type' => 'select',
                                                    'label' => 'Border Radius',
                                                    'default' => '12px',
                                                    'options' => [
                                                        '0px' => 'Sharp (0px)',
                                                        '6px' => 'Subtle (6px)',
                                                        '12px' => 'Moderate (12px)',
                                                        '20px' => 'Rounded (20px)',
                                                        '32px' => 'Soft (32px)',
                                                        '999px' => 'Pill (Fully Rounded)'
                                                    ],
                                                    'help' => 'Global border radius for buttons, cards, and containers'
                                                ],
                                                'shadows_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Shadows & Depth',
                                                    'underline' => true
                                                ],
                                                'shadow_neomorphism_strength' => [
                                                    'type' => 'range',
                                                    'label' => 'Neomorphism Intensity',
                                                    'default' => 0,
                                                    'min' => 0,
                                                    'max' => 1.0,
                                                    'step' => 0.1,
                                                    'help' => 'Soft 3D shadow effect strength (0 = flat, 1 = pronounced)'
                                                ],
                                                'shadow_neomorphism_light_source' => [
                                                    'type' => 'select',
                                                    'label' => 'Light Source Direction',
                                                    'default' => 'top-left',
                                                    'options' => [
                                                        'top-left' => 'Top Left',
                                                        'top-right' => 'Top Right',
                                                        'top' => 'Top (Overhead)'
                                                    ],
                                                    'help' => 'Direction of virtual light for shadow calculations'
                                                ],
                                                'glass_effects_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Glassmorphism',
                                                    'underline' => true
                                                ],
                                                'glass_opacity' => [
                                                    'type' => 'range',
                                                    'label' => 'Glass Transparency',
                                                    'default' => 0.85,
                                                    'min' => 0.1,
                                                    'max' => 1.0,
                                                    'step' => 0.05,
                                                    'help' => 'Opacity for glass effect surfaces (lower = more transparent)'
                                                ],
                                                'glass_blur' => [
                                                    'type' => 'range',
                                                    'label' => 'Background Blur',
                                                    'default' => 20,
                                                    'min' => 0,
                                                    'max' => 50,
                                                    'step' => 1,
                                                    'append' => 'px',
                                                    'help' => 'Backdrop blur intensity (0 = no blur, 50 = heavy blur)'
                                                ],
                                                'atmospheric_effects_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Atmospheric Effects',
                                                    'underline' => true
                                                ],
                                                'effect_vignette_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Vignette',
                                                    'default' => 0,
                                                    'help' => 'Subtle darkening at edges to draw focus to center',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'brand_identity_tab' => [
                            'type' => 'tab',
                            'title' => 'Brand Identity',
                            'fields' => [
                                'brand_identity_info' => [
                                    'type' => 'section',
                                    'title' => 'Brand & Contact Information',
                                    'underline' => true,
                                    'text' => 'Configure your brand identity, logo, contact details, and social media profiles.'
                                ],
                                'logo_section' => [
                                    'type' => 'section',
                                    'title' => 'Logo',
                                    'underline' => true
                                ],
                                'brand_logo' => [
                                    'type' => 'file',
                                    'label' => 'Website Logo',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ],
                                    'help' => 'Your site logo (SVG recommended for scalability)'
                                ],
                                'brand_name' => [
                                    'type' => 'text',
                                    'label' => 'Brand Name',
                                    'help' => 'Displayed if logo is missing or alongside logo'
                                ],
                                'brand_show_text' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Brand Text with Logo',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'help' => 'Display brand name text alongside logo'
                                ],
                                'contact_section' => [
                                    'type' => 'section',
                                    'title' => 'Contact Information',
                                    'underline' => true
                                ],
                                'contact_address' => [
                                    'type' => 'text',
                                    'label' => 'Address',
                                    'help' => 'Physical address or location'
                                ],
                                'contact_email' => [
                                    'type' => 'text',
                                    'label' => 'Email Address',
                                    'help' => 'Contact email address'
                                ],
                                'contact_phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number',
                                    'help' => 'Contact phone number'
                                ],
                                'social_section' => [
                                    'type' => 'section',
                                    'title' => 'Social Media Links',
                                    'underline' => true
                                ],
                                'social_links' => [
                                    'type' => 'list',
                                    'label' => 'Social Profiles',
                                    'help' => 'Define social media profiles',
                                    'fields' => [
                                        '.network' => [
                                            'type' => 'select',
                                            'label' => 'Network',
                                            'options' => [
                                                'facebook' => 'Facebook',
                                                'twitter' => 'Twitter (X)',
                                                'instagram' => 'Instagram',
                                                'linkedin' => 'LinkedIn',
                                                'youtube' => 'YouTube',
                                                'github' => 'GitHub',
                                                'googlemaps' => 'Google Maps'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Profile URL'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'homepage_tab' => [
                            'type' => 'tab',
                            'title' => 'Homepage',
                            'fields' => [
                                'homepage_info' => [
                                    'type' => 'section',
                                    'title' => 'Homepage Configuration',
                                    'underline' => true,
                                    'text' => 'Manage the content sections of your homepage directly from here.'
                                ],
                                'home_enabled' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Dynamic Homepage',
                                    'default' => 1,
                                    'help' => 'Switch between this dynamic content and the default Markdown content',
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'home_hero_section' => [
                                    'type' => 'section',
                                    'title' => 'Hero Section',
                                    'underline' => true
                                ],
                                'home_hero_title' => [
                                    'type' => 'text',
                                    'label' => 'Hero Title',
                                    'default' => 'Learn Quran, Fiqh & More From Shia Scholars.'
                                ],
                                'home_hero_description' => [
                                    'type' => 'textarea',
                                    'label' => 'Hero Description',
                                    'default' => 'At Aabtaab, we bring accessible and affordable Shia Islamic education to everyone no matter where you are in the world.'
                                ],
                                'home_hero_btn_text' => [
                                    'type' => 'text',
                                    'label' => 'Primary Button Text',
                                    'default' => 'VIEW ALL SERVICES'
                                ],
                                'home_hero_btn_url' => [
                                    'type' => 'text',
                                    'label' => 'Primary Button URL',
                                    'default' => '#services'
                                ],
                                'home_services_section' => [
                                    'type' => 'section',
                                    'title' => 'Services Section',
                                    'underline' => true
                                ],
                                'home_services_title' => [
                                    'type' => 'text',
                                    'label' => 'Section Title',
                                    'default' => 'Our Services 🤲'
                                ],
                                'home_services' => [
                                    'type' => 'list',
                                    'label' => 'Services List',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon (Emoji/Text)'
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.description' => [
                                            'type' => 'textarea',
                                            'label' => 'Description'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Link URL'
                                        ],
                                        '.btn_text' => [
                                            'type' => 'text',
                                            'label' => 'Button Text',
                                            'default' => 'View Details →'
                                        ]
                                    ]
                                ],
                                'home_quote_section' => [
                                    'type' => 'section',
                                    'title' => 'Quote Section',
                                    'underline' => true
                                ],
                                'home_quote_title' => [
                                    'type' => 'text',
                                    'label' => 'Section Title',
                                    'default' => 'Quote of the Day'
                                ],
                                'home_quote_author' => [
                                    'type' => 'text',
                                    'label' => 'Author',
                                    'default' => 'Prophet Muhammad (SAWW)'
                                ],
                                'home_quote_arabic' => [
                                    'type' => 'textarea',
                                    'label' => 'Arabic Text',
                                    'default' => 'ظِلُّ الْمُؤْمِنِ يَوْمَ الْقِيَامَةِ صَدَقَتُهُ'
                                ],
                                'home_quote_english' => [
                                    'type' => 'textarea',
                                    'label' => 'English Translation',
                                    'default' => '"The believer\'s shade on the Day of Resurrection will be his charity"'
                                ],
                                'home_quote_btn_text' => [
                                    'type' => 'text',
                                    'label' => 'CTA Button Text',
                                    'default' => '❤️ GIVE TODAY'
                                ],
                                'home_quote_btn_url' => [
                                    'type' => 'text',
                                    'label' => 'CTA Button URL',
                                    'default' => '/donate'
                                ],
                                'home_courses_section' => [
                                    'type' => 'section',
                                    'title' => 'Courses Section',
                                    'underline' => true
                                ],
                                'home_courses_title' => [
                                    'type' => 'text',
                                    'label' => 'Section Title',
                                    'default' => 'Popular Courses 📚'
                                ],
                                'home_courses_subtitle' => [
                                    'type' => 'text',
                                    'label' => 'Subtitle',
                                    'default' => 'Pick A Course To Get Started'
                                ],
                                'home_courses' => [
                                    'type' => 'list',
                                    'label' => 'Courses List',
                                    'fields' => [
                                        '.icon' => [
                                            'type' => 'text',
                                            'label' => 'Icon'
                                        ],
                                        '.title' => [
                                            'type' => 'text',
                                            'label' => 'Title'
                                        ],
                                        '.subtitle' => [
                                            'type' => 'text',
                                            'label' => 'Subtitle'
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Enroll URL'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'hero_tab' => [
                            'type' => 'tab',
                            'title' => 'Hero',
                            'fields' => [
                                'hero_info' => [
                                    'type' => 'section',
                                    'title' => 'Hero Section Defaults',
                                    'underline' => true,
                                    'text' => 'Theme-level defaults for hero sections. Individual pages can override these settings.'
                                ],
                                'hero_defaults_section' => [
                                    'type' => 'section',
                                    'title' => 'Hero Defaults',
                                    'underline' => true
                                ],
                                'hero_default_style' => [
                                    'type' => 'select',
                                    'label' => 'Default Style',
                                    'default' => 'standard',
                                    'options' => [
                                        'standard' => 'Standard (Centered)',
                                        'split' => 'Split (Text Left / Image Right)',
                                        'immersive' => 'Immersive (Full Screen)',
                                        'minimal' => 'Minimal (Text Only)'
                                    ],
                                    'help' => 'Default layout style for hero sections'
                                ],
                                'hero_default_overlay' => [
                                    'type' => 'range',
                                    'label' => 'Default Overlay Opacity',
                                    'default' => 0.3,
                                    'min' => 0,
                                    'max' => 1,
                                    'step' => 0.1,
                                    'help' => 'Background overlay darkness (0 = transparent, 1 = opaque)'
                                ],
                                'hero_default_button_style' => [
                                    'type' => 'select',
                                    'label' => 'Default CTA Button Style',
                                    'default' => 'primary',
                                    'options' => [
                                        'primary' => 'Primary',
                                        'secondary' => 'Secondary',
                                        'accent' => 'Accent',
                                        'ghost' => 'Ghost'
                                    ],
                                    'help' => 'Default style for hero call-to-action buttons'
                                ],
                                'hero_enable_animations' => [
                                    'type' => 'toggle',
                                    'label' => 'Enable Animations',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ],
                                    'help' => 'Animate hero content on page load'
                                ]
                            ]
                        ],
                        'backgrounds_tab' => [
                            'type' => 'tab',
                            'title' => 'Backgrounds',
                            'fields' => [
                                'backgrounds_info' => [
                                    'type' => 'section',
                                    'title' => 'Background Configuration',
                                    'underline' => true,
                                    'text' => 'Configure page backgrounds with solid colors, gradients, images, animated meshes, or patterns.'
                                ],
                                'background_mode_section' => [
                                    'type' => 'section',
                                    'title' => 'Background Style',
                                    'underline' => true
                                ],
                                'background_mode' => [
                                    'type' => 'toggle',
                                    'label' => 'Background Type',
                                    'default' => 0,
                                    'highlight' => 1,
                                    'options' => [
                                        0 => 'Solid Color',
                                        1 => 'Gradient',
                                        2 => 'Image',
                                        3 => 'Animated Mesh',
                                        4 => 'Pattern'
                                    ],
                                    'validate' => [
                                        'type' => 'int'
                                    ],
                                    'help' => 'Choose your page background style'
                                ],
                                'background_options_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'solid_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Solid',
                                            'fields' => [
                                                'background_solid_color' => [
                                                    'type' => 'color',
                                                    'label' => 'Background Color',
                                                    'default' => '#ffffff',
                                                    'help' => 'Solid color background'
                                                ]
                                            ]
                                        ],
                                        'gradient_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Gradient',
                                            'fields' => [
                                                'background_gradient_type' => [
                                                    'type' => 'select',
                                                    'label' => 'Gradient Type',
                                                    'default' => 'linear',
                                                    'options' => [
                                                        'linear' => 'Linear',
                                                        'radial' => 'Radial'
                                                    ],
                                                    'help' => 'Type of gradient'
                                                ],
                                                'background_gradient_angle' => [
                                                    'type' => 'range',
                                                    'label' => 'Angle',
                                                    'default' => 135,
                                                    'min' => 0,
                                                    'max' => 360,
                                                    'step' => 5,
                                                    'append' => 'deg',
                                                    'help' => 'Gradient direction (linear only)'
                                                ],
                                                'background_gradient_start' => [
                                                    'type' => 'color',
                                                    'label' => 'Start Color',
                                                    'default' => '#3b4252'
                                                ],
                                                'background_gradient_end' => [
                                                    'type' => 'color',
                                                    'label' => 'End Color',
                                                    'default' => '#88c0d0'
                                                ]
                                            ]
                                        ],
                                        'image_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Image',
                                            'fields' => [
                                                'background_image' => [
                                                    'type' => 'file',
                                                    'label' => 'Background Image',
                                                    'destination' => 'theme://images/backgrounds',
                                                    'multiple' => false,
                                                    'accept' => [
                                                        0 => 'image/*'
                                                    ]
                                                ],
                                                'background_image_position' => [
                                                    'type' => 'select',
                                                    'label' => 'Position',
                                                    'default' => 'center center',
                                                    'options' => [
                                                        'center center' => 'Center',
                                                        'top center' => 'Top',
                                                        'bottom center' => 'Bottom'
                                                    ],
                                                    'help' => 'Image focal point'
                                                ],
                                                'background_image_size' => [
                                                    'type' => 'select',
                                                    'label' => 'Size',
                                                    'default' => 'cover',
                                                    'options' => [
                                                        'cover' => 'Cover (Fill)',
                                                        'contain' => 'Contain (Fit)',
                                                        'auto' => 'Original Size'
                                                    ],
                                                    'help' => 'How image fills space'
                                                ],
                                                'background_image_attachment' => [
                                                    'type' => 'select',
                                                    'label' => 'Scroll Behavior',
                                                    'default' => 'fixed',
                                                    'options' => [
                                                        'fixed' => 'Fixed (Parallax)',
                                                        'scroll' => 'Scroll (Normal)'
                                                    ],
                                                    'help' => 'Image movement on scroll'
                                                ],
                                                'background_image_overlay' => [
                                                    'type' => 'color',
                                                    'label' => 'Overlay Color',
                                                    'default' => '#000000',
                                                    'help' => 'Tint overlay color'
                                                ],
                                                'background_image_overlay_opacity' => [
                                                    'type' => 'range',
                                                    'label' => 'Overlay Opacity',
                                                    'default' => 0.3,
                                                    'min' => 0,
                                                    'max' => 1,
                                                    'step' => 0.1,
                                                    'help' => 'Overlay darkness'
                                                ]
                                            ]
                                        ],
                                        'mesh_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Animated Mesh',
                                            'fields' => [
                                                'background_mesh_color1' => [
                                                    'type' => 'color',
                                                    'label' => 'Mesh Color 1',
                                                    'default' => '#3b4252'
                                                ],
                                                'background_mesh_color2' => [
                                                    'type' => 'color',
                                                    'label' => 'Mesh Color 2',
                                                    'default' => '#bf616a'
                                                ],
                                                'background_mesh_color3' => [
                                                    'type' => 'color',
                                                    'label' => 'Mesh Color 3',
                                                    'default' => '#88c0d0'
                                                ],
                                                'background_mesh_speed' => [
                                                    'type' => 'range',
                                                    'label' => 'Animation Speed',
                                                    'default' => 20,
                                                    'min' => 5,
                                                    'max' => 60,
                                                    'step' => 5,
                                                    'help' => 'Speed of mesh animation'
                                                ]
                                            ]
                                        ],
                                        'pattern_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Pattern',
                                            'fields' => [
                                                'background_pattern_type' => [
                                                    'type' => 'select',
                                                    'label' => 'Pattern Type',
                                                    'default' => 'none',
                                                    'options' => [
                                                        'none' => 'None',
                                                        'noise' => 'Perlin Noise',
                                                        'dots' => 'Dots',
                                                        'grid' => 'Grid Lines',
                                                        'lines' => 'Diagonal Lines'
                                                    ],
                                                    'help' => 'Mathematical pattern overlay'
                                                ],
                                                'background_pattern_color' => [
                                                    'type' => 'color',
                                                    'label' => 'Pattern Color',
                                                    'default' => '#000000'
                                                ],
                                                'background_pattern_opacity' => [
                                                    'type' => 'range',
                                                    'label' => 'Pattern Opacity',
                                                    'default' => 0.05,
                                                    'min' => 0.01,
                                                    'max' => 0.2,
                                                    'step' => 0.01,
                                                    'help' => 'Pattern visibility'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'components_tab' => [
                            'type' => 'tab',
                            'title' => 'Components',
                            'fields' => [
                                'components_info' => [
                                    'type' => 'section',
                                    'title' => 'Component Defaults',
                                    'underline' => true,
                                    'text' => 'Configure default styles and behaviors for reusable components. These settings apply site-wide but can be overridden at the page or component level.'
                                ],
                                'components_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'buttons_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Buttons',
                                            'fields' => [
                                                'button_defaults_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Button Configuration',
                                                    'underline' => true
                                                ],
                                                'button_default_variant' => [
                                                    'type' => 'select',
                                                    'label' => 'Default Style',
                                                    'default' => 'primary',
                                                    'options' => [
                                                        'primary' => 'Primary (Brand Color)',
                                                        'secondary' => 'Secondary (Neutral)',
                                                        'accent' => 'Accent (Highlight)',
                                                        'ghost' => 'Ghost (Transparent)',
                                                        'glass' => 'Glass (Glassmorphic)'
                                                    ],
                                                    'help' => 'Default visual style when not explicitly specified'
                                                ],
                                                'button_default_size' => [
                                                    'type' => 'select',
                                                    'label' => 'Default Size',
                                                    'default' => 'md',
                                                    'options' => [
                                                        'sm' => 'Small',
                                                        'md' => 'Medium',
                                                        'lg' => 'Large'
                                                    ],
                                                    'help' => 'Default button size (all meet 44x44px minimum touch target)'
                                                ],
                                                'button_haptic_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Haptic Feedback',
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Vibration feedback on supported touch devices'
                                                ]
                                            ]
                                        ],
                                        'cards_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Cards',
                                            'fields' => [
                                                'card_defaults_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Card Configuration',
                                                    'underline' => true
                                                ],
                                                'card_default_variant' => [
                                                    'type' => 'select',
                                                    'label' => 'Default Style',
                                                    'default' => 'default',
                                                    'options' => [
                                                        'default' => 'Default (Solid)',
                                                        'glass' => 'Glass (Translucent)',
                                                        'neo' => 'Neomorphic (Soft 3D)',
                                                        'accent' => 'Accent (Highlighted)'
                                                    ],
                                                    'help' => 'Default card visual style'
                                                ],
                                                'card_shadow_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Shadows',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Add depth with box-shadow'
                                                ],
                                                'card_image_lazy_load' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Lazy Load Images',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Defer image loading until visible'
                                                ]
                                            ]
                                        ],
                                        'forms_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Forms',
                                            'fields' => [
                                                'form_defaults_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Form Configuration',
                                                    'underline' => true
                                                ],
                                                'form_required_symbol' => [
                                                    'type' => 'text',
                                                    'label' => 'Required Field Symbol',
                                                    'default' => '*',
                                                    'help' => 'Symbol displayed next to required field labels'
                                                ],
                                                'form_validation_style' => [
                                                    'type' => 'select',
                                                    'label' => 'Validation Display',
                                                    'default' => 'inline',
                                                    'options' => [
                                                        'inline' => 'Inline (Below Field)',
                                                        'tooltip' => 'Tooltip (On Hover)',
                                                        'summary' => 'Summary (Top of Form)'
                                                    ],
                                                    'help' => 'How validation messages are displayed'
                                                ],
                                                'form_focus_highlight' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Focus Highlight',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Visual highlight when fields receive focus'
                                                ]
                                            ]
                                        ],
                                        'images_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Images',
                                            'fields' => [
                                                'image_defaults_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Image Configuration',
                                                    'underline' => true
                                                ],
                                                'image_default_loading' => [
                                                    'type' => 'select',
                                                    'label' => 'Loading Strategy',
                                                    'default' => 'lazy',
                                                    'options' => [
                                                        'eager' => 'Eager (Immediate)',
                                                        'lazy' => 'Lazy (Deferred)'
                                                    ],
                                                    'help' => 'Use eager for above-fold images, lazy for below-fold'
                                                ],
                                                'image_default_quality' => [
                                                    'type' => 'range',
                                                    'label' => 'Image Quality',
                                                    'default' => 85,
                                                    'min' => 60,
                                                    'max' => 100,
                                                    'step' => 5,
                                                    'append' => '%',
                                                    'help' => 'Compression quality for processed images'
                                                ],
                                                'image_caption_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show Captions',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Display captions below images when alt text provided'
                                                ],
                                                'image_responsive' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Responsive Images',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Generate srcset for multiple device resolutions'
                                                ]
                                            ]
                                        ],
                                        'meta_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Meta Info',
                                            'fields' => [
                                                'meta_defaults_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Meta Information Display',
                                                    'underline' => true
                                                ],
                                                'meta_show_author' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show Author',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Display author name in article metadata'
                                                ],
                                                'meta_show_date' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show Publish Date',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Display publish date in article metadata'
                                                ],
                                                'meta_date_format' => [
                                                    'type' => 'text',
                                                    'label' => 'Date Format',
                                                    'default' => 'F d, Y',
                                                    'help' => 'PHP date format string (e.g., "F d, Y" produces "January 07, 2026")'
                                                ],
                                                'meta_show_reading_time' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Show Reading Time',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Calculate and display estimated reading time'
                                                ],
                                                'meta_separator' => [
                                                    'type' => 'text',
                                                    'label' => 'Separator Character',
                                                    'default' => '•',
                                                    'help' => 'Character used between meta items (e.g., "author • date")'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'experience_tab' => [
                            'type' => 'tab',
                            'title' => 'Experience',
                            'fields' => [
                                'experience_info' => [
                                    'type' => 'section',
                                    'title' => 'User Experience',
                                    'underline' => true,
                                    'text' => 'Configure animations, accessibility features, and adaptive behaviors that enhance the user experience.'
                                ],
                                'experience_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'animations_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Animations',
                                            'fields' => [
                                                'animations_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Motion & Animation',
                                                    'underline' => true
                                                ],
                                                'animations_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable Animations',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Global animation toggle (respects prefers-reduced-motion)'
                                                ],
                                                'animations_respect_reduced_motion' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Respect Reduced Motion',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Disable animations for users who prefer reduced motion'
                                                ]
                                            ]
                                        ],
                                        'accessibility_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Accessibility',
                                            'fields' => [
                                                'accessibility_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Accessibility Features',
                                                    'underline' => true
                                                ],
                                                'accessibility_skip_link_text' => [
                                                    'type' => 'text',
                                                    'label' => 'Skip to Content Text',
                                                    'default' => 'THEME_MY_QUARK.SKIP_TO_CONTENT',
                                                    'help' => 'Screen reader text for skip navigation link'
                                                ],
                                                'accessibility_mobile_menu_label' => [
                                                    'type' => 'text',
                                                    'label' => 'Mobile Menu Label',
                                                    'default' => 'THEME_MY_QUARK.TOGGLE_MOBILE_MENU',
                                                    'help' => 'ARIA label for mobile menu button'
                                                ],
                                                'accessibility_focus_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Focus Mode',
                                                    'default' => 0,
                                                    'help' => 'Reduce decorative elements for better focus',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'sustainability_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Sustainability',
                                            'fields' => [
                                                'sustainability_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Eco-Friendly Features',
                                                    'underline' => true
                                                ],
                                                'sustainability_eco_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Force Eco Mode',
                                                    'default' => 0,
                                                    'help' => 'Disable animations and reduce complexity to save energy',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'sustainability_score' => [
                                                    'type' => 'text',
                                                    'label' => 'Sustainability Score',
                                                    'default' => 'A+',
                                                    'help' => 'The estimated sustainability grade (e.g., A+, B)'
                                                ],
                                                'co2_per_view' => [
                                                    'type' => 'text',
                                                    'label' => 'CO2 per View',
                                                    'default' => '0.2g',
                                                    'help' => 'Estimated grams of CO2 emitted per page view'
                                                ]
                                            ]
                                        ],
                                        'ai_augmentation_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'AI Augmentation',
                                            'fields' => [
                                                'ai_augmentation_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Agentic Collaboration',
                                                    'underline' => true
                                                ],
                                                'ai_augmentation_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Enable AI Enhancements',
                                                    'default' => 1,
                                                    'help' => 'Allow AI-generated content blocks and disclosures',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'advanced_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Advanced',
                                            'fields' => [
                                                'advanced_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Experimental Features',
                                                    'underline' => true
                                                ],
                                                'advanced_haptics' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Global Haptic Feedback',
                                                    'default' => 0,
                                                    'help' => 'Enable vibration feedback for all interactive elements',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'configuration_tab' => [
                            'type' => 'tab',
                            'title' => 'Configuration',
                            'fields' => [
                                'configuration_info' => [
                                    'type' => 'section',
                                    'title' => 'System Configuration',
                                    'underline' => true,
                                    'text' => 'Technical settings for performance, privacy, and localization.'
                                ],
                                'configuration_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'performance_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Performance',
                                            'fields' => [
                                                'performance_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Performance Optimization',
                                                    'underline' => true
                                                ],
                                                'performance_production_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Production Mode',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ],
                                                    'help' => 'Enable asset compression and optimization'
                                                ]
                                            ]
                                        ],
                                        'privacy_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Privacy',
                                            'fields' => [
                                                'privacy_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Privacy & Security',
                                                    'underline' => true
                                                ],
                                                'privacy_shield_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Privacy Shield',
                                                    'default' => 1,
                                                    'help' => 'Block third-party trackers and use local-only resources',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'localization_subtab' => [
                                            'type' => 'tab',
                                            'title' => 'Localization',
                                            'fields' => [
                                                'localization_section' => [
                                                    'type' => 'section',
                                                    'title' => 'UI Text Strings',
                                                    'underline' => true,
                                                    'text' => 'Override default UI text. Use language keys for multilingual support.'
                                                ],
                                                'localization_newsletter_placeholder' => [
                                                    'type' => 'text',
                                                    'label' => 'Newsletter Email Placeholder',
                                                    'default' => 'THEME_MY_QUARK.NEWSLETTER_PLACEHOLDER',
                                                    'help' => 'Placeholder text for newsletter email input'
                                                ],
                                                'localization_newsletter_button' => [
                                                    'type' => 'text',
                                                    'label' => 'Newsletter Button Text',
                                                    'default' => 'THEME_MY_QUARK.NEWSLETTER_BUTTON',
                                                    'help' => 'Submit button text for newsletter forms'
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
