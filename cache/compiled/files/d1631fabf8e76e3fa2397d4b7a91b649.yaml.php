<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/syedaalin/Documents/Grav/user/themes/my-quark/blueprints.yaml',
    'modified' => 1767738989,
    'size' => 32463,
    'data' => [
        'name' => 'My Quark',
        'version' => '0.5.2',
        'description' => 'Fully dynamic child theme of Quark (2026 Edition)',
        'icon' => 'empire',
        'author' => [
            'name' => 'Aabtaab',
            'email' => 'info@aabtaab.com'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-quark',
        'demo' => 'http://demo.getgrav.org/quark-skeleton',
        'keywords' => 'quark, theme, core, modern, fast, responsive, html5, css3',
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
                        'core_design_tab' => [
                            'type' => 'tab',
                            'title' => 'BRAND & DESIGN',
                            'fields' => [
                                'core_inner_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'colors_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Colors',
                                            'fields' => [
                                                'token_color_primary' => [
                                                    'type' => 'color',
                                                    'label' => 'Primary Color',
                                                    'default' => '#3b4252',
                                                    'help' => 'Main brand identity color.',
                                                    'validate' => [
                                                        'check' => true
                                                    ]
                                                ],
                                                'token_color_secondary' => [
                                                    'type' => 'color',
                                                    'label' => 'Secondary Color',
                                                    'default' => '#88c0d0',
                                                    'help' => 'Secondary color for interactive elements.'
                                                ],
                                                'token_color_accent' => [
                                                    'type' => 'color',
                                                    'label' => 'Accent Color',
                                                    'default' => '#bf616a',
                                                    'help' => 'Highlight and alerts color.'
                                                ],
                                                'surface_section' => [
                                                    'type' => 'section',
                                                    'title' => 'Surface & UI Colors',
                                                    'underline' => true
                                                ],
                                                'token_color_bg_body' => [
                                                    'type' => 'color',
                                                    'label' => 'Body Background',
                                                    'default' => '#eceff4'
                                                ],
                                                'token_color_bg_card' => [
                                                    'type' => 'color',
                                                    'label' => 'Card / Surface Background',
                                                    'default' => '#ffffff'
                                                ],
                                                'token_color_text_main' => [
                                                    'type' => 'color',
                                                    'label' => 'High Contrast Text',
                                                    'default' => '#2e3440'
                                                ],
                                                'token_color_text_muted' => [
                                                    'type' => 'color',
                                                    'label' => 'Low Contrast Text',
                                                    'default' => '#4c566a'
                                                ]
                                            ]
                                        ],
                                        'typo_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Typography',
                                            'fields' => [
                                                'token_font_body' => [
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
                                                    ]
                                                ],
                                                'token_font_header' => [
                                                    'type' => 'select',
                                                    'label' => 'Header Font',
                                                    'default' => 'Outfit',
                                                    'options' => [
                                                        'Outfit' => 'Outfit (Default)',
                                                        'optgroup.display' => 'Display',
                                                        'Bebas Neue' => 'Bebas Neue',
                                                        'Lobster' => 'Lobster',
                                                        'optgroup.serif' => 'Serif',
                                                        'Playfair Display' => 'Playfair Display',
                                                        'Merriweather' => 'Merriweather'
                                                    ]
                                                ],
                                                'token_typo_fluid' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Fluid Scaling (Clamp)',
                                                    'default' => 1,
                                                    'help' => 'Enables mathematical scaling between responsive viewports.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'token_typo_min_size' => [
                                                    'type' => 'range',
                                                    'label' => 'Min Font Size (Mobile)',
                                                    'default' => 16,
                                                    'min' => 14,
                                                    'max' => 18,
                                                    'step' => 0.5,
                                                    'append' => 'px'
                                                ],
                                                'token_typo_max_size' => [
                                                    'type' => 'range',
                                                    'label' => 'Max Font Size (Desktop)',
                                                    'default' => 18,
                                                    'min' => 16,
                                                    'max' => 24,
                                                    'step' => 0.5,
                                                    'append' => 'px'
                                                ],
                                                'token_typo_scale' => [
                                                    'type' => 'range',
                                                    'label' => 'Type Scale Factor',
                                                    'default' => 1.25,
                                                    'min' => 1.067,
                                                    'max' => 1.618,
                                                    'step' => 0.001,
                                                    'append' => 'x'
                                                ],
                                                'token_typo_lh_body' => [
                                                    'type' => 'range',
                                                    'label' => 'Body Line Height',
                                                    'default' => 1.6,
                                                    'min' => 1.4,
                                                    'max' => 2.0,
                                                    'step' => 0.05
                                                ],
                                                'token_typo_lh_heading' => [
                                                    'type' => 'range',
                                                    'label' => 'Heading Line Height',
                                                    'default' => 1.2,
                                                    'min' => 1.0,
                                                    'max' => 1.4,
                                                    'step' => 0.05
                                                ],
                                                'token_typo_ls_heading' => [
                                                    'type' => 'range',
                                                    'label' => 'Heading Tracking',
                                                    'default' => -0.02,
                                                    'min' => -0.1,
                                                    'max' => 0.1,
                                                    'step' => 0.01,
                                                    'append' => 'em'
                                                ],
                                                'token_typo_measure' => [
                                                    'type' => 'range',
                                                    'label' => 'Max Line Measure',
                                                    'default' => 65,
                                                    'min' => 45,
                                                    'max' => 85,
                                                    'step' => 1,
                                                    'append' => 'ch',
                                                    'help' => 'Optimal readable line length.'
                                                ]
                                            ]
                                        ],
                                        'layout_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Layout & Width',
                                            'fields' => [
                                                'token_layout_width' => [
                                                    'type' => 'range',
                                                    'label' => 'Website Max Width',
                                                    'default' => 1200,
                                                    'min' => 800,
                                                    'max' => 1600,
                                                    'step' => 50,
                                                    'append' => 'px'
                                                ],
                                                'token_layout_spacing' => [
                                                    'type' => 'range',
                                                    'label' => 'Spacing Multiplier',
                                                    'default' => 1.0,
                                                    'min' => 0.5,
                                                    'max' => 2.0,
                                                    'step' => 0.1,
                                                    'append' => 'x',
                                                    'help' => 'Global density constant.'
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'core_physics_tab' => [
                            'type' => 'tab',
                            'title' => 'EFFECTS & UX',
                            'fields' => [
                                'physics_inner_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'tactile_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Shapes & Shadows',
                                            'fields' => [
                                                'physic_radius_main' => [
                                                    'type' => 'select',
                                                    'label' => 'Corner Roundness',
                                                    'default' => '12px',
                                                    'options' => [
                                                        '0px' => 'Sharp (Square)',
                                                        '6px' => 'Tight (6px)',
                                                        '12px' => 'Soft (12px)',
                                                        '20px' => 'Modern (20px)',
                                                        '32px' => 'Friendly (32px)',
                                                        '999px' => 'Full / Pill (Circular)'
                                                    ]
                                                ],
                                                'physic_neo_strength' => [
                                                    'type' => 'range',
                                                    'label' => 'Soft 3D Depth (Neomorphism)',
                                                    'default' => 0,
                                                    'min' => 0,
                                                    'max' => 1.0,
                                                    'step' => 0.1,
                                                    'help' => 'Intensity of soft shadow/highlight logic (0 = Flat).'
                                                ],
                                                'physic_neo_lightSource' => [
                                                    'type' => 'select',
                                                    'label' => 'Global Light Source',
                                                    'default' => 'top-left',
                                                    'options' => [
                                                        'top-left' => 'Top Left (Northeast)',
                                                        'top-right' => 'Top Right (Northwest)',
                                                        'top' => 'Overhead (Zenith)'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'atmosphere_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Atmospheric',
                                            'fields' => [
                                                'physic_glass_opacity' => [
                                                    'type' => 'range',
                                                    'label' => 'Glass Transparency',
                                                    'default' => 0.85,
                                                    'min' => 0.1,
                                                    'max' => 1.0,
                                                    'step' => 0.05,
                                                    'help' => 'Transparency constant for glass panels.'
                                                ],
                                                'physic_glass_blur' => [
                                                    'type' => 'range',
                                                    'label' => 'Glass Blur Intensity',
                                                    'default' => 20,
                                                    'min' => 0,
                                                    'max' => 50,
                                                    'step' => 1,
                                                    'append' => 'px',
                                                    'help' => 'Backdrop blur intensity.'
                                                ],
                                                'physic_vignette_enabled' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Vignette Effect (Dark Edges)',
                                                    'default' => 0,
                                                    'help' => 'Subtle edge darkening for focus containment.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'adaptive_tab' => [
                                            'type' => 'tab',
                                            'title' => 'Adaptive UX',
                                            'fields' => [
                                                'physic_eco_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Force Eco Mode (Saves Energy)',
                                                    'default' => 0,
                                                    'help' => 'Disables animations and reduces complexity to save energy.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'physic_focus_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Cognitive Focus Mode',
                                                    'default' => 0,
                                                    'help' => 'Strips decorative elements for a clean reading experience.',
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
                        'branding_tab' => [
                            'type' => 'tab',
                            'title' => 'Branding',
                            'fields' => [
                                'logo_section' => [
                                    'type' => 'section',
                                    'title' => 'Logo Configuration',
                                    'underline' => true
                                ],
                                'logo' => [
                                    'type' => 'file',
                                    'label' => 'Website Logo (Desktop, Mobile, Favicon)',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'brand_text' => [
                                    'type' => 'text',
                                    'label' => 'Brand Name (Text)',
                                    'help' => 'Displayed if logo is missing or "Show Brand Text" is enabled.'
                                ],
                                'brand_text_show' => [
                                    'type' => 'toggle',
                                    'label' => 'Show Brand Text with Logo',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                    ]
                                ],
                                'contact_section' => [
                                    'type' => 'section',
                                    'title' => 'Contact Information',
                                    'underline' => true
                                ],
                                'contact_address' => [
                                    'type' => 'text',
                                    'label' => 'Address'
                                ],
                                'contact_email' => [
                                    'type' => 'text',
                                    'label' => 'Email Address'
                                ],
                                'contact_phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number'
                                ],
                                'footer_social_section' => [
                                    'type' => 'section',
                                    'title' => 'Social Networks',
                                    'underline' => true
                                ],
                                'social_links' => [
                                    'type' => 'list',
                                    'label' => 'Social Profiles',
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
                        'agentic_components_tab' => [
                            'type' => 'tab',
                            'title' => 'BUILDERS & COMPONENTS',
                            'fields' => [
                                'agentic_inner_tabs' => [
                                    'type' => 'tabs',
                                    'active' => 1,
                                    'fields' => [
                                        'header_architect' => [
                                            'type' => 'tab',
                                            'title' => 'Header Builder',
                                            'fields' => [
                                                'header_options' => [
                                                    'type' => 'section',
                                                    'title' => 'Header Options',
                                                    'underline' => true
                                                ],
                                                'agent_header_fixed' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Sticky Header',
                                                    'default' => 1,
                                                    'help' => 'Maintains vertical anchor during scroll.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'agent_header_animated' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Shrinking Header',
                                                    'default' => 1,
                                                    'help' => 'Interpolates scale based on depth.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'agent_header_dark' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Dark Header Mode',
                                                    'default' => 0,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'agent_header_transparent' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Transparent Header',
                                                    'default' => 0,
                                                    'help' => 'Inherits environment background in Hero context.',
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'header_builder_area' => [
                                                    'type' => 'section',
                                                    'title' => 'Menu Structure',
                                                    'underline' => true
                                                ],
                                                'agent_header_structure' => [
                                                    'type' => 'list',
                                                    'label' => 'Header Menu Items',
                                                    'btnLabel' => 'Add Menu Item',
                                                    'fields' => [
                                                        '.label' => [
                                                            'type' => 'text',
                                                            'label' => 'Label',
                                                            'validate' => [
                                                                'required' => true
                                                            ]
                                                        ],
                                                        '.url' => [
                                                            'type' => 'text',
                                                            'label' => 'URL / Route'
                                                        ],
                                                        '.type' => [
                                                            'type' => 'select',
                                                            'label' => 'Link Type',
                                                            'default' => 'link',
                                                            'options' => [
                                                                'link' => 'Standard Link',
                                                                'mega' => 'Mega Menu',
                                                                'heading' => 'Heading',
                                                                'button' => 'Button',
                                                                'logo' => 'Logo'
                                                            ]
                                                        ],
                                                        '.mx_context' => [
                                                            'type' => 'text',
                                                            'label' => 'AI Description',
                                                            'help' => 'Description for autonomous retrieval systems.'
                                                        ],
                                                        '.design_token' => [
                                                            'type' => 'select',
                                                            'label' => 'Style',
                                                            'default' => 'default',
                                                            'options' => [
                                                                'default' => 'Neutral',
                                                                'primary' => 'Core Primary',
                                                                'accent' => 'High Accent',
                                                                'glass' => 'Refractive'
                                                            ]
                                                        ],
                                                        '.children' => [
                                                            'type' => 'list',
                                                            'label' => 'Sub-Menu Items',
                                                            'fields' => [
                                                                '.label' => [
                                                                    'type' => 'text',
                                                                    'label' => 'Label'
                                                                ],
                                                                '.url' => [
                                                                    'type' => 'text',
                                                                    'label' => 'URL'
                                                                ],
                                                                '.mx_context' => [
                                                                    'type' => 'text',
                                                                    'label' => 'AI Context'
                                                                ]
                                                            ]
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'nav_intelligence' => [
                                            'type' => 'tab',
                                            'title' => 'Navigation Menu',
                                            'fields' => [
                                                'agent_nav_nodes' => [
                                                    'type' => 'list',
                                                    'label' => 'Menu Tree',
                                                    'fields' => [
                                                        '.title' => [
                                                            'type' => 'text',
                                                            'label' => 'Node Title'
                                                        ],
                                                        '.type' => [
                                                            'type' => 'select',
                                                            'label' => 'Menu Type',
                                                            'default' => 'link',
                                                            'options' => [
                                                                'link' => 'Standard Link',
                                                                'smart' => 'Dynamic Collection',
                                                                'folder' => 'Dropdown Folder'
                                                            ]
                                                        ],
                                                        '.url' => [
                                                            'type' => 'text',
                                                            'label' => 'URI'
                                                        ],
                                                        '.collection_source' => [
                                                            'type' => 'select',
                                                            'label' => 'Page Source',
                                                            'default' => '@root.descendants',
                                                            'options' => [
                                                                '@root.descendants' => 'Global Manifest',
                                                                '@self.children' => 'Local Siblings',
                                                                '@self.descendants' => 'Local Descendants'
                                                            ]
                                                        ],
                                                        '.collection_type' => [
                                                            'type' => 'select',
                                                            'label' => 'Taxonomy Filter',
                                                            'default' => 'all',
                                                            'options' => [
                                                                'all' => 'Unfiltered',
                                                                'tag' => 'Tag Metadata',
                                                                'category' => 'Category Metadata',
                                                                'type' => 'Class Metadata'
                                                            ]
                                                        ],
                                                        '.collection_value' => [
                                                            'type' => 'text',
                                                            'label' => 'Filter Constant'
                                                        ],
                                                        '.collection_limit' => [
                                                            'type' => 'number',
                                                            'label' => 'Limit',
                                                            'default' => 5
                                                        ]
                                                    ]
                                                ]
                                            ]
                                        ],
                                        'footer_assembly' => [
                                            'type' => 'tab',
                                            'title' => 'Footer Builder',
                                            'fields' => [
                                                'agent_footer_widgets' => [
                                                    'type' => 'list',
                                                    'label' => 'Footer Widgets',
                                                    'fields' => [
                                                        '.width' => [
                                                            'type' => 'select',
                                                            'label' => 'Column Width',
                                                            'default' => 'col-4',
                                                            'options' => [
                                                                'col-3' => '25% (3/12)',
                                                                'col-4' => '33% (4/12)',
                                                                'col-6' => '50% (6/12)',
                                                                'col-12' => '100% (Full)'
                                                            ]
                                                        ],
                                                        '.type' => [
                                                            'type' => 'select',
                                                            'label' => 'Widget Type',
                                                            'options' => [
                                                                'branding' => 'Website Branding',
                                                                'menu' => 'Navigation Menu',
                                                                'contact' => 'Contact Info',
                                                                'social' => 'Social Media Links',
                                                                'newsletter' => 'Newsletter Signup',
                                                                'html' => 'Custom HTML'
                                                            ]
                                                        ],
                                                        '.title' => [
                                                            'type' => 'text',
                                                            'label' => 'Widget Title'
                                                        ],
                                                        '.help' => [
                                                            'type' => 'display',
                                                            'content' => '<strong>Note:</strong> Select \'Social Networks\' to display the icons defined in the <em>GLOBAL IDENTITY</em> tab.'
                                                        ],
                                                        '.content' => [
                                                            'type' => 'textarea',
                                                            'label' => 'Raw Content'
                                                        ],
                                                        '.ai_badge' => [
                                                            'type' => 'toggle',
                                                            'label' => 'Show AI Badge',
                                                            'default' => 0
                                                        ],
                                                        '.animation' => [
                                                            'type' => 'select',
                                                            'label' => 'Animation',
                                                            'default' => 'fadeUp',
                                                            'options' => [
                                                                'none' => 'None',
                                                                'fadeUp' => 'Fade Up',
                                                                'fadeDown' => 'Fade Down',
                                                                'slideLeft' => 'Slide Left',
                                                                'slideRight' => 'Slide Right',
                                                                'zoomIn' => 'Zoom In'
                                                            ]
                                                        ]
                                                    ]
                                                ],
                                                'footer_dna' => [
                                                    'type' => 'section',
                                                    'title' => 'Footer Design',
                                                    'underline' => true
                                                ],
                                                'agent_footer_color_bg' => [
                                                    'type' => 'color',
                                                    'label' => 'Atmosphere Background',
                                                    'default' => '#0f0f10'
                                                ],
                                                'agent_footer_color_text' => [
                                                    'type' => 'color',
                                                    'label' => 'Contrast Text',
                                                    'default' => '#ffffff'
                                                ],
                                                'agent_footer_color_accent' => [
                                                    'type' => 'color',
                                                    'label' => 'High Focus Token',
                                                    'default' => '#d4af37'
                                                ],
                                                'agent_footer_sticky' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Positional Stickiness',
                                                    'default' => 1,
                                                    'options' => [
                                                        1 => 'PLUGIN_ADMIN.ENABLED',
                                                        0 => 'PLUGIN_ADMIN.DISABLED'
                                                    ]
                                                ],
                                                'agent_footer_legal_copy' => [
                                                    'type' => 'textarea',
                                                    'label' => 'Governance Rights',
                                                    'default' => '&copy; 2026 Semantic OS. All rights reserved.'
                                                ],
                                                'agent_footer_legal_credits' => [
                                                    'type' => 'text',
                                                    'label' => 'Origin Credits',
                                                    'default' => 'Architected by Antigravity'
                                                ]
                                            ]
                                        ],
                                        'environment_engine' => [
                                            'type' => 'tab',
                                            'title' => 'Background Builder',
                                            'fields' => [
                                                'agent_env_mode' => [
                                                    'type' => 'toggle',
                                                    'label' => 'Background Style',
                                                    'default' => 0,
                                                    'highlight' => 1,
                                                    'options' => [
                                                        0 => 'Solid',
                                                        1 => 'Gradient',
                                                        2 => 'Image',
                                                        3 => 'Mesh',
                                                        4 => 'Pattern'
                                                    ],
                                                    'validate' => [
                                                        'type' => 'int'
                                                    ]
                                                ],
                                                'agent_env_tabs' => [
                                                    'type' => 'tabs',
                                                    'active' => 1,
                                                    'fields' => [
                                                        'solid_tab' => [
                                                            'type' => 'tab',
                                                            'title' => 'Solid Hue',
                                                            'fields' => [
                                                                'agent_env_solid_col' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Background Color',
                                                                    'default' => '#ffffff'
                                                                ]
                                                            ]
                                                        ],
                                                        'gradient_tab' => [
                                                            'type' => 'tab',
                                                            'title' => 'Linear Blend',
                                                            'fields' => [
                                                                'agent_env_grad_type' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Vector Type',
                                                                    'default' => 'linear',
                                                                    'options' => [
                                                                        'linear' => 'Directional',
                                                                        'radial' => 'Spherical'
                                                                    ]
                                                                ],
                                                                'agent_env_grad_angle' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Projection Angle',
                                                                    'default' => 135,
                                                                    'min' => 0,
                                                                    'max' => 360,
                                                                    'step' => 5,
                                                                    'append' => 'deg'
                                                                ],
                                                                'agent_env_grad_start' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Start Color',
                                                                    'default' => '#3b4252'
                                                                ],
                                                                'agent_env_grad_end' => [
                                                                    'type' => 'color',
                                                                    'label' => 'End Color',
                                                                    'default' => '#88c0d0'
                                                                ]
                                                            ]
                                                        ],
                                                        'image_tab' => [
                                                            'type' => 'tab',
                                                            'title' => 'Background Image',
                                                            'fields' => [
                                                                'agent_env_img' => [
                                                                    'type' => 'file',
                                                                    'label' => 'Select Image',
                                                                    'destination' => 'theme://images/backgrounds',
                                                                    'multiple' => false,
                                                                    'accept' => [
                                                                        0 => 'image/*'
                                                                    ]
                                                                ],
                                                                'agent_env_img_pos' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Focal Point',
                                                                    'default' => 'center center',
                                                                    'options' => [
                                                                        'center center' => 'Equator',
                                                                        'top center' => 'Zenith',
                                                                        'bottom center' => 'Nadir'
                                                                    ]
                                                                ],
                                                                'agent_env_img_size' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Geometric Scale',
                                                                    'default' => 'cover',
                                                                    'options' => [
                                                                        'cover' => 'Full Stretch',
                                                                        'contain' => 'Preserve Aspect',
                                                                        'auto' => 'True Scale'
                                                                    ]
                                                                ],
                                                                'agent_env_img_attach' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Motion Protocol',
                                                                    'default' => 'fixed',
                                                                    'options' => [
                                                                        'fixed' => 'Spatial Parallax',
                                                                        'scroll' => 'Standard Fluid'
                                                                    ]
                                                                ],
                                                                'agent_env_img_overlay' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Tint Layer',
                                                                    'default' => '#000000'
                                                                ],
                                                                'agent_env_img_op' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Layer Depth',
                                                                    'default' => 0.3,
                                                                    'min' => 0,
                                                                    'max' => 1,
                                                                    'step' => 0.1
                                                                ]
                                                            ]
                                                        ],
                                                        'mesh_tab' => [
                                                            'type' => 'tab',
                                                            'title' => 'Animated Mesh',
                                                            'fields' => [
                                                                'agent_env_mesh_1' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Mesh Color 1',
                                                                    'default' => '#3b4252'
                                                                ],
                                                                'agent_env_mesh_2' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Mesh Color 2',
                                                                    'default' => '#bf616a'
                                                                ],
                                                                'agent_env_mesh_3' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Mesh Color 3',
                                                                    'default' => '#88c0d0'
                                                                ],
                                                                'agent_env_mesh_speed' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Animation Speed',
                                                                    'default' => 20,
                                                                    'min' => 5,
                                                                    'max' => 60,
                                                                    'step' => 5
                                                                ]
                                                            ]
                                                        ],
                                                        'pattern_tab' => [
                                                            'type' => 'tab',
                                                            'title' => 'Semantic Texture',
                                                            'fields' => [
                                                                'agent_env_tex' => [
                                                                    'type' => 'select',
                                                                    'label' => 'Mathematical Pattern',
                                                                    'default' => 'none',
                                                                    'options' => [
                                                                        'none' => 'Null',
                                                                        'noise' => 'Perlin Noise',
                                                                        'dots' => 'Point Grid',
                                                                        'grid' => 'Cartesian',
                                                                        'lines' => 'Linear Segments'
                                                                    ]
                                                                ],
                                                                'agent_env_tex_col' => [
                                                                    'type' => 'color',
                                                                    'label' => 'Trace Color',
                                                                    'default' => '#000000'
                                                                ],
                                                                'agent_env_tex_op' => [
                                                                    'type' => 'range',
                                                                    'label' => 'Trace Intensity',
                                                                    'default' => 0.05,
                                                                    'min' => 0.01,
                                                                    'max' => 0.2,
                                                                    'step' => 0.01
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
                        ],
                        'global_identity_tab' => [
                            'type' => 'tab',
                            'title' => 'BRAND IDENTITY',
                            'fields' => [
                                'identity_section' => [
                                    'type' => 'section',
                                    'title' => 'Branding',
                                    'underline' => true
                                ],
                                'agent_identity_logo' => [
                                    'type' => 'file',
                                    'label' => 'Website Logo',
                                    'destination' => 'theme://images/logo',
                                    'multiple' => false,
                                    'accept' => [
                                        0 => 'image/*'
                                    ]
                                ],
                                'agent_identity_brandName' => [
                                    'type' => 'text',
                                    'label' => 'Website Name'
                                ],
                                'agent_identity_showText' => [
                                    'type' => 'toggle',
                                    'label' => 'Display Semantic Identifier',
                                    'default' => 0,
                                    'options' => [
                                        1 => 'ENABLED',
                                        0 => 'DISABLED'
                                    ]
                                ],
                                'contact_manifest' => [
                                    'type' => 'section',
                                    'title' => 'Contact Information',
                                    'underline' => true
                                ],
                                'agent_identity_address' => [
                                    'type' => 'text',
                                    'label' => 'Address'
                                ],
                                'agent_identity_email' => [
                                    'type' => 'text',
                                    'label' => 'Email Address'
                                ],
                                'agent_identity_phone' => [
                                    'type' => 'text',
                                    'label' => 'Phone Number'
                                ],
                                'social_topology' => [
                                    'type' => 'section',
                                    'title' => 'Social Media',
                                    'underline' => true
                                ],
                                'agent_identity_social' => [
                                    'type' => 'list',
                                    'label' => 'Social Media Links',
                                    'help' => 'Define your networks here to use them in Footer or Header builders.',
                                    'fields' => [
                                        '.network' => [
                                            'type' => 'select',
                                            'label' => 'Platform',
                                            'options' => [
                                                'facebook' => 'FB',
                                                'twitter' => 'X',
                                                'instagram' => 'IG',
                                                'linkedin' => 'LI',
                                                'youtube' => 'YT',
                                                'github' => 'GH',
                                                'googlemaps' => 'Maps'
                                            ]
                                        ],
                                        '.url' => [
                                            'type' => 'text',
                                            'label' => 'Destination URI'
                                        ]
                                    ]
                                ]
                            ]
                        ],
                        'governance_tab' => [
                            'type' => 'tab',
                            'title' => 'SITE GOVERNANCE',
                            'fields' => [
                                'performance_section' => [
                                    'type' => 'section',
                                    'title' => 'Performance Pipelines',
                                    'underline' => true
                                ],
                                'agent_gov_production' => [
                                    'type' => 'toggle',
                                    'label' => 'Optimal Asset Compression',
                                    'default' => 1,
                                    'options' => [
                                        1 => 'PRODUCTION',
                                        0 => 'DEVELOPMENT'
                                    ]
                                ],
                                'agent_gov_gridSize' => [
                                    'type' => 'select',
                                    'label' => 'Layout Grid Class',
                                    'default' => 'grid-xl',
                                    'options' => [
                                        'grid-lg' => 'Large',
                                        'grid-xl' => 'Extra Large'
                                    ]
                                ],
                                'accessibility_section' => [
                                    'type' => 'section',
                                    'title' => 'Sustainability & Guidelines',
                                    'underline' => true
                                ],
                                'agent_gov_ecoDefault' => [
                                    'type' => 'toggle',
                                    'label' => 'Force Lower Complexity (Eco)',
                                    'default' => 0,
                                    'help' => 'Forces the eco-mode protocol globally.'
                                ],
                                'agent_gov_privacyShield' => [
                                    'type' => 'toggle',
                                    'label' => 'Enhanced Privacy Sovereignty',
                                    'default' => 1,
                                    'help' => 'Strips third-party trackers and enforces locally-hosted logic.'
                                ],
                                'agent_gov_haptics' => [
                                    'type' => 'toggle',
                                    'label' => 'Tactile Pulse (Haptics)',
                                    'default' => 0,
                                    'help' => 'Global haptic feedback for user interactions.'
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
