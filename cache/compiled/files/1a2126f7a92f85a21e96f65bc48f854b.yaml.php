<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => 'themes://ngo-theme/ngo-theme.yaml',
    'modified' => 1767917806,
    'size' => 4280,
    'data' => [
        'enabled' => true,
        'production-mode' => true,
        'grid-size' => 'grid-lg',
        'header-fixed' => true,
        'header-animated' => true,
        'header-dark' => false,
        'header-transparent' => false,
        'sticky-footer' => true,
        'blog-page' => '/blog',
        'sustainability_score' => 'A+',
        'co2_per_view' => '0.3g',
        'ai_disclosure' => true,
        'ai_assistant' => true,
        'focus_mode' => false,
        'doodle_engine' => true,
        'bionic_mode' => false,
        'eco_mode' => false,
        'footer_about_title' => 'About Our Mission',
        'footer_mission' => 'Faith. Knowledge. Access.',
        'contact_address' => '123 Main St, City, Country',
        'contact_email' => 'info@example.org',
        'contact_phone' => '+1 234 567 8900',
        'contact_whatsapp' => '923001234567',
        'project_timeline_list' => [
            0 => [
                'title' => 'Clean Water Initiative',
                'description' => 'Installing filtration plants in rural Sindh.',
                'goal' => '$15,000',
                'raised' => '$12,400',
                'percent' => 82,
                'status' => 'active'
            ],
            1 => [
                'title' => 'Ramadan Ration Pack',
                'description' => 'Distributing food to 500 families.',
                'goal' => '$25,000',
                'raised' => '$5,000',
                'percent' => 20,
                'status' => 'active'
            ]
        ],
        'inspiration_text' => '"Indeed, with hardship [will be] ease."',
        'inspiration_source' => 'Quran 94:6',
        'prayer_times_enabled' => true,
        'hijri_adjustment' => 0,
        'khums_title' => 'Khums Calculator',
        'khums_description' => 'Calculate your religious liability based on annual savings and assets.',
        'khums_result_label' => 'Estimated Khums (1/5th)',
        'khums_info_tooltip' => 'Khums is 20% of your annual surplus.',
        'khums_rate' => 20,
        'khums_currency' => '$',
        'utility_hijri_toggle' => true,
        'utility_prayer_toggle' => true,
        'utility_prayer_city' => 'Karachi',
        'utility_language_toggle' => true,
        'utility_accessibility_toggle' => true,
        'hero_glass_opacity' => 60,
        'hero_primary_cta_text' => 'Explore Services',
        'hero_primary_cta_link' => '/services',
        'hero_secondary_cta_text' => 'Support Our Mission',
        'hero_secondary_cta_link' => '/donate',
        'services_list' => [
            0 => [
                'icon' => 'balance-scale',
                'title' => 'Religious Audits',
                'description' => 'Comprehensive review of business structures, contracts, and financial ethics.',
                'link' => '/services/audits'
            ],
            1 => [
                'icon' => 'search-plus',
                'title' => 'Personal Istikhara',
                'description' => 'Seek spiritual guidance for major life decisions.',
                'link' => '/services/istikhara'
            ],
            2 => [
                'icon' => 'users',
                'title' => 'Family Counseling',
                'description' => 'Empathetic support rooted in traditional wisdom.',
                'link' => '/services/counseling'
            ]
        ],
        'testimonials_list' => [
            0 => [
                'name' => 'Sara Ahmed',
                'role' => 'Scholarship Recipient',
                'quote' => 'This organization changed my life by funding my education.',
                'video_url' => '#'
            ],
            1 => [
                'name' => 'Ali Raza',
                'role' => 'Donor',
                'quote' => 'Transparency and impact are why I trust them with my Khums.'
            ]
        ],
        'events_list' => [
            0 => [
                'title' => 'Annual Majlis-e-Aza',
                'date' => '2026-03-10 19:00',
                'location' => 'Main Hall, Karachi',
                'url' => '#',
                'type' => 'Religious'
            ],
            1 => [
                'title' => 'Youth Seminar: AIM in 2026',
                'date' => '2026-04-15 10:00',
                'location' => 'Zoom Webinar',
                'url' => '#',
                'type' => 'Webinar'
            ]
        ],
        'cta_button' => [
            'enabled' => true,
            'text' => 'Student Portal',
            'url' => 'https://moodle.aabtaab.com',
            'icon' => 'user-graduate',
            'external' => true
        ],
        'student_login_title' => 'Student Login',
        'student_login_description' => 'Access your Moodle courses and dashboard.',
        'student_login_button_text' => 'Sign In to Portal',
        'featured_courses_list' => [
            0 => [
                'title' => 'Islamic Ethics in Business',
                'instructor' => 'Dr. A. Rahman',
                'url' => '#'
            ],
            1 => [
                'title' => 'Fiqh of Zakat',
                'instructor' => 'Mufti S. Ahmed',
                'url' => '#'
            ],
            2 => [
                'title' => 'Introduction to Quranic Arabic',
                'instructor' => 'Ustadha F. Khan',
                'url' => '#'
            ]
        ],
        'products_list' => [
            0 => [
                'title' => 'Sahifa Sajjadiya (Premium)',
                'price' => '$25.00',
                'type' => 'physical',
                'url' => '#'
            ],
            1 => [
                'title' => 'Fiqh Guide PDF',
                'price' => '$5.00',
                'type' => 'digital',
                'url' => '#'
            ]
        ],
        'trust_signals_images' => [
            0 => [
                'name' => 'Stripe',
                'image' => 'theme://images/badges/stripe.png'
            ],
            1 => [
                'name' => 'SSL Secure',
                'image' => 'theme://images/badges/ssl.png'
            ]
        ],
        'faq_list' => [
            0 => [
                'q' => 'How do I pay Khums online?',
                'a' => 'Use our calculator and proceed to Stripe checkout.'
            ],
            1 => [
                'q' => 'Is my donation tax deductible?',
                'a' => 'Yes, we are a registered non-profit.'
            ]
        ]
    ]
];
