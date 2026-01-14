<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1768344561,
    'checksum' => '4acc1ff89ae2860b993af8faba6cc9bf',
    'files' => [
        'system/blueprints/config' => [
            'backups' => [
                'file' => 'system/blueprints/config/backups.yaml',
                'modified' => 1767934750
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1767934750
            ],
            'scheduler' => [
                'file' => 'system/blueprints/config/scheduler.yaml',
                'modified' => 1767934750
            ],
            'security' => [
                'file' => 'system/blueprints/config/security.yaml',
                'modified' => 1767934750
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1767934750
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1767934750
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1767934750
            ]
        ],
        'user/plugins' => [
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/blueprints.yaml',
                'modified' => 1767934750
            ],
            'plugins/pagination' => [
                'file' => 'user/plugins/pagination/blueprints.yaml',
                'modified' => 1707084214
            ],
            'plugins/form' => [
                'file' => 'user/plugins/form/blueprints.yaml',
                'modified' => 1766923054
            ],
            'plugins/flex-objects' => [
                'file' => 'user/plugins/flex-objects/blueprints.yaml',
                'modified' => 1764496350
            ],
            'plugins/relatedpages' => [
                'file' => 'user/plugins/relatedpages/blueprints.yaml',
                'modified' => 1691710516
            ],
            'plugins/tntsearch' => [
                'file' => 'user/plugins/tntsearch/blueprints.yaml',
                'modified' => 1728001206
            ],
            'plugins/admin' => [
                'file' => 'user/plugins/admin/blueprints.yaml',
                'modified' => 1766978626
            ],
            'plugins/sitemap' => [
                'file' => 'user/plugins/sitemap/blueprints.yaml',
                'modified' => 1718603524
            ],
            'plugins/problems' => [
                'file' => 'user/plugins/problems/blueprints.yaml',
                'modified' => 1767934750
            ],
            'plugins/archives' => [
                'file' => 'user/plugins/archives/blueprints.yaml',
                'modified' => 1715813008
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1695707474
            ],
            'plugins/shortcode-core' => [
                'file' => 'user/plugins/shortcode-core/blueprints.yaml',
                'modified' => 1766488580
            ],
            'plugins/seo' => [
                'file' => 'user/plugins/seo/blueprints.yaml',
                'modified' => 1536888544
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1767934750
            ],
            'plugins/breadcrumbs' => [
                'file' => 'user/plugins/breadcrumbs/blueprints.yaml',
                'modified' => 1658743204
            ],
            'plugins/login' => [
                'file' => 'user/plugins/login/blueprints.yaml',
                'modified' => 1762876912
            ],
            'plugins/email' => [
                'file' => 'user/plugins/email/blueprints.yaml',
                'modified' => 1765351098
            ],
            'plugins/taxonomylist' => [
                'file' => 'user/plugins/taxonomylist/blueprints.yaml',
                'modified' => 1736125930
            ]
        ],
        'user/themes' => [
            'themes/nur-ul-huda' => [
                'file' => 'user/themes/nur-ul-huda/blueprints.yaml',
                'modified' => 1768344512
            ]
        ]
    ],
    'data' => [
        'items' => [
            'backups' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'backups.history' => [
                'type' => 'backupshistory',
                'name' => 'backups.history',
                'validation' => 'loose'
            ],
            'backups.purge' => [
                'type' => '_parent',
                'name' => 'backups.purge',
                'form_field' => false
            ],
            'backups.purge.trigger' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_STORAGE_PURGE_TRIGGER',
                'size' => 'medium',
                'default' => 'space',
                'options' => [
                    'space' => 'Maximum Backup Space',
                    'number' => 'Maximum Number of Backups',
                    'time' => 'maximum Retention Time'
                ],
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.purge.trigger',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_count' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_COUNT',
                'default' => 25,
                'size' => 'x-small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Must be a number 0 or greater'
                ],
                'name' => 'backups.purge.max_backups_count',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_space' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_SPACE',
                'append' => 'in GB',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'min' => 1,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Space must be 1GB or greater'
                ],
                'name' => 'backups.purge.max_backups_space',
                'validation' => 'loose'
            ],
            'backups.purge.max_backups_time' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME',
                'append' => 'PLUGIN_ADMIN.BACKUPS_MAX_RETENTION_TIME_APPEND',
                'size' => 'x-small',
                'default' => 365,
                'validate' => [
                    'min' => 7,
                    'type' => 'number',
                    'required' => true,
                    'message' => 'Rentenion days must be 7 or greater'
                ],
                'name' => 'backups.purge.max_backups_time',
                'validation' => 'loose'
            ],
            'backups.profiles' => [
                'array' => true,
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'backups-list compact',
                'sort' => false,
                'name' => 'backups.profiles',
                'validation' => 'loose'
            ],
            'backups.profiles.*' => [
                'type' => '_parent',
                'name' => 'backups.profiles.*',
                'form_field' => false
            ],
            'backups.profiles.*.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.NAME',
                'validate' => [
                    'max' => 20,
                    'message' => 'Name must be less than 20 characters',
                    'required' => true
                ],
                'name' => 'backups.profiles.*.name',
                'validation' => 'loose'
            ],
            'backups.profiles.*.root' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER',
                'default' => '/',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.*.root',
                'validation' => 'loose'
            ],
            'backups.profiles.*.exclude_paths' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS',
                'rows' => 5,
                'name' => 'backups.profiles.*.exclude_paths',
                'validation' => 'loose'
            ],
            'backups.profiles.*.exclude_files' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES',
                'rows' => 5,
                'name' => 'backups.profiles.*.exclude_files',
                'validation' => 'loose'
            ],
            'backups.profiles.*.schedule' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'backups.profiles.*.schedule',
                'validation' => 'loose'
            ],
            'backups.profiles.*.schedule_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE_AT',
                'default' => '* 3 * * *',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.*.schedule_at',
                'validation' => 'loose'
            ],
            'backups.profiles.*.schedule_environment' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ENVIRONMENT',
                'default' => '',
                'options' => [
                    '' => 'Default (cli)',
                    'localhost' => 'Localhost',
                    'cli' => 'CLI'
                ],
                'name' => 'backups.profiles.*.schedule_environment',
                'validation' => 'loose'
            ],
            'media' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'scheduler' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'scheduler.status' => [
                'type' => 'cronstatus',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'scheduler.status',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs' => [
                'array' => true,
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'cron-job-list compact',
                'key' => 'id',
                'name' => 'scheduler.custom_jobs',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*' => [
                'type' => '_parent',
                'name' => 'scheduler.custom_jobs.*',
                'form_field' => false
            ],
            'scheduler.custom_jobs.*.command' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.COMMAND',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.*.command',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.args' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.EXTRA_ARGUMENTS',
                'name' => 'scheduler.custom_jobs.*.args',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.at' => [
                'type' => 'text',
                'wrapper_classes' => 'cron-selector',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.*.at',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.output' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT',
                'name' => 'scheduler.custom_jobs.*.output',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.output_mode' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE',
                'default' => 'append',
                'options' => [
                    'append' => 'Append',
                    'overwrite' => 'Overwrite'
                ],
                'name' => 'scheduler.custom_jobs.*.output_mode',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.*.email' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL',
                'name' => 'scheduler.custom_jobs.*.email',
                'validation' => 'loose'
            ],
            'scheduler.modern' => [
                'type' => '_parent',
                'name' => 'scheduler.modern',
                'form_field' => false
            ],
            'scheduler.modern.workers' => [
                'type' => 'number',
                'label' => 'Concurrent Workers',
                'default' => 4,
                'size' => 'x-small',
                'append' => 'workers',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 10
                ],
                'name' => 'scheduler.modern.workers',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.retry',
                'form_field' => false
            ],
            'scheduler.modern.retry.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Job Retry',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.retry.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry.max_attempts' => [
                'type' => 'number',
                'label' => 'Maximum Retry Attempts',
                'default' => 3,
                'size' => 'x-small',
                'append' => 'retries',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 10
                ],
                'name' => 'scheduler.modern.retry.max_attempts',
                'validation' => 'loose'
            ],
            'scheduler.modern.retry.backoff' => [
                'type' => 'select',
                'label' => 'Retry Backoff Strategy',
                'default' => 'exponential',
                'options' => [
                    'linear' => 'Linear (fixed delay)',
                    'exponential' => 'Exponential (increasing delay)'
                ],
                'name' => 'scheduler.modern.retry.backoff',
                'validation' => 'loose'
            ],
            'scheduler.modern.queue' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.queue',
                'form_field' => false
            ],
            'scheduler.modern.queue.path' => [
                'type' => 'text',
                'label' => 'Queue Storage Path',
                'default' => 'user-data://scheduler/queue',
                'name' => 'scheduler.modern.queue.path',
                'validation' => 'loose'
            ],
            'scheduler.modern.queue.max_size' => [
                'type' => 'number',
                'label' => 'Maximum Queue Size',
                'default' => 1000,
                'size' => 'x-small',
                'append' => 'jobs',
                'validate' => [
                    'type' => 'int',
                    'min' => 100,
                    'max' => 10000
                ],
                'name' => 'scheduler.modern.queue.max_size',
                'validation' => 'loose'
            ],
            'scheduler.modern.history' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.history',
                'form_field' => false
            ],
            'scheduler.modern.history.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Job History',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.history.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.history.retention_days' => [
                'type' => 'number',
                'label' => 'History Retention (days)',
                'default' => 30,
                'size' => 'x-small',
                'append' => 'days',
                'validate' => [
                    'type' => 'int',
                    'min' => 1,
                    'max' => 365
                ],
                'name' => 'scheduler.modern.history.retention_days',
                'validation' => 'loose'
            ],
            'scheduler.webhook_plugin_status' => [
                'type' => 'webhook-status',
                'label' => NULL,
                'name' => 'scheduler.webhook_plugin_status',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.webhook',
                'form_field' => false
            ],
            'scheduler.modern.webhook.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Webhook Triggers',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.webhook.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook.token' => [
                'type' => 'text',
                'label' => 'Webhook Security Token',
                'autocomplete' => 'off',
                'name' => 'scheduler.modern.webhook.token',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook.path' => [
                'type' => 'text',
                'label' => 'Webhook Path',
                'default' => '/scheduler/webhook',
                'name' => 'scheduler.modern.webhook.path',
                'validation' => 'loose'
            ],
            'scheduler.modern.health' => [
                'type' => '_parent',
                'name' => 'scheduler.modern.health',
                'form_field' => false
            ],
            'scheduler.modern.health.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Health Check',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'scheduler.modern.health.enabled',
                'validation' => 'loose'
            ],
            'scheduler.modern.health.path' => [
                'type' => 'text',
                'label' => 'Health Check Path',
                'default' => '/scheduler/health',
                'name' => 'scheduler.modern.health.path',
                'validation' => 'loose'
            ],
            'security' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'security.xss_whitelist' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_WHITELIST_PERMISSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_whitelist',
                'validation' => 'loose'
            ],
            'security.xss_enabled' => [
                'type' => '_parent',
                'name' => 'security.xss_enabled',
                'form_field' => false
            ],
            'security.xss_enabled.on_events' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_ON_EVENTS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.on_events',
                'validation' => 'loose'
            ],
            'security.xss_enabled.invalid_protocols' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_invalid_protocols' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_INVALID_PROTOCOLS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_invalid_protocols',
                'validation' => 'loose'
            ],
            'security.xss_enabled.moz_binding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_MOZ_BINDINGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.moz_binding',
                'validation' => 'loose'
            ],
            'security.xss_enabled.html_inline_styles' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_HTML_INLINE_STYLES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.html_inline_styles',
                'validation' => 'loose'
            ],
            'security.xss_enabled.dangerous_tags' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.xss_enabled.dangerous_tags',
                'validation' => 'loose'
            ],
            'security.xss_dangerous_tags' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.XSS_DANGEROUS_TAGS_LIST',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.xss_dangerous_tags',
                'validation' => 'loose'
            ],
            'security.uploads_dangerous_extensions' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.UPLOADS_DANGEROUS_EXTENSIONS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'security.uploads_dangerous_extensions',
                'validation' => 'loose'
            ],
            'security.sanitize_svg' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SANITIZE_SVG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'security.sanitize_svg',
                'validation' => 'loose'
            ],
            'site' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'site.title' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_TITLE',
                'size' => 'large',
                'name' => 'site.title',
                'validation' => 'loose'
            ],
            'site.default_lang' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SITE_DEFAULT_LANG',
                'size' => 'x-small',
                'name' => 'site.default_lang',
                'validation' => 'loose'
            ],
            'site.author' => [
                'type' => '_parent',
                'name' => 'site.author',
                'form_field' => false
            ],
            'site.author.name' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_AUTHOR',
                'name' => 'site.author.name',
                'validation' => 'loose'
            ],
            'site.author.email' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.DEFAULT_EMAIL',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'site.author.email',
                'validation' => 'loose'
            ],
            'site.taxonomies' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.TAXONOMY_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'site.taxonomies',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => '_parent',
                'name' => 'site.summary',
                'form_field' => false
            ],
            'site.summary.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'site.summary.enabled',
                'validation' => 'loose'
            ],
            'site.summary.size' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'PLUGIN_ADMIN.CHARACTERS',
                'label' => 'PLUGIN_ADMIN.SUMMARY_SIZE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'site.summary.size',
                'validation' => 'loose'
            ],
            'site.summary.format' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORMAT',
                'classes' => 'fancy',
                'highlight' => 'short',
                'options' => [
                    'short' => 'PLUGIN_ADMIN.SHORT',
                    'long' => 'PLUGIN_ADMIN.LONG'
                ],
                'name' => 'site.summary.format',
                'validation' => 'loose'
            ],
            'site.summary.delimiter' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DELIMITER',
                'name' => 'site.summary.delimiter',
                'validation' => 'loose'
            ],
            'site.metadata' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.METADATA',
                'name' => 'site.metadata',
                'validation' => 'loose'
            ],
            'site.redirects' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_REDIRECTS',
                'name' => 'site.redirects',
                'validation' => 'loose'
            ],
            'site.routes' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.CUSTOM_ROUTES',
                'name' => 'site.routes',
                'validation' => 'loose'
            ],
            'streams' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose',
                    'hidden' => true
                ]
            ],
            'streams.schemes' => [
                'type' => '_parent',
                'name' => 'streams.schemes',
                'form_field' => false
            ],
            'streams.schemes.xxx' => [
                'type' => 'array',
                'name' => 'streams.schemes.xxx',
                'validation' => 'loose'
            ],
            'system' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'system.home' => [
                'type' => '_parent',
                'name' => 'system.home',
                'form_field' => false
            ],
            'system.home.alias' => [
                'type' => 'pages',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.HOME_PAGE',
                'show_all' => false,
                'show_modular' => false,
                'show_root' => false,
                'show_slug' => true,
                'name' => 'system.home.alias',
                'validation' => 'loose'
            ],
            'system.home.hide_in_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_HOME_IN_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.home.hide_in_urls',
                'validation' => 'loose'
            ],
            'system.pages' => [
                'type' => '_parent',
                'name' => 'system.pages',
                'form_field' => false
            ],
            'system.pages.theme' => [
                'type' => 'themeselect',
                'classes' => 'fancy',
                'selectize' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.DEFAULT_THEME',
                'name' => 'system.pages.theme',
                'validation' => 'loose'
            ],
            'system.pages.process' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.PROCESS',
                'default' => [
                    0 => [
                        'markdown' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'markdown' => 'Markdown',
                    'twig' => 'Twig'
                ],
                'use' => 'keys',
                'name' => 'system.pages.process',
                'validation' => 'loose'
            ],
            'system.pages.types' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.PAGE_TYPES',
                'size' => 'small',
                'default' => [
                    0 => 'html',
                    1 => 'htm',
                    2 => 'json',
                    3 => 'xml',
                    4 => 'txt',
                    5 => 'rss',
                    6 => 'atom'
                ],
                'value_only' => true,
                'name' => 'system.pages.types',
                'validation' => 'loose'
            ],
            'system.timezone' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.TIMEZONE',
                'size' => 'medium',
                'classes' => 'fancy',
                'data-options@' => '\\Grav\\Common\\Utils::timezones',
                'default' => '',
                'options' => [
                    '' => 'Default (Server Timezone)'
                ],
                'name' => 'system.timezone',
                'validation' => 'loose'
            ],
            'system.pages.dateformat' => [
                'type' => '_parent',
                'name' => 'system.pages.dateformat',
                'form_field' => false
            ],
            'system.pages.dateformat.default' => [
                'type' => 'select',
                'size' => 'medium',
                'selectize' => [
                    'create' => true
                ],
                'label' => 'PLUGIN_ADMIN.DEFAULT_DATE_FORMAT',
                'data-options@' => '\\Grav\\Common\\Utils::dateFormats',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'system.pages.dateformat.default',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.short' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SHORT_DATE_FORMAT',
                'default' => 'jS M Y',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5',
                    'Y-m-d G:i' => 'Date6'
                ],
                'name' => 'system.pages.dateformat.short',
                'validation' => 'loose'
            ],
            'system.pages.dateformat.long' => [
                'type' => 'dateformat',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.LONG_DATE_FORMAT',
                'options' => [
                    'F jS \\a\\t g:ia' => 'Date1',
                    'l jS \\of F g:i A' => 'Date2',
                    'D, d M Y G:i:s' => 'Date3',
                    'd-m-y G:i' => 'Date4',
                    'jS M Y' => 'Date5',
                    'Y-m-d G:i:s' => 'Date6'
                ],
                'name' => 'system.pages.dateformat.long',
                'validation' => 'loose'
            ],
            'system.pages.order' => [
                'type' => '_parent',
                'name' => 'system.pages.order',
                'form_field' => false
            ],
            'system.pages.order.by' => [
                'type' => 'select',
                'size' => 'large',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'system.pages.order.by',
                'validation' => 'loose'
            ],
            'system.pages.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'system.pages.order.dir',
                'validation' => 'loose'
            ],
            'system.pages.list' => [
                'type' => '_parent',
                'name' => 'system.pages.list',
                'form_field' => false
            ],
            'system.pages.list.count' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PAGES',
                'label' => 'PLUGIN_ADMIN.DEFAULT_PAGE_COUNT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.list.count',
                'validation' => 'loose'
            ],
            'system.pages.publish_dates' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DATE_BASED_PUBLISHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.publish_dates',
                'validation' => 'loose'
            ],
            'system.pages.events' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_ADMIN.EVENTS',
                'default' => [
                    0 => [
                        'page' => true
                    ],
                    1 => [
                        'twig' => true
                    ]
                ],
                'options' => [
                    'page' => 'Page Events',
                    'twig' => 'Twig Events'
                ],
                'use' => 'keys',
                'name' => 'system.pages.events',
                'validation' => 'loose'
            ],
            'system.pages.append_url_extension' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.APPEND_URL_EXT',
                'name' => 'system.pages.append_url_extension',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_code' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_CODE',
                'default' => 302,
                'options' => [
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302',
                    303 => 'PLUGIN_ADMIN.REDIRECT_OPTION_303'
                ],
                'name' => 'system.pages.redirect_default_code',
                'validation' => 'loose'
            ],
            'system.pages.redirect_default_route' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_DEFAULT_ROUTE',
                'default' => 0,
                'options' => [
                    0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                    1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.pages.redirect_default_route',
                'validation' => 'loose'
            ],
            'system.pages.redirect_trailing_slash' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.REDIRECT_TRAILING_SLASH',
                'default' => 1,
                'options' => [
                    0 => 'PLUGIN_ADMIN.REDIRECT_OPTION_NO_REDIRECT',
                    1 => 'PLUGIN_ADMIN.REDIRECT_OPTION_DEFAULT_REDIRECT',
                    301 => 'PLUGIN_ADMIN.REDIRECT_OPTION_301',
                    302 => 'PLUGIN_ADMIN.REDIRECT_OPTION_302'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.pages.redirect_trailing_slash',
                'validation' => 'loose'
            ],
            'system.pages.ignore_hidden' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IGNORE_HIDDEN',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.ignore_hidden',
                'validation' => 'loose'
            ],
            'system.pages.ignore_files' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FILES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_files',
                'validation' => 'loose'
            ],
            'system.pages.ignore_folders' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.IGNORE_FOLDERS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.ignore_folders',
                'validation' => 'loose'
            ],
            'system.pages.hide_empty_folders' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HIDE_EMPTY_FOLDERS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.hide_empty_folders',
                'validation' => 'loose'
            ],
            'system.pages.url_taxonomy_filters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_URL_TAXONOMY_FILTERS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.url_taxonomy_filters',
                'validation' => 'loose'
            ],
            'system.pages.twig_first' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_FIRST',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.twig_first',
                'validation' => 'loose'
            ],
            'system.pages.never_cache_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.NEVER_CACHE_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.never_cache_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter' => [
                'type' => '_parent',
                'name' => 'system.pages.frontmatter',
                'form_field' => false
            ],
            'system.pages.frontmatter.process_twig' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_PROCESS_TWIG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.frontmatter.process_twig',
                'validation' => 'loose'
            ],
            'system.pages.frontmatter.ignore_fields' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FRONTMATTER_IGNORE_FIELDS',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.frontmatter.ignore_fields',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => '_parent',
                'name' => 'system.languages',
                'form_field' => false
            ],
            'system.languages.supported' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.SUPPORTED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.languages.supported',
                'validation' => 'loose'
            ],
            'system.languages.default_lang' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.DEFAULT_LANG',
                'name' => 'system.languages.default_lang',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang',
                'validation' => 'loose'
            ],
            'system.languages.include_default_lang_file_extension' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INCLUDE_DEFAULT_LANG_FILE_EXTENSION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.include_default_lang_file_extension',
                'validation' => 'loose'
            ],
            'system.value' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACK',
                'classes' => 'fancy',
                'name' => 'system.value',
                'validation' => 'loose'
            ],
            'system.languages.content_fallback' => [
                'array' => true,
                'type' => 'list',
                'label' => 'PLUGIN_ADMIN.CONTENT_LANGUAGE_FALLBACKS',
                'name' => 'system.languages.content_fallback',
                'validation' => 'loose'
            ],
            'system.languages.pages_fallback_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PAGES_FALLBACK_ONLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.pages_fallback_only',
                'validation' => 'loose'
            ],
            'system.languages.translations' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LANGUAGE_TRANSLATIONS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations',
                'validation' => 'loose'
            ],
            'system.languages.translations_fallback' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TRANSLATIONS_FALLBACK',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.translations_fallback',
                'validation' => 'loose'
            ],
            'system.languages.session_store_active' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ACTIVE_LANGUAGE_IN_SESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.session_store_active',
                'validation' => 'loose'
            ],
            'system.languages.http_accept_language' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.HTTP_ACCEPT_LANGUAGE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.http_accept_language',
                'validation' => 'loose'
            ],
            'system.languages.override_locale' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.OVERRIDE_LOCALE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.override_locale',
                'validation' => 'loose'
            ],
            'system.languages.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LANGUAGE_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.languages.debug',
                'validation' => 'loose'
            ],
            'system.pages.expires' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.EXPIRES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'system.pages.expires',
                'validation' => 'loose'
            ],
            'system.pages.cache_control' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_CONTROL',
                'name' => 'system.pages.cache_control',
                'validation' => 'loose'
            ],
            'system.pages.last_modified' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LAST_MODIFIED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.last_modified',
                'validation' => 'loose'
            ],
            'system.pages.etag' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ETAG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.etag',
                'validation' => 'loose'
            ],
            'system.pages.vary_accept_encoding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VARY_ACCEPT_ENCODING',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.vary_accept_encoding',
                'validation' => 'loose'
            ],
            'system.pages.markdown' => [
                'type' => '_parent',
                'name' => 'system.pages.markdown',
                'form_field' => false
            ],
            'system.pages.markdown.extra' => [
                'type' => 'toggle',
                'label' => 'Markdown extra',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.extra',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_line_breaks' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_LINE_BREAKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_line_breaks',
                'validation' => 'loose'
            ],
            'system.pages.markdown.auto_url_links' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_URL_LINKS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.auto_url_links',
                'validation' => 'loose'
            ],
            'system.pages.markdown.escape_markup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ESCAPE_MARKUP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.pages.markdown.escape_markup',
                'validation' => 'loose'
            ],
            'system.pages.markdown.valid_link_attributes' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.VALID_LINK_ATTRIBUTES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.pages.markdown.valid_link_attributes',
                'validation' => 'loose'
            ],
            'system.cache' => [
                'type' => '_parent',
                'name' => 'system.cache',
                'form_field' => false
            ],
            'system.cache.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.enabled',
                'validation' => 'loose'
            ],
            'system.cache.check' => [
                'type' => '_parent',
                'name' => 'system.cache.check',
                'form_field' => false
            ],
            'system.cache.check.method' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_CHECK_METHOD',
                'options' => [
                    'file' => 'Markdown + Yaml file timestamps',
                    'folder' => 'Folder timestamps',
                    'hash' => 'All files timestamps',
                    'none' => 'No timestamp checking'
                ],
                'name' => 'system.cache.check.method',
                'validation' => 'loose'
            ],
            'system.cache.check.interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'Cache Check Interval',
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'system.cache.check.interval',
                'validation' => 'loose'
            ],
            'system.cache.driver' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.CACHE_DRIVER',
                'options' => [
                    'auto' => 'Auto detect',
                    'file' => 'File',
                    'apcu' => 'APCu',
                    'memcache' => 'Memcache',
                    'memcached' => 'Memcached',
                    'redis' => 'Redis'
                ],
                'name' => 'system.cache.driver',
                'validation' => 'loose'
            ],
            'system.cache.prefix' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.CACHE_PREFIX',
                'name' => 'system.cache.prefix',
                'validation' => 'loose'
            ],
            'system.cache.purge_max_age_days' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'GRAV.NICETIME.DAY_PLURAL',
                'label' => 'PLUGIN_ADMIN.CACHE_PURGE_AGE',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 365,
                    'step' => 1
                ],
                'default' => 30,
                'name' => 'system.cache.purge_max_age_days',
                'validation' => 'loose'
            ],
            'system.cache.purge_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_PURGE_JOB',
                'default' => '* 4 * * *',
                'name' => 'system.cache.purge_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.CACHE_CLEAR_JOB',
                'default' => '* 3 * * *',
                'name' => 'system.cache.clear_at',
                'validation' => 'loose'
            ],
            'system.cache.clear_job_type' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CACHE_JOB_TYPE',
                'options' => [
                    'standard' => 'Standard Cache Folders',
                    'all' => 'All Cache Folders'
                ],
                'name' => 'system.cache.clear_job_type',
                'validation' => 'loose'
            ],
            'system.cache.clear_images_by_default' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLEAR_IMAGES_BY_DEFAULT',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.clear_images_by_default',
                'validation' => 'loose'
            ],
            'system.cache.cli_compatibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CLI_COMPATIBILITY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.cli_compatibility',
                'validation' => 'loose'
            ],
            'system.cache.lifetime' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.LIFETIME',
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'system.cache.lifetime',
                'validation' => 'loose'
            ],
            'system.cache.gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GZIP_COMPRESSION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.gzip',
                'validation' => 'loose'
            ],
            'system.cache.allow_webserver_gzip' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ALLOW_WEBSERVER_GZIP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.cache.allow_webserver_gzip',
                'validation' => 'loose'
            ],
            'system.cache.memcached' => [
                'type' => '_parent',
                'name' => 'system.cache.memcached',
                'form_field' => false
            ],
            'system.cache.memcached.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_SERVER',
                'name' => 'system.cache.memcached.server',
                'validation' => 'loose'
            ],
            'system.cache.memcached.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.MEMCACHED_PORT',
                'name' => 'system.cache.memcached.port',
                'validation' => 'loose'
            ],
            'system.cache.redis' => [
                'type' => '_parent',
                'name' => 'system.cache.redis',
                'form_field' => false
            ],
            'system.cache.redis.socket' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SOCKET',
                'name' => 'system.cache.redis.socket',
                'validation' => 'loose'
            ],
            'system.cache.redis.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_SERVER',
                'name' => 'system.cache.redis.server',
                'validation' => 'loose'
            ],
            'system.cache.redis.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PORT',
                'name' => 'system.cache.redis.port',
                'validation' => 'loose'
            ],
            'system.cache.redis.password' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.REDIS_PASSWORD',
                'name' => 'system.cache.redis.password',
                'validation' => 'loose'
            ],
            'system.cache.redis.database' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.REDIS_DATABASE',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.cache.redis.database',
                'validation' => 'loose'
            ],
            'system.flex' => [
                'type' => '_parent',
                'name' => 'system.flex',
                'form_field' => false
            ],
            'system.flex.cache' => [
                'type' => '_parent',
                'name' => 'system.flex.cache',
                'form_field' => false
            ],
            'system.flex.cache.index' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.index',
                'form_field' => false
            ],
            'system.flex.cache.index.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.index.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.index.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_INDEX_CACHE_LIFETIME',
                'default' => 60,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.index.lifetime',
                'validation' => 'loose'
            ],
            'system.flex.cache.object' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.object',
                'form_field' => false
            ],
            'system.flex.cache.object.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.object.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.object.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_OBJECT_CACHE_LIFETIME',
                'default' => 600,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.object.lifetime',
                'validation' => 'loose'
            ],
            'system.flex.cache.render' => [
                'type' => '_parent',
                'name' => 'system.flex.cache.render',
                'form_field' => false
            ],
            'system.flex.cache.render.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.flex.cache.render.enabled',
                'validation' => 'loose'
            ],
            'system.flex.cache.render.lifetime' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.FLEX_RENDER_CACHE_LIFETIME',
                'default' => 600,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.flex.cache.render.lifetime',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => '_parent',
                'name' => 'system.twig',
                'form_field' => false
            ],
            'system.twig.cache' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.cache',
                'validation' => 'loose'
            ],
            'system.twig.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.TWIG_DEBUG',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.debug',
                'validation' => 'loose'
            ],
            'system.twig.auto_reload' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DETECT_CHANGES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.auto_reload',
                'validation' => 'loose'
            ],
            'system.twig.autoescape' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTOESCAPE_VARIABLES',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.twig.autoescape',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => '_parent',
                'name' => 'system.assets',
                'form_field' => false
            ],
            'system.assets.enable_asset_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_TIMESTAMPS_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_timestamp',
                'validation' => 'loose'
            ],
            'system.assets.enable_asset_sri' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED_SRI_ON_ASSETS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.enable_asset_sri',
                'validation' => 'loose'
            ],
            'system.assets.collections' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_ADMIN.COLLECTIONS',
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'system.assets.collections',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.css_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.css_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify',
                'validation' => 'loose'
            ],
            'system.assets.css_minify_windows' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_MINIFY_WINDOWS_OVERRIDE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_minify_windows',
                'validation' => 'loose'
            ],
            'system.assets.css_rewrite' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CSS_REWRITE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.css_rewrite',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.assets.js_minify' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MINIFY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_minify',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline_include_externals' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_INCLUDE_EXTERNALS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline_include_externals',
                'validation' => 'loose'
            ],
            'system.assets.js_module_pipeline_before_excludes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.JAVASCRIPT_MODULE_PIPELINE_BEFORE_EXCLUDES',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.assets.js_module_pipeline_before_excludes',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => '_parent',
                'name' => 'system.errors',
                'form_field' => false
            ],
            'system.errors.display' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DISPLAY_ERRORS',
                'size' => 'medium',
                'highlight' => 1,
                'options' => [
                    -1 => 'PLUGIN_ADMIN.ERROR_SYSTEM',
                    0 => 'PLUGIN_ADMIN.ERROR_SIMPLE',
                    1 => 'PLUGIN_ADMIN.ERROR_FULL_BACKTRACE'
                ],
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'system.errors.display',
                'validation' => 'loose'
            ],
            'system.errors.log' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.LOG_ERRORS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.errors.log',
                'validation' => 'loose'
            ],
            'system.log' => [
                'type' => '_parent',
                'name' => 'system.log',
                'form_field' => false
            ],
            'system.log.handler' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.LOG_HANDLER',
                'default' => 'file',
                'options' => [
                    'file' => 'File',
                    'syslog' => 'Syslog'
                ],
                'name' => 'system.log.handler',
                'validation' => 'loose'
            ],
            'system.log.syslog' => [
                'type' => '_parent',
                'name' => 'system.log.syslog',
                'form_field' => false
            ],
            'system.log.syslog.facility' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SYSLOG_FACILITY',
                'default' => 'local6',
                'options' => [
                    'auth' => 'auth',
                    'authpriv' => 'authpriv',
                    'cron' => 'cron',
                    'daemon' => 'daemon',
                    'kern' => 'kern',
                    'lpr' => 'lpr',
                    'mail' => 'mail',
                    'news' => 'news',
                    'syslog' => 'syslog',
                    'user' => 'user',
                    'uucp' => 'uucp',
                    'local0' => 'local0',
                    'local1' => 'local1',
                    'local2' => 'local2',
                    'local3' => 'local3',
                    'local4' => 'local4',
                    'local5' => 'local5',
                    'local6' => 'local6',
                    'local7' => 'local7'
                ],
                'name' => 'system.log.syslog.facility',
                'validation' => 'loose'
            ],
            'system.log.syslog.tag' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SYSLOG_TAG',
                'name' => 'system.log.syslog.tag',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => '_parent',
                'name' => 'system.debugger',
                'form_field' => false
            ],
            'system.debugger.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.enabled',
                'validation' => 'loose'
            ],
            'system.debugger.provider' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_PROVIDER',
                'size' => 'medium',
                'default' => 'debugbar',
                'options' => [
                    'debugbar' => 'PLUGIN_ADMIN.DEBUGGER_DEBUGBAR',
                    'clockwork' => 'PLUGIN_ADMIN.DEBUGGER_CLOCKWORK'
                ],
                'name' => 'system.debugger.provider',
                'validation' => 'loose'
            ],
            'system.debugger.censored' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEBUGGER_CENSORED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.censored',
                'validation' => 'loose'
            ],
            'system.debugger.shutdown' => [
                'type' => '_parent',
                'name' => 'system.debugger.shutdown',
                'form_field' => false
            ],
            'system.debugger.shutdown.close_connection' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHUTDOWN_CLOSE_CONNECTION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.debugger.shutdown.close_connection',
                'validation' => 'loose'
            ],
            'system.images' => [
                'type' => '_parent',
                'name' => 'system.images',
                'form_field' => false
            ],
            'system.images.adapter' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGE_ADAPTER',
                'highlight' => 'gd',
                'options' => [
                    'gd' => 'GD (PHP built-in)',
                    'imagick' => 'Imagick'
                ],
                'name' => 'system.images.adapter',
                'validation' => 'loose'
            ],
            'system.images.default_image_quality' => [
                'type' => 'range',
                'append' => '%',
                'label' => 'PLUGIN_ADMIN.DEFAULT_IMAGE_QUALITY',
                'validate' => [
                    'min' => 1,
                    'max' => 100
                ],
                'name' => 'system.images.default_image_quality',
                'validation' => 'loose'
            ],
            'system.images.cache_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CACHE_ALL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cache_all',
                'validation' => 'loose'
            ],
            'system.images.cache_perms' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.CACHE_PERMS',
                'highlight' => '0755',
                'options' => [
                    '0755' => '0755',
                    '0775' => '0775'
                ],
                'name' => 'system.images.cache_perms',
                'validation' => 'loose'
            ],
            'system.images.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_DEBUG',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.debug',
                'validation' => 'loose'
            ],
            'system.images.auto_fix_orientation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_AUTO_FIX_ORIENTATION',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.auto_fix_orientation',
                'validation' => 'loose'
            ],
            'system.images.defaults' => [
                'type' => '_parent',
                'name' => 'system.images.defaults',
                'form_field' => false
            ],
            'system.images.defaults.loading' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_LOADING',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'lazy' => 'Lazy',
                    'eager' => 'Eager'
                ],
                'name' => 'system.images.defaults.loading',
                'validation' => 'loose'
            ],
            'system.images.defaults.decoding' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_DECODING',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'sync' => 'Sync',
                    'async' => 'Async'
                ],
                'name' => 'system.images.defaults.decoding',
                'validation' => 'loose'
            ],
            'system.images.defaults.fetchpriority' => [
                'type' => 'select',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.IMAGES_FETCHPRIORITY',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'high' => 'High',
                    'low' => 'Low'
                ],
                'name' => 'system.images.defaults.fetchpriority',
                'validation' => 'loose'
            ],
            'system.images.seofriendly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_SEOFRIENDLY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.seofriendly',
                'validation' => 'loose'
            ],
            'system.media' => [
                'type' => '_parent',
                'name' => 'system.media',
                'form_field' => false
            ],
            'system.media.enable_media_timestamp' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_MEDIA_TIMESTAMP',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.enable_media_timestamp',
                'validation' => 'loose'
            ],
            'system.media.auto_metadata_exif' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLE_AUTO_METADATA',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.media.auto_metadata_exif',
                'validation' => 'loose'
            ],
            'system.media.allowed_fallback_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.FALLBACK_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.allowed_fallback_types',
                'validation' => 'loose'
            ],
            'system.media.unsupported_inline_types' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.INLINE_TYPES',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'system.media.unsupported_inline_types',
                'validation' => 'loose'
            ],
            'system.images.cls' => [
                'type' => '_parent',
                'name' => 'system.images.cls',
                'form_field' => false
            ],
            'system.images.cls.auto_sizes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_AUTO_SIZES',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cls.auto_sizes',
                'validation' => 'loose'
            ],
            'system.images.cls.aspect_ratio' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_ASPECT_RATIO',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.images.cls.aspect_ratio',
                'validation' => 'loose'
            ],
            'system.images.cls.retina_scale' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.IMAGES_CLS_RETINA_SCALE',
                'size' => 'small',
                'highlight' => 1,
                'options' => [
                    1 => '1X',
                    2 => '2X',
                    3 => '3X',
                    4 => '4X'
                ],
                'name' => 'system.images.cls.retina_scale',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => '_parent',
                'name' => 'system.session',
                'form_field' => false
            ],
            'system.session.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.enabled',
                'validation' => 'loose'
            ],
            'system.session.initialize' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_INITIALIZE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.initialize',
                'validation' => 'loose'
            ],
            'system.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'system.session.timeout',
                'validation' => 'loose'
            ],
            'system.session.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'system.session.name',
                'validation' => 'loose'
            ],
            'system.session.uniqueness' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.SESSION_UNIQUENESS',
                'highlight' => 'path',
                'default' => 'path',
                'options' => [
                    'path' => 'Grav\'s root file path',
                    'salt' => 'Grav\'s random security salt'
                ],
                'name' => 'system.session.uniqueness',
                'validation' => 'loose'
            ],
            'system.session.secure' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure',
                'validation' => 'loose'
            ],
            'system.session.secure_https' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SECURE_HTTPS',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.secure_https',
                'validation' => 'loose'
            ],
            'system.session.httponly' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_HTTPONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.httponly',
                'validation' => 'loose'
            ],
            'system.session.domain' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_DOMAIN',
                'name' => 'system.session.domain',
                'validation' => 'loose'
            ],
            'system.session.path' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_PATH',
                'name' => 'system.session.path',
                'validation' => 'loose'
            ],
            'system.session.samesite' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.SESSION_SAMESITE',
                'name' => 'system.session.samesite',
                'validation' => 'loose'
            ],
            'system.session.split' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SESSION_SPLIT',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.session.split',
                'validation' => 'loose'
            ],
            'system.gpm' => [
                'type' => '_parent',
                'name' => 'system.gpm',
                'form_field' => false
            ],
            'system.gpm.releases' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_RELEASES',
                'highlight' => 'stable',
                'options' => [
                    'stable' => 'PLUGIN_ADMIN.STABLE',
                    'testing' => 'PLUGIN_ADMIN.TESTING'
                ],
                'name' => 'system.gpm.releases',
                'validation' => 'loose'
            ],
            'system.gpm.official_gpm_only' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_OFFICIAL_ONLY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => true,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.gpm.official_gpm_only',
                'validation' => 'loose'
            ],
            'system.updates' => [
                'type' => '_parent',
                'name' => 'system.updates',
                'form_field' => false
            ],
            'system.updates.safe_upgrade' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SAFE_UPGRADE',
                'highlight' => 1,
                'default' => true,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.updates.safe_upgrade',
                'validation' => 'loose'
            ],
            'system.updates.safe_upgrade_snapshot_limit' => [
                'type' => 'number',
                'label' => 'PLUGIN_ADMIN.SAFE_UPGRADE_SNAPSHOT_LIMIT',
                'default' => 5,
                'validate' => [
                    'type' => 'int',
                    'min' => 0
                ],
                'name' => 'system.updates.safe_upgrade_snapshot_limit',
                'validation' => 'loose'
            ],
            'system.updates.recovery_mode' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.RECOVERY_MODE',
                'highlight' => 1,
                'default' => true,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.updates.recovery_mode',
                'validation' => 'loose'
            ],
            'system.http' => [
                'type' => '_parent',
                'name' => 'system.http',
                'form_field' => false
            ],
            'system.http.method' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.GPM_METHOD',
                'highlight' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.AUTO',
                    'fopen' => 'PLUGIN_ADMIN.FOPEN',
                    'curl' => 'PLUGIN_ADMIN.CURL'
                ],
                'name' => 'system.http.method',
                'validation' => 'loose'
            ],
            'system.http.enable_proxy' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_ENABLE_PROXY',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'default' => false,
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.enable_proxy',
                'validation' => 'loose'
            ],
            'system.http.proxy_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_URL',
                'name' => 'system.http.proxy_url',
                'validation' => 'loose'
            ],
            'system.http.proxy_cert_path' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PROXY_CERT',
                'name' => 'system.http.proxy_cert_path',
                'validation' => 'loose'
            ],
            'system.http.verify_peer' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_VERIFY_PEER',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.verify_peer',
                'validation' => 'loose'
            ],
            'system.http.verify_host' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SSL_VERIFY_HOST',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http.verify_host',
                'validation' => 'loose'
            ],
            'system.http.concurrent_connections' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_ADMIN.HTTP_CONNECTIONS',
                'validate' => [
                    'min' => 1,
                    'max' => 20
                ],
                'name' => 'system.http.concurrent_connections',
                'validation' => 'loose'
            ],
            'system.reverse_proxy_setup' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.REVERSE_PROXY',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.reverse_proxy_setup',
                'validation' => 'loose'
            ],
            'system.username_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.USERNAME_REGEX',
                'name' => 'system.username_regex',
                'validation' => 'loose'
            ],
            'system.pwd_regex' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.PWD_REGEX',
                'name' => 'system.pwd_regex',
                'validation' => 'loose'
            ],
            'system.intl_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.INTL_ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.intl_enabled',
                'validation' => 'loose'
            ],
            'system.wrapped_site' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.WRAPPED_SITE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.wrapped_site',
                'validation' => 'loose'
            ],
            'system.absolute_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ABSOLUTE_URLS',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.absolute_urls',
                'validation' => 'loose'
            ],
            'system.param_sep' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARAMETER_SEPARATOR',
                'classes' => 'fancy',
                'default' => '',
                'options' => [
                    ':' => ': (default)',
                    ';' => '; (for Apache running on Windows)'
                ],
                'name' => 'system.param_sep',
                'validation' => 'loose'
            ],
            'system.force_ssl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_SSL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_ssl',
                'validation' => 'loose'
            ],
            'system.force_lowercase_urls' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FORCE_LOWERCASE_URLS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.force_lowercase_urls',
                'validation' => 'loose'
            ],
            'system.custom_base_url' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.CUSTOM_BASE_URL',
                'name' => 'system.custom_base_url',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded' => [
                'type' => '_parent',
                'name' => 'system.http_x_forwarded',
                'form_field' => false
            ],
            'system.http_x_forwarded.protocol' => [
                'type' => 'toggle',
                'label' => 'HTTP_X_FORWARDED_PROTO Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.protocol',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.host' => [
                'type' => 'toggle',
                'label' => 'HTTP_X_FORWARDED_HOST Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.host',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.port' => [
                'type' => 'toggle',
                'label' => 'HTTP_X_FORWARDED_PORT Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.port',
                'validation' => 'loose'
            ],
            'system.http_x_forwarded.ip' => [
                'type' => 'toggle',
                'label' => 'HTTP_X_FORWARDED IP Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.http_x_forwarded.ip',
                'validation' => 'loose'
            ],
            'system.strict_mode' => [
                'type' => '_parent',
                'name' => 'system.strict_mode',
                'form_field' => false
            ],
            'system.strict_mode.blueprint_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_BLUEPRINT_COMPAT',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.blueprint_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.yaml_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_YAML_COMPAT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.yaml_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.twig2_compat' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.STRICT_TWIG_COMPAT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.twig2_compat',
                'validation' => 'loose'
            ],
            'system.strict_mode.twig3_compat' => [
                'type' => 'toggle',
                'label' => 'Twig 3 Compatibility',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'system.strict_mode.twig3_compat',
                'validation' => 'loose'
            ],
            'system.accounts' => [
                'type' => '_parent',
                'name' => 'system.accounts',
                'form_field' => false
            ],
            'system.accounts.type' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.ACCOUNTS_TYPE',
                'highlight' => 'stable',
                'options' => [
                    'regular' => 'PLUGIN_ADMIN.REGULAR',
                    'flex' => 'PLUGIN_ADMIN.FLEX'
                ],
                'name' => 'system.accounts.type',
                'validation' => 'loose'
            ],
            'system.accounts.storage' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.ACCOUNTS_STORAGE',
                'highlight' => 'stable',
                'options' => [
                    'file' => 'PLUGIN_ADMIN.FILE',
                    'folder' => 'PLUGIN_ADMIN.FOLDER'
                ],
                'name' => 'system.accounts.storage',
                'validation' => 'loose'
            ],
            'system.accounts.avatar' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.AVATAR',
                'default' => 'gravatar',
                'options' => [
                    'multiavatar' => 'Multiavatar [local]',
                    'gravatar' => 'Gravatar [external]'
                ],
                'name' => 'system.accounts.avatar',
                'validation' => 'loose'
            ],
            'plugins.markdown-notices' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins' => [
                'type' => '_parent',
                'name' => 'plugins',
                'form_field' => false
            ],
            'plugins.markdown-notices.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-notices.enabled',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_MARKDOWN_NOTICES.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.markdown-notices.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.base_classes' => [
                'type' => 'selectize',
                'label' => 'PLUGIN_MARKDOWN_NOTICES.BASE_CLASSES',
                'size' => 'large',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.markdown-notices.base_classes',
                'validation' => 'strict'
            ],
            'plugins.markdown-notices.level_classes' => [
                'type' => 'selectize',
                'label' => 'PLUGIN_MARKDOWN_NOTICES.LEVEL_CLASSES',
                'size' => 'large',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.markdown-notices.level_classes',
                'validation' => 'strict'
            ],
            'plugins.pagination' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.pagination.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.enabled',
                'validation' => 'strict'
            ],
            'plugins.pagination.delta' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_PAGINATION.DELTA',
                'default' => 0,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.pagination.delta',
                'validation' => 'strict'
            ],
            'plugins.pagination.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PAGINATION.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.pagination.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.form.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.enabled',
                'validation' => 'strict'
            ],
            'plugins.form.debug' => [
                'type' => 'toggle',
                'label' => 'Debug',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.debug',
                'validation' => 'strict'
            ],
            'plugins.form.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.form.inline_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.USE_INLINE_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_css',
                'validation' => 'strict'
            ],
            'plugins.form.refresh_prevention' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.REFRESH_PREVENTION',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.refresh_prevention',
                'validation' => 'strict'
            ],
            'plugins.form.client_side_validation' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.CLIENT_SIDE_VALIDATION',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.client_side_validation',
                'validation' => 'strict'
            ],
            'plugins.form.inline_errors' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.INLINE_ERRORS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.inline_errors',
                'validation' => 'strict'
            ],
            'plugins.form.modular_form_fix' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.MODULAR_FORM_FIX',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.modular_form_fix',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => '_parent',
                'name' => 'plugins.form.files',
                'form_field' => false
            ],
            'plugins.form.files.multiple' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.ALLOW_MULTIPLE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.multiple',
                'validation' => 'strict'
            ],
            'plugins.form.files.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_FORM.LIMIT',
                'default' => 10,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.form.files.limit',
                'validation' => 'strict'
            ],
            'plugins.form.files.destination' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.DESTINATION',
                'default' => '@self',
                'name' => 'plugins.form.files.destination',
                'validation' => 'strict'
            ],
            'plugins.form.files.accept' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_FORM.ACCEPT',
                'classes' => 'fancy',
                'default' => [
                    0 => 'image/*'
                ],
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.files.accept',
                'validation' => 'strict'
            ],
            'plugins.form.files.filesize' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.FILESIZE',
                'size' => 'x-small',
                'default' => 5,
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.form.files.filesize',
                'validation' => 'strict'
            ],
            'plugins.form.files.avoid_overwriting' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.AVOID_OVERWRITING',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.avoid_overwriting',
                'validation' => 'strict'
            ],
            'plugins.form.files.random_name' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FORM.RANDOM_NAME',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.form.files.random_name',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha' => [
                'type' => '_parent',
                'name' => 'plugins.form.recaptcha',
                'form_field' => false
            ],
            'plugins.form.recaptcha.version' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_VERSION',
                'default' => '2-checkbox',
                'options' => [
                    '2-checkbox' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_CHECKBOX',
                    '2-invisible' => 'PLUGIN_FORM.RECAPTCHA_VERSION_V2_INVISIBLE',
                    3 => 'PLUGIN_FORM.RECAPTCHA_VERSION_V3_LATEST'
                ],
                'name' => 'plugins.form.recaptcha.version',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                    'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                ],
                'recaptcha.site_key' => NULL,
                'name' => 'plugins.form.recaptcha.theme',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.recaptcha.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.recaptcha.secret_key',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile' => [
                'type' => '_parent',
                'name' => 'plugins.form.turnstile',
                'form_field' => false
            ],
            'plugins.form.turnstile.theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.RECAPTCHA_THEME',
                'default' => 'light',
                'options' => [
                    'light' => 'PLUGIN_FORM.RECAPTCHA_THEME_LIGHT',
                    'dark' => 'PLUGIN_FORM.RECAPTCHA_THEME_DARK'
                ],
                'name' => 'plugins.form.turnstile.theme',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile.site_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SITE_KEY',
                'default' => '',
                'name' => 'plugins.form.turnstile.site_key',
                'validation' => 'strict'
            ],
            'plugins.form.turnstile.secret_key' => [
                'type' => 'text',
                'label' => 'PLUGIN_FORM.RECAPTCHA_SECRET_KEY',
                'default' => '',
                'name' => 'plugins.form.turnstile.secret_key',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.image' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.image',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.image.width' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_WIDTH',
                'default' => 135,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 100,
                    'max' => 500,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.image.width',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.image.height' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BOX_HEIGHT',
                'default' => 40,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 30,
                    'max' => 200,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.image.height',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.chars',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.chars.font' => [
                'type' => 'select',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_FONT',
                'default' => 'zxx-noise.ttf',
                'options' => [
                    'zxx-noise.ttf' => 'zxx-Noise',
                    'zxx-xed.ttf' => 'zxx-Xed',
                    'zxx-camo.ttf' => 'zxx-Camo',
                    'zxx-sans.ttf' => 'zxx-Sans'
                ],
                'name' => 'plugins.form.basic_captcha.chars.font',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.size' => [
                'type' => 'range',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_SIZE',
                'default' => 24,
                'append' => 'px',
                'validate' => [
                    'min' => 12,
                    'max' => 32,
                    'step' => 2
                ],
                'name' => 'plugins.form.basic_captcha.chars.size',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.bg' => [
                'type' => 'colorpicker',
                'size' => 'small',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_BG_COLOR',
                'default' => '#ffffff',
                'name' => 'plugins.form.basic_captcha.chars.bg',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.text' => [
                'type' => 'colorpicker',
                'size' => 'small',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TEXT_COLOR',
                'default' => '#000000',
                'name' => 'plugins.form.basic_captcha.chars.text',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.start_x' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_X',
                'default' => 5,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.chars.start_x',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.start_y' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_START_Y',
                'default' => 30,
                'append' => 'px',
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.chars.start_y',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.chars.length' => [
                'type' => 'range',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_LENGTH',
                'default' => 6,
                'validate' => [
                    'min' => 4,
                    'max' => 12
                ],
                'append' => 'characters',
                'name' => 'plugins.form.basic_captcha.chars.length',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math' => [
                'type' => '_parent',
                'name' => 'plugins.form.basic_captcha.math',
                'form_field' => false
            ],
            'plugins.form.basic_captcha.math.min' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MIN',
                'default' => 1,
                'size' => 'small',
                'validate' => [
                    'min' => 0,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.math.min',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math.max' => [
                'type' => 'number',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_MAX',
                'default' => 10,
                'size' => 'small',
                'validate' => [
                    'min' => 1,
                    'type' => 'number'
                ],
                'name' => 'plugins.form.basic_captcha.math.max',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.math.operators' => [
                'type' => 'selectize',
                'selectize' => [
                    'options' => [
                        0 => [
                            'value' => '+',
                            'text' => '+ Addition'
                        ],
                        1 => [
                            'value' => '-',
                            'text' => '- Subtraction'
                        ],
                        2 => [
                            'value' => '*',
                            'text' => 'x Multiplication'
                        ],
                        3 => [
                            'value' => '/',
                            'text' => '/ Division'
                        ]
                    ]
                ],
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_MATH_OPERATORS',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.form.basic_captcha.math.operators',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.type' => [
                'input@' => true,
                'type' => 'elements',
                'label' => 'PLUGIN_FORM.BASIC_CAPTCHA_TYPE',
                'default' => 'characters',
                'size' => 'medium',
                'options' => [
                    'characters' => 'Random Characters',
                    'math' => 'Math Puzzle'
                ],
                'name' => 'plugins.form.basic_captcha.type',
                'validation' => 'strict'
            ],
            'plugins.flex-objects' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.flex-objects.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.flex-objects.enabled',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_FLEX_OBJECTS.USE_BUILT_IN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.flex-objects.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.extra_admin_twig_path' => [
                'type' => 'text',
                'label' => 'PLUGIN_FLEX_OBJECTS.EXTRA_ADMIN_TWIG_PATH',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.flex-objects.extra_admin_twig_path',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.security' => [
                'type' => '_parent',
                'name' => 'plugins.flex-objects.security',
                'form_field' => false
            ],
            'plugins.flex-objects.security.restrict_page_frontmatter' => [
                'type' => 'toggle',
                'label' => 'Restrict Page Frontmatter Editing',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.flex-objects.security.restrict_page_frontmatter',
                'validation' => 'loose'
            ],
            'plugins.flex-objects.directories' => [
                'type' => 'flex-objects',
                'label' => 'PLUGIN_FLEX_OBJECTS.DIRECTORIES',
                'array' => true,
                'ignore_empty' => true,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.flex-objects.directories',
                'validation' => 'loose'
            ],
            'plugins.relatedpages' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.relatedpages.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.enabled',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.LIMIT',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 65536
                ],
                'name' => 'plugins.relatedpages.limit',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.show_score' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.SHOW_SCORE',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.show_score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.items' => [
                'type' => 'multilevel',
                'label' => 'PLUGIN_REL_PAGES.ITEMS',
                'value_only' => true,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.relatedpages.filter.items',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.excluded_types' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.EXCLUDED_TYPES',
                'value_only' => true,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.relatedpages.filter.excluded_types',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.filter.order',
                'form_field' => false
            ],
            'plugins.relatedpages.filter.order.by' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER_BY',
                'default' => 'date',
                'options' => [
                    'folder' => 'Folder',
                    'title' => 'Title',
                    'date' => 'Date',
                    'default' => 'Default'
                ],
                'name' => 'plugins.relatedpages.filter.order.by',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.filter.order.dir' => [
                'type' => 'select',
                'label' => 'PLUGIN_REL_PAGES.ORDER',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.relatedpages.filter.order.dir',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.page_in_filter' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.PAGE_IN_FILTER',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.page_in_filter',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.explicit_pages',
                'form_field' => false
            ],
            'plugins.relatedpages.explicit_pages.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.explicit_pages.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.explicit_pages.score' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_REL_PAGES.EXPLICIT_SCORE',
                'validate' => [
                    'type' => 'int',
                    'min' => 0,
                    'max' => 100
                ],
                'name' => 'plugins.relatedpages.explicit_pages.score',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy' => [
                'type' => 'textarea',
                'yaml' => true,
                'size' => 'medium',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY',
                'validate' => [
                    'type' => 'string'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_TAXONOMY_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content',
                'form_field' => false
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.content_match' => [
                'type' => '_parent',
                'name' => 'plugins.relatedpages.content_match',
                'form_field' => false
            ],
            'plugins.relatedpages.content_match.process' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_PROCESS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.relatedpages.content_match.process',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.TAXONOMY_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale',
                'validation' => 'loose'
            ],
            'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale' => [
                'type' => 'array',
                'label' => 'PLUGIN_REL_PAGES.CONTENT_SCORE_SCALE',
                'size' => 'large',
                'default' => [
                    0 => 50,
                    1 => 75,
                    2 => 100
                ],
                'value_only' => true,
                'name' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale',
                'validation' => 'loose'
            ],
            'plugins.tntsearch' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.tntsearch.enabled' => [
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
                ],
                'name' => 'plugins.tntsearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.index_status' => [
                'type' => 'indexstatus',
                'label' => 'Search Index Status',
                'name' => 'plugins.tntsearch.index_status',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.enable_admin_page_events' => [
                'type' => 'toggle',
                'label' => 'Enable Admin Page Events',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.enable_admin_page_events',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index' => [
                'type' => '_parent',
                'name' => 'plugins.tntsearch.scheduled_index',
                'form_field' => false
            ],
            'plugins.tntsearch.scheduled_index.enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Index Scheduled Job',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.scheduled_index.enabled',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index.at' => [
                'type' => 'cron',
                'label' => 'Scheduled Job Frequency',
                'size' => 'medium',
                'default' => '0 */3 * * *',
                'name' => 'plugins.tntsearch.scheduled_index.at',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.scheduled_index.logs' => [
                'type' => 'text',
                'label' => 'Scheduled Job Log File',
                'size' => 'medium',
                'name' => 'plugins.tntsearch.scheduled_index.logs',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Built-in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_js' => [
                'type' => 'toggle',
                'label' => 'Built-in Javascript',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_js',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.built_in_search_page' => [
                'type' => 'toggle',
                'label' => 'Built-in Search Page',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.built_in_search_page',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.search_route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Search Page Route',
                'name' => 'plugins.tntsearch.search_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.query_route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'Query Route',
                'name' => 'plugins.tntsearch.query_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.search_type' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Search Type',
                'default' => 'auto',
                'options' => [
                    'auto' => 'Auto',
                    'basic' => 'Basic',
                    'boolean' => 'Boolean'
                ],
                'name' => 'plugins.tntsearch.search_type',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.fuzzy' => [
                'type' => 'toggle',
                'label' => 'Fuzzy Search',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.fuzzy',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.distance' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'Levenshtein distance of fuzzy search',
                'default' => 2,
                'name' => 'plugins.tntsearch.distance',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.phrases' => [
                'type' => 'toggle',
                'label' => 'Match quoted phrases',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.phrases',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.stemmer' => [
                'type' => 'select',
                'size' => 'small',
                'classes' => 'fancy',
                'label' => 'Stemmer',
                'default' => 'no',
                'options' => [
                    'no' => 'Disabled',
                    'arabic' => 'Arabic',
                    'croatian' => 'Croatian',
                    'porter' => 'English',
                    'german' => 'German',
                    'italian' => 'Italian',
                    'portuguese' => 'Portuguese',
                    'russian' => 'Russian',
                    'ukrainian' => 'Ukrainian'
                ],
                'name' => 'plugins.tntsearch.stemmer',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_route' => [
                'type' => 'toggle',
                'label' => 'Display Route',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_route',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.live_uri_update' => [
                'type' => 'toggle',
                'label' => 'Live URI Update',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.live_uri_update',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_hits' => [
                'type' => 'toggle',
                'label' => 'Display Hits',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_hits',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.display_time' => [
                'type' => 'toggle',
                'label' => 'Display Time',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.display_time',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.limit' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'Results Limit',
                'default' => 20,
                'name' => 'plugins.tntsearch.limit',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.min' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'Min Chars Before Search',
                'default' => 3,
                'name' => 'plugins.tntsearch.min',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.snippet' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'Results Text Limit',
                'default' => 300,
                'name' => 'plugins.tntsearch.snippet',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.index_page_by_default' => [
                'type' => 'toggle',
                'label' => 'Index Every Page',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.index_page_by_default',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.filter' => [
                'type' => '_parent',
                'name' => 'plugins.tntsearch.filter',
                'form_field' => false
            ],
            'plugins.tntsearch.filter.items' => [
                'type' => 'textarea',
                'size' => 'large',
                'rows' => 4,
                'label' => 'Search Filter',
                'yaml' => true,
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'plugins.tntsearch.filter.items',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.powered_by' => [
                'type' => 'toggle',
                'label' => 'Powered By',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.tntsearch.powered_by',
                'validation' => 'strict'
            ],
            'plugins.tntsearch.search_object_type' => [
                'type' => 'text',
                'label' => 'Search Object Type',
                'default' => 'Grav',
                'name' => 'plugins.tntsearch.search_object_type',
                'validation' => 'strict'
            ],
            'plugins.admin' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.admin.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.cache_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ADMIN_CACHING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.cache_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.2FA_TITLE',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.route' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.ADMIN_PATH',
                'size' => 'medium',
                'name' => 'plugins.admin.route',
                'validation' => 'loose'
            ],
            'plugins.admin.logo_text' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.LOGO_TEXT',
                'size' => 'medium',
                'name' => 'plugins.admin.logo_text',
                'validation' => 'loose'
            ],
            'plugins.admin.content_padding' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.CONTENT_PADDING',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.content_padding',
                'validation' => 'loose'
            ],
            'plugins.admin.body_classes' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.BODY_CLASSES',
                'size' => 'medium',
                'name' => 'plugins.admin.body_classes',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar' => [
                'type' => '_parent',
                'name' => 'plugins.admin.sidebar',
                'form_field' => false
            ],
            'plugins.admin.sidebar.activate' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION',
                'size' => 'small',
                'default' => 'tab',
                'options' => [
                    'tab' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION_TAB',
                    'hover' => 'PLUGIN_ADMIN.SIDEBAR_ACTIVATION_HOVER'
                ],
                'name' => 'plugins.admin.sidebar.activate',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.hover_delay' => [
                'type' => 'text',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.SIDEBAR_HOVER_DELAY_APPEND',
                'label' => 'PLUGIN_ADMIN.SIDEBAR_HOVER_DELAY',
                'default' => 500,
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.sidebar.hover_delay',
                'validation' => 'loose'
            ],
            'plugins.admin.sidebar.size' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SIDEBAR_SIZE',
                'size' => 'medium',
                'default' => 'auto',
                'options' => [
                    'auto' => 'PLUGIN_ADMIN.SIDEBAR_SIZE_AUTO',
                    'small' => 'PLUGIN_ADMIN.SIDEBAR_SIZE_SMALL'
                ],
                'name' => 'plugins.admin.sidebar.size',
                'validation' => 'loose'
            ],
            'plugins.admin.theme' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.THEME',
                'default' => 'grav',
                'name' => 'plugins.admin.theme',
                'validation' => 'loose'
            ],
            'plugins.admin.edit_mode' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.EDIT_MODE',
                'size' => 'small',
                'default' => 'normal',
                'options' => [
                    'normal' => 'PLUGIN_ADMIN.NORMAL',
                    'expert' => 'PLUGIN_ADMIN.EXPERT'
                ],
                'name' => 'plugins.admin.edit_mode',
                'validation' => 'loose'
            ],
            'plugins.admin.frontend_preview_target' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET',
                'size' => 'medium',
                'default' => 'inline',
                'options' => [
                    'inline' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_INLINE',
                    '_blank' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_NEW',
                    '_self' => 'PLUGIN_ADMIN.FRONTEND_PREVIEW_TARGET_CURRENT'
                ],
                'name' => 'plugins.admin.frontend_preview_target',
                'validation' => 'loose'
            ],
            'plugins.admin.pages' => [
                'type' => '_parent',
                'name' => 'plugins.admin.pages',
                'form_field' => false
            ],
            'plugins.admin.pages.show_parents' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_ADMIN.PARENT_DROPDOWN',
                'highlight' => 1,
                'options' => [
                    'both' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_BOTH',
                    'folder' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_FOLDER',
                    'fullpath' => 'PLUGIN_ADMIN.PARENT_DROPDOWN_FULLPATH'
                ],
                'name' => 'plugins.admin.pages.show_parents',
                'validation' => 'loose'
            ],
            'plugins.admin.pages.parents_levels' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.PARENTS_LEVELS',
                'size' => 'small',
                'name' => 'plugins.admin.pages.parents_levels',
                'validation' => 'loose'
            ],
            'plugins.admin.pages.show_modular' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.MODULAR_PARENTS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.pages.show_modular',
                'validation' => 'loose'
            ],
            'plugins.admin.show_beta_msg' => [
                'type' => 'hidden',
                'name' => 'plugins.admin.show_beta_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.show_github_msg' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.SHOW_GITHUB_LINK',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.show_github_msg',
                'validation' => 'loose'
            ],
            'plugins.admin.enable_auto_updates_check' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.AUTO_UPDATES',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.enable_auto_updates_check',
                'validation' => 'loose'
            ],
            'plugins.admin.session' => [
                'type' => '_parent',
                'name' => 'plugins.admin.session',
                'form_field' => false
            ],
            'plugins.admin.session.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'append' => 'GRAV.NICETIME.SECOND_PLURAL',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.admin.session.timeout',
                'validation' => 'loose'
            ],
            'plugins.admin.session.keep_alive' => [
                'type' => 'toggle',
                'label' => 'Keep Alive Ping',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.session.keep_alive',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_page_types' => [
                'type' => 'select',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.HIDE_PAGE_TYPES',
                'classes' => 'fancy',
                'multiple' => true,
                'array' => true,
                'selectize' => [
                    'create' => true
                ],
                'data-options@' => [
                    0 => '\\Grav\\Plugin\\AdminPlugin::pagesTypes',
                    1 => true
                ],
                'name' => 'plugins.admin.hide_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.hide_modular_page_types' => [
                'type' => 'select',
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.HIDE_MODULAR_PAGE_TYPES',
                'classes' => 'fancy',
                'multiple' => true,
                'array' => true,
                'selectize' => [
                    'create' => true
                ],
                'data-options@' => [
                    0 => '\\Grav\\Plugin\\AdminPlugin::pagesModularTypes',
                    1 => true
                ],
                'name' => 'plugins.admin.hide_modular_page_types',
                'validation' => 'loose'
            ],
            'plugins.admin.widgets_display' => [
                'type' => 'widgets',
                'label' => 'PLUGIN_ADMIN.WIDGETS_DISPLAY',
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.admin.widgets_display',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications' => [
                'type' => '_parent',
                'name' => 'plugins.admin.notifications',
                'form_field' => false
            ],
            'plugins.admin.notifications.feed' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.FEED_NOTIFICATIONS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.feed',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.dashboard' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DASHBOARD_NOTIFICATIONS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.dashboard',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.plugins' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGINS_NOTIFICATIONS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.plugins',
                'validation' => 'loose'
            ],
            'plugins.admin.notifications.themes' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.THEMES_NOTIFICATIONS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.notifications.themes',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel' => [
                'type' => '_parent',
                'name' => 'plugins.admin.whitelabel',
                'form_field' => false
            ],
            'plugins.admin.whitelabel.logo_login' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'PLUGIN_ADMIN.LOGIN_SCREEN_CUSTOM_LOGO_LABEL',
                'destination' => 'user://assets',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'plugins.admin.whitelabel.logo_login',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.logo_custom' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'PLUGIN_ADMIN.TOP_LEFT_CUSTOM_LOGO_LABEL',
                'destination' => 'user://assets',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'plugins.admin.whitelabel.logo_custom',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.codemirror_theme' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.CODEMIRROR_THEME',
                'default' => 'paper',
                'markdown' => true,
                'data-options@' => '\\Grav\\Plugin\\AdminPlugin::themeOptions',
                'description' => 'PLUGIN_ADMIN.CODEMIRROR_THEME_DESC',
                'name' => 'plugins.admin.whitelabel.codemirror_theme',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.codemirror_fontsize' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE',
                'default' => 'md',
                'options' => [
                    'sm' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_SM',
                    'md' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_MD',
                    'lg' => 'PLUGIN_ADMIN.CODEMIRROR_FONTSIZE_LG'
                ],
                'name' => 'plugins.admin.whitelabel.codemirror_fontsize',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.codemirror_md_font' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT',
                'default' => 'sans',
                'options' => [
                    'sans' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT_SANS',
                    'mono' => 'PLUGIN_ADMIN.CODEMIRROR_MD_FONT_MONO'
                ],
                'name' => 'plugins.admin.whitelabel.codemirror_md_font',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.quicktray_recompile' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.QUICKTRAY_RECOMPILE',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.whitelabel.quicktray_recompile',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme' => [
                'type' => '_parent',
                'name' => 'plugins.admin.whitelabel.color_scheme',
                'form_field' => false
            ],
            'plugins.admin.whitelabel.color_scheme.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.COLOR_SCHEME_NAME',
                'name' => 'plugins.admin.whitelabel.color_scheme.name',
                'validation' => 'loose'
            ],
            'plugins.admin.themes-preview' => [
                'type' => 'themepreview',
                'ignore' => 'true;',
                'label' => 'PLUGIN_ADMIN.PRESETS',
                'style' => 'vertical',
                'name' => 'plugins.admin.themes-preview',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors' => [
                'type' => '_parent',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors',
                'form_field' => false
            ],
            'plugins.admin.whitelabel.color_scheme.colors.logo-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#1e333e',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.logo-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.logo-link' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.logo-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#253a47',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-text' => [
                'type' => 'colorscheme.color',
                'default' => '#afc7d5',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-link' => [
                'type' => 'colorscheme.color',
                'default' => '#d1dee7',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-selected-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#2d4d5b',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-selected-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-selected-link' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-selected-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-hover-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#1e333e',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-hover-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.nav-hover-link' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.nav-hover-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.toolbar-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#349886',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.toolbar-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.toolbar-text' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.toolbar-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.page-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#314d5b',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.page-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.page-text' => [
                'type' => 'colorscheme.color',
                'default' => '#81a5b5',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.page-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.page-link' => [
                'type' => 'colorscheme.color',
                'default' => '#aad9ed',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.page-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#eeeeee',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-text' => [
                'type' => 'colorscheme.color',
                'default' => '#737c81',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-link' => [
                'type' => 'colorscheme.color',
                'default' => '#0082ba',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-link',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-link2' => [
                'type' => 'colorscheme.color',
                'default' => '#da4b46',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-link2',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-header' => [
                'type' => 'colorscheme.color',
                'default' => '#314d5b',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-header',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-tabs-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#223a47',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-tabs-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-tabs-text' => [
                'type' => 'colorscheme.color',
                'default' => '#d1dee7',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-tabs-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.content-highlight' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffd7',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.content-highlight',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.button-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#41bea8',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.button-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.button-text' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.button-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.notice-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#00a6cf',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.notice-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.notice-text' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.notice-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.update-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#8f5aad',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.update-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.update-text' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.update-text',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.critical-bg' => [
                'type' => 'colorscheme.color',
                'default' => '#da4b46',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.critical-bg',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.colors.critical-text' => [
                'type' => 'colorscheme.color',
                'default' => '#ffffff',
                'name' => 'plugins.admin.whitelabel.color_scheme.colors.critical-text',
                'validation' => 'loose'
            ],
            'plugins.admin.colorschemes' => [
                'type' => 'colorscheme',
                'label' => 'PLUGIN_ADMIN.COLOR_SCHEME_LABEL',
                'style' => 'vertical',
                'name' => 'plugins.admin.colorschemes',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.accents' => [
                'type' => '_parent',
                'name' => 'plugins.admin.whitelabel.color_scheme.accents',
                'form_field' => false
            ],
            'plugins.admin.whitelabel.color_scheme.accents.primary-accent' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.PRIMARY_ACCENT_LABEL',
                'options' => [
                    'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                    'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                    'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                    'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                    'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                    'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                    'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                    'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                    'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                    'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                ],
                'name' => 'plugins.admin.whitelabel.color_scheme.accents.primary-accent',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.accents.secondary-accent' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.SECONDARY_ACCENT_LABEL',
                'options' => [
                    'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                    'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                    'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                    'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                    'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                    'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                    'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                    'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                    'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                    'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                ],
                'name' => 'plugins.admin.whitelabel.color_scheme.accents.secondary-accent',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.color_scheme.accents.tertiary-accent' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.TERTIARY_ACCENT_LABEL',
                'options' => [
                    'button' => 'PLUGIN_ADMIN.BUTTON_COLORS',
                    'content' => 'PLUGIN_ADMIN.CONTENT_COLORS',
                    'tabs' => 'PLUGIN_ADMIN.TABS_COLORS',
                    'critical' => 'PLUGIN_ADMIN.CRITICAL_COLORS',
                    'logo' => 'PLUGIN_ADMIN.LOGO_COLORS',
                    'nav' => 'PLUGIN_ADMIN.NAV_COLORS',
                    'notice' => 'PLUGIN_ADMIN.NOTICE_COLORS',
                    'page' => 'PLUGIN_ADMIN.PAGE_COLORS',
                    'toolbar' => 'PLUGIN_ADMIN.TOOLBAR_COLORS',
                    'update' => 'PLUGIN_ADMIN.UPDATE_COLORS'
                ],
                'name' => 'plugins.admin.whitelabel.color_scheme.accents.tertiary-accent',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.custom_footer' => [
                'type' => 'textarea',
                'rows' => 2,
                'label' => 'PLUGIN_ADMIN.CUSTOM_FOOTER',
                'name' => 'plugins.admin.whitelabel.custom_footer',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.custom_css' => [
                'label' => 'PLUGIN_ADMIN.CUSTOM_CSS_LABEL',
                'type' => 'editor',
                'codemirror' => [
                    'mode' => 'css',
                    'indentUnit' => 2,
                    'autofocus' => true,
                    'indentWithTabs' => true,
                    'lineNumbers' => true,
                    'styleActiveLine' => true
                ],
                'name' => 'plugins.admin.whitelabel.custom_css',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.custom_presets' => [
                'label' => 'PLUGIN_ADMIN.CUSTOM_PRESETS',
                'type' => 'editor',
                'codemirror' => [
                    'mode' => 'yaml',
                    'indentUnit' => 2,
                    'autofocus' => true,
                    'indentWithTabs' => false,
                    'lineNumbers' => true,
                    'styleActiveLine' => true,
                    'gutters' => [
                        0 => 'CodeMirror-lint-markers'
                    ],
                    'lint' => true
                ],
                'name' => 'plugins.admin.whitelabel.custom_presets',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity',
                'form_field' => false
            ],
            'plugins.admin.popularity.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.VISITOR_TRACKING',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.admin.popularity.enabled',
                'validation' => 'loose'
            ],
            'plugins.admin.dashboard' => [
                'type' => '_parent',
                'name' => 'plugins.admin.dashboard',
                'form_field' => false
            ],
            'plugins.admin.dashboard.days_of_stats' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.DAYS_OF_STATS',
                'append' => 'days',
                'size' => 'x-small',
                'default' => 7,
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.admin.dashboard.days_of_stats',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.ignore' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.IGNORE_URLS',
                'size' => 'large',
                'default' => [
                    0 => '/test*',
                    1 => '/modular'
                ],
                'value_only' => true,
                'name' => 'plugins.admin.popularity.ignore',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history' => [
                'type' => '_parent',
                'name' => 'plugins.admin.popularity.history',
                'form_field' => false
            ],
            'plugins.admin.popularity.history.daily' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.DAILY_HISTORY',
                'default' => 30,
                'name' => 'plugins.admin.popularity.history.daily',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.monthly' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.MONTHLY_HISTORY',
                'default' => 12,
                'name' => 'plugins.admin.popularity.history.monthly',
                'validation' => 'loose'
            ],
            'plugins.admin.popularity.history.visitors' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.VISITORS_HISTORY',
                'default' => 20,
                'name' => 'plugins.admin.popularity.history.visitors',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia' => [
                'type' => '_parent',
                'name' => 'plugins.admin.pagemedia',
                'form_field' => false
            ],
            'plugins.admin.pagemedia.resize_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RESIZE_WIDTH',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.resize_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.resize_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RESIZE_HEIGHT',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.resize_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_min_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RES_MIN_WIDTH',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_min_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_min_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RES_MIN_HEIGHT',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_min_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_max_width' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RES_MAX_WIDTH',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_max_width',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.res_max_height' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => 'PLUGIN_ADMIN.PIXELS',
                'label' => 'PLUGIN_ADMIN.RES_MAX_HEIGHT',
                'default' => 0,
                'validate' => [
                    'type' => 'number'
                ],
                'name' => 'plugins.admin.pagemedia.res_max_height',
                'validation' => 'loose'
            ],
            'plugins.admin.pagemedia.resize_quality' => [
                'type' => 'number',
                'size' => 'x-small',
                'append' => '0...1',
                'label' => 'PLUGIN_ADMIN.RESIZE_QUALITY',
                'default' => 0.8,
                'validate' => [
                    'type' => 'number',
                    'step' => 0.01
                ],
                'name' => 'plugins.admin.pagemedia.resize_quality',
                'validation' => 'loose'
            ],
            'plugins.sitemap' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.sitemap.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.enabled',
                'validation' => 'strict'
            ],
            'plugins.sitemap.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_SITEMAP.ROUTE',
                'validate' => [
                    'pattern' => '/([a-z-_]+/?)+'
                ],
                'name' => 'plugins.sitemap.route',
                'validation' => 'strict'
            ],
            'plugins.sitemap.multilang_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.MULTILANG_ENABLED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.multilang_enabled',
                'validation' => 'strict'
            ],
            'plugins.sitemap.ignore_external' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.IGNORE_EXTERNAL',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.ignore_external',
                'validation' => 'strict'
            ],
            'plugins.sitemap.ignore_protected' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.IGNORE_PROTECTED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.ignore_protected',
                'validation' => 'strict'
            ],
            'plugins.sitemap.ignore_redirect' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.IGNORE_REDIRECT',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.ignore_redirect',
                'validation' => 'strict'
            ],
            'plugins.sitemap.xsl_transform' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.XSL_TRANSFORM',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.xsl_transform',
                'validation' => 'strict'
            ],
            'plugins.sitemap.html_support' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.HTML_SUPPORT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.html_support',
                'validation' => 'strict'
            ],
            'plugins.sitemap.ignores' => [
                'type' => 'array',
                'label' => 'PLUGIN_SITEMAP.IGNORES',
                'value_only' => true,
                'name' => 'plugins.sitemap.ignores',
                'validation' => 'strict'
            ],
            'plugins.sitemap.include_news_tags' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.INCLUDE_NEWS_TAGS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.include_news_tags',
                'validation' => 'strict'
            ],
            'plugins.sitemap.standalone_sitemap_news' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.STANDALONE_SITEMAP_NEWS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.standalone_sitemap_news',
                'validation' => 'strict'
            ],
            'plugins.sitemap.sitemap_news_path' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_SITEMAP.SITEMAP_NEWS_PATH',
                'name' => 'plugins.sitemap.sitemap_news_path',
                'validation' => 'strict'
            ],
            'plugins.sitemap.news_max_age_days' => [
                'type' => 'number',
                'default' => 2,
                'size' => 'x-small',
                'label' => 'PLUGIN_SITEMAP.NEWS_MAX_AGE_DAYS',
                'append' => 'Days',
                'validate' => [
                    'type' => 'int'
                ],
                'name' => 'plugins.sitemap.news_max_age_days',
                'validation' => 'strict'
            ],
            'plugins.sitemap.news_enabled_paths' => [
                'type' => 'array',
                'label' => 'PLUGIN_SITEMAP.NEWS_TAG_PATHS',
                'value_only' => true,
                'name' => 'plugins.sitemap.news_enabled_paths',
                'validation' => 'strict'
            ],
            'plugins.sitemap.date_type' => [
                'type' => 'select',
                'label' => 'PLUGIN_SITEMAP.DATE_TYPE',
                'default' => 'page_date',
                'size' => 'medium',
                'options' => [
                    'page_date' => 'PLUGIN_SITEMAP.DATE_TYPE_PAGE_DATE',
                    'last_modified' => 'PLUGIN_SITEMAP.DATE_TYPE_LAST_MODIFIED'
                ],
                'name' => 'plugins.sitemap.date_type',
                'validation' => 'strict'
            ],
            'plugins.sitemap.include_changefreq' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.INCLUDE_CHANGEFREQ',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.include_changefreq',
                'validation' => 'strict'
            ],
            'plugins.sitemap.changefreq' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_SITEMAP.CHANGEFREQ',
                'default' => '',
                'options' => [
                    '' => 'PLUGIN_SITEMAP.CHANGEFREQ_DEFAULT',
                    'always' => 'PLUGIN_SITEMAP.CHANGEFREQ_ALWAYS',
                    'hourly' => 'PLUGIN_SITEMAP.CHANGEFREQ_HOURLY',
                    'daily' => 'PLUGIN_SITEMAP.CHANGEFREQ_DAILY',
                    'weekly' => 'PLUGIN_SITEMAP.CHANGEFREQ_WEEKLY',
                    'monthly' => 'PLUGIN_SITEMAP.CHANGEFREQ_MONTHLY',
                    'yearly' => 'PLUGIN_SITEMAP.CHANGEFREQ_YEARLY',
                    'never' => 'PLUGIN_SITEMAP.CHANGEFREQ_NEVER'
                ],
                'name' => 'plugins.sitemap.changefreq',
                'validation' => 'strict'
            ],
            'plugins.sitemap.include_priority' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SITEMAP.INCLUDE_PRIORITY',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.sitemap.include_priority',
                'validation' => 'strict'
            ],
            'plugins.sitemap.priority' => [
                'type' => 'select',
                'label' => 'PLUGIN_SITEMAP.PRIORITY',
                'size' => 'small',
                'default' => '',
                'options' => [
                    '' => 'PLUGIN_SITEMAP.PRIORITY_USE_GLOBAL',
                    '0.1' => 0.1,
                    '0.2' => 0.2,
                    '0.3' => 0.3,
                    '0.4' => 0.4,
                    '0.5' => 0.5,
                    '0.6' => 0.6,
                    '0.7' => 0.7,
                    '0.8' => 0.8,
                    '0.9' => 0.9,
                    '1.0' => 1.0
                ],
                'validate' => [
                    'type' => 'float'
                ],
                'name' => 'plugins.sitemap.priority',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions' => [
                'array' => true,
                'type' => 'list',
                'label' => 'PLUGIN_SITEMAP.ADDITIONS',
                'name' => 'plugins.sitemap.additions',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.*' => [
                'type' => '_parent',
                'name' => 'plugins.sitemap.additions.*',
                'form_field' => false
            ],
            'plugins.sitemap.additions.*.location' => [
                'type' => 'text',
                'label' => 'PLUGIN_SITEMAP.LOCATION',
                'name' => 'plugins.sitemap.additions.*.location',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.*.lastmod' => [
                'type' => 'text',
                'label' => 'PLUGIN_SITEMAP.LASTMOD',
                'name' => 'plugins.sitemap.additions.*.lastmod',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.*.changefreq' => [
                'type' => 'select',
                'label' => 'PLUGIN_SITEMAP.CHANGEFREQ',
                'default' => '',
                'options' => [
                    '' => 'PLUGIN_SITEMAP.CHANGEFREQ_DEFAULT',
                    'always' => 'PLUGIN_SITEMAP.CHANGEFREQ_ALWAYS',
                    'hourly' => 'PLUGIN_SITEMAP.CHANGEFREQ_HOURLY',
                    'daily' => 'PLUGIN_SITEMAP.CHANGEFREQ_DAILY',
                    'weekly' => 'PLUGIN_SITEMAP.CHANGEFREQ_WEEKLY',
                    'monthly' => 'PLUGIN_SITEMAP.CHANGEFREQ_MONTHLY',
                    'yearly' => 'PLUGIN_SITEMAP.CHANGEFREQ_YEARLY',
                    'never' => 'PLUGIN_SITEMAP.CHANGEFREQ_NEVER'
                ],
                'name' => 'plugins.sitemap.additions.*.changefreq',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.*.priority' => [
                'type' => 'select',
                'label' => 'PLUGIN_SITEMAP.PRIORITY',
                'default' => '',
                'options' => [
                    '' => 'PLUGIN_SITEMAP.PRIORITY_USE_GLOBAL',
                    '0.1' => 0.1,
                    '0.2' => 0.2,
                    '0.3' => 0.3,
                    '0.4' => 0.4,
                    '0.5' => 0.5,
                    '0.6' => 0.6,
                    '0.7' => 0.7,
                    '0.8' => 0.8,
                    '0.9' => 0.9,
                    '1.0' => 1.0
                ],
                'validate' => [
                    'type' => 'float'
                ],
                'name' => 'plugins.sitemap.additions.*.priority',
                'validation' => 'strict'
            ],
            'plugins.sitemap.urlset' => [
                'type' => 'text',
                'default' => 'http://www.sitemaps.org/schemas/sitemap/0.9',
                'label' => 'PLUGIN_SITEMAP.URLSET',
                'name' => 'plugins.sitemap.urlset',
                'validation' => 'strict'
            ],
            'plugins.sitemap.urlimageset' => [
                'type' => 'text',
                'default' => 'http://www.google.com/schemas/sitemap-image/1.1',
                'label' => 'PLUGIN_SITEMAP.URLIMAGESET',
                'name' => 'plugins.sitemap.urlimageset',
                'validation' => 'strict'
            ],
            'plugins.sitemap.urlnewsset' => [
                'type' => 'text',
                'default' => 'http://www.google.com/schemas/sitemap-news/0.9',
                'label' => 'PLUGIN_SITEMAP.URLNEWSSET',
                'name' => 'plugins.sitemap.urlnewsset',
                'validation' => 'strict'
            ],
            'plugins.problems' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.problems.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.enabled',
                'validation' => 'strict'
            ],
            'plugins.problems.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_PROBLEMS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.problems.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.archives' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    
                ]
            ],
            'plugins.archives.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.enabled'
            ],
            'plugins.archives.built_in_css' => [
                'type' => 'toggle',
                'label' => 'Use built in CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.built_in_css'
            ],
            'plugins.archives.date_display_format' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Date Format',
                'default' => 'jS M Y',
                'options' => [
                    'F jS Y' => 'January 1st 2024',
                    'l jS of F' => 'Monday 1st of January',
                    'D, m M Y' => 'Mon, 01 Jan 2024',
                    'd-m-y' => '01-01-24',
                    'jS M Y' => '10th Feb 2024',
                    'F Y' => 'Jan 2024',
                    'Y' => '2024'
                ],
                'name' => 'plugins.archives.date_display_format'
            ],
            'plugins.archives.show_count' => [
                'type' => 'toggle',
                'label' => 'Show Count',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.archives.show_count'
            ],
            'plugins.archives.limit' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'Count Limit',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.archives.limit'
            ],
            'plugins.archives.taxonomy_names' => [
                'type' => 'array',
                'label' => 'Taxonomy Names',
                'name' => 'plugins.archives.taxonomy_names'
            ],
            'plugins.archives.taxonomy_values' => [
                'type' => 'array',
                'label' => 'Taxonomy Values (date format)',
                'name' => 'plugins.archives.taxonomy_values'
            ],
            'plugins.archives.order' => [
                'type' => '_parent',
                'name' => 'plugins.archives.order',
                'form_field' => false
            ],
            'plugins.archives.order.by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'options' => [
                    'default' => 'Default - based on folder name',
                    'title' => 'Title - based on title field in header',
                    'basename' => 'Basename - based on the alphabetic folder name',
                    'date' => 'Date - based on date field in header',
                    'modified' => 'Modified - based on the modified timestamp',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'random' => 'Random - order is randomized'
                ],
                'name' => 'plugins.archives.order.by'
            ],
            'plugins.archives.order.dir' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Order Direction',
                'default' => 'desc',
                'options' => [
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.order.dir'
            ],
            'plugins.archives.filters' => [
                'type' => 'textarea',
                'yaml' => true,
                'label' => 'Filter',
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'plugins.archives.filters'
            ],
            'plugins.archives.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => 'and',
                'options' => [
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.filter_combinator'
            ],
            'plugins.archives.page_specific_config' => [
                'array' => true,
                'type' => 'list',
                'label' => 'Configurations',
                'name' => 'plugins.archives.page_specific_config'
            ],
            'plugins.archives.page_specific_config.*' => [
                'type' => '_parent',
                'name' => 'plugins.archives.page_specific_config.*',
                'form_field' => false
            ],
            'plugins.archives.page_specific_config.*.route' => [
                'type' => 'text',
                'label' => 'Route',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.archives.page_specific_config.*.route'
            ],
            'plugins.archives.page_specific_config.*.filters' => [
                'type' => 'textarea',
                'yaml' => true,
                'label' => 'Filter',
                'validate' => [
                    'type' => 'yaml'
                ],
                'name' => 'plugins.archives.page_specific_config.*.filters'
            ],
            'plugins.archives.page_specific_config.*.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Filter Combinator',
                'default' => '',
                'options' => [
                    '' => 'Use Default',
                    'and' => 'And - Boolean &&',
                    'or' => 'Or - Boolean ||'
                ],
                'name' => 'plugins.archives.page_specific_config.*.filter_combinator'
            ],
            'plugins.archives.page_specific_config.*.order_by' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Order Type',
                'default' => '',
                'options' => [
                    '' => 'Use Default',
                    'default' => 'Default - based on folder name',
                    'title' => 'Title - based on title field in header',
                    'basename' => 'Basename - based on the alphabetic folder name',
                    'date' => 'Date - based on date field in header',
                    'modified' => 'Modified - based on the modified timestamp',
                    'folder' => 'Folder - based on prefix-less folder name',
                    'random' => 'Random - order is randomized'
                ],
                'name' => 'plugins.archives.page_specific_config.*.order_by'
            ],
            'plugins.archives.page_specific_config.*.order_dir' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'Order Direction',
                'default' => '',
                'options' => [
                    '' => 'Use Default',
                    'asc' => 'Ascending',
                    'desc' => 'Descending'
                ],
                'name' => 'plugins.archives.page_specific_config.*.order_dir'
            ],
            'plugins.feed' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.feed.enabled' => [
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
                ],
                'name' => 'plugins.feed.enabled',
                'validation' => 'strict'
            ],
            'plugins.feed.limit' => [
                'type' => 'range',
                'label' => 'Feed count',
                'validate' => [
                    'type' => 'number',
                    'min' => 10,
                    'max' => 1000
                ],
                'name' => 'plugins.feed.limit',
                'validation' => 'strict'
            ],
            'plugins.feed.title' => [
                'type' => 'text',
                'label' => 'Title',
                'name' => 'plugins.feed.title',
                'validation' => 'strict'
            ],
            'plugins.feed.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'plugins.feed.description',
                'validation' => 'strict'
            ],
            'plugins.feed.length' => [
                'type' => 'range',
                'label' => 'Feed Length (0 for full-text feed)',
                'validate' => [
                    'type' => 'number',
                    'min' => 0,
                    'max' => 10000
                ],
                'name' => 'plugins.feed.length',
                'validation' => 'strict'
            ],
            'plugins.feed.enable_json_feed' => [
                'type' => 'toggle',
                'label' => 'JSON feed support',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.enable_json_feed',
                'validation' => 'strict'
            ],
            'plugins.feed.show_last_modified' => [
                'type' => 'toggle',
                'label' => 'Show last modified date',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.feed.show_last_modified',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.shortcode-core.enabled' => [
                'type' => 'toggle',
                'label' => 'Plugin Enabled',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active' => [
                'type' => 'toggle',
                'label' => 'Activated',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.active_admin' => [
                'type' => 'toggle',
                'label' => 'Activated in Admin',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.active_admin',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.admin_pages_only' => [
                'type' => 'toggle',
                'label' => 'Admin Real-Pages Only',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.admin_pages_only',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.parser' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'Processor',
                'options' => [
                    'wordpress' => 'WordpressParser',
                    'regex' => 'RegexParser',
                    'regular' => 'RegularParser'
                ],
                'name' => 'plugins.shortcode-core.parser',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.custom_shortcodes' => [
                'type' => 'text',
                'label' => 'Custom Shortcodes',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.custom_shortcodes',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.css' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-core.css',
                'form_field' => false
            ],
            'plugins.shortcode-core.css.notice_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Notice Shortcode CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.css.notice_enabled',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome' => [
                'type' => '_parent',
                'name' => 'plugins.shortcode-core.fontawesome',
                'form_field' => false
            ],
            'plugins.shortcode-core.fontawesome.load' => [
                'type' => 'toggle',
                'label' => 'Load Fontawesome Library',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.load',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.url' => [
                'type' => 'text',
                'label' => 'Fontawesome URL',
                'size' => 'large',
                'name' => 'plugins.shortcode-core.fontawesome.url',
                'validation' => 'strict'
            ],
            'plugins.shortcode-core.fontawesome.v5' => [
                'type' => 'toggle',
                'label' => 'Use Fontawesome Version 5',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'Enabled',
                    0 => 'Disabled'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.shortcode-core.fontawesome.v5',
                'validation' => 'strict'
            ],
            'plugins.seo' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.seo.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.enabled',
                'validation' => 'strict'
            ],
            'plugins.seo.facebookid' => [
                'type' => 'text',
                'label' => 'Facebook App ID',
                'name' => 'plugins.seo.facebookid',
                'validation' => 'strict'
            ],
            'plugins.seo.twitterid' => [
                'type' => 'text',
                'label' => 'Twitter ID',
                'name' => 'plugins.seo.twitterid',
                'validation' => 'strict'
            ],
            'plugins.seo.twitter_default' => [
                'type' => 'toggle',
                'label' => 'On page creation, enable twitter metadata?',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'plugins.seo.twitter_default',
                'validation' => 'strict'
            ],
            'plugins.seo.facebook_default' => [
                'type' => 'toggle',
                'label' => 'On page creation, enable facebook metadata?',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'plugins.seo.facebook_default',
                'validation' => 'strict'
            ],
            'plugins.seo.article' => [
                'type' => 'toggle',
                'label' => 'Enable Article Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.article',
                'validation' => 'strict'
            ],
            'plugins.seo.event' => [
                'type' => 'toggle',
                'label' => 'Enable Event Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.event',
                'validation' => 'strict'
            ],
            'plugins.seo.restaurant' => [
                'type' => 'toggle',
                'label' => 'Enable Restaurant Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.restaurant',
                'validation' => 'strict'
            ],
            'plugins.seo.musicevent' => [
                'type' => 'toggle',
                'label' => 'Enable Music Event Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.musicevent',
                'validation' => 'strict'
            ],
            'plugins.seo.customjson' => [
                'type' => 'toggle',
                'label' => 'Enable Custom Json Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.customjson',
                'validation' => 'strict'
            ],
            'plugins.seo.person' => [
                'type' => 'toggle',
                'label' => 'Enable Person Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.person',
                'validation' => 'strict'
            ],
            'plugins.seo.organization' => [
                'type' => 'toggle',
                'label' => 'Enable Organization Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.organization',
                'validation' => 'strict'
            ],
            'plugins.seo.musicalbum' => [
                'type' => 'toggle',
                'label' => 'Enable Music Album Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.musicalbum',
                'validation' => 'strict'
            ],
            'plugins.seo.product' => [
                'type' => 'toggle',
                'label' => 'Enable Product Microdata',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.seo.product',
                'validation' => 'strict'
            ],
            'plugins.error' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.error.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.error.enabled',
                'validation' => 'strict'
            ],
            'plugins.error.routes' => [
                'type' => '_parent',
                'name' => 'plugins.error.routes',
                'form_field' => false
            ],
            'plugins.error.routes.404' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_ERROR.ROUTE_404',
                'default' => '/error',
                'name' => 'plugins.error.routes.404',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.breadcrumbs.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.enabled',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.show_all' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_BREADCRUMBS.SHOW_WITH_ONE_ITEM',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.show_all',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_BREADCRUMBS.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.include_home' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_BREADCRUMBS.INCLUDE_HOME',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.include_current' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_BREADCRUMBS.INCLUDE_CURRENT_PAGE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.include_current',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_home' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_BREADCRUMBS.ICON_HOME',
                'default' => '',
                'name' => 'plugins.breadcrumbs.icon_home',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.icon_divider_classes' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_BREADCRUMBS.ICON_DIVIDER_CLASSES',
                'default' => 'fa fa-angle-right',
                'name' => 'plugins.breadcrumbs.icon_divider_classes',
                'validation' => 'strict'
            ],
            'plugins.breadcrumbs.link_trailing' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_BREADCRUMBS.LINK_TRAILING',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.breadcrumbs.link_trailing',
                'validation' => 'strict'
            ],
            'plugins.login' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.login.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_LOGIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.built_in_css',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_to_login' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_TO_LOGIN',
                'default' => 0,
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_to_login',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_login' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGIN',
                'force_bool' => true,
                'default' => 0,
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.redirect_after_logout' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_LOGOUT',
                'force_bool' => true,
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.redirect_after_logout',
                'validation' => 'loose'
            ],
            'plugins.login.parent_acl' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.USE_PARENT_ACL_LABEL',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.parent_acl',
                'validation' => 'loose'
            ],
            'plugins.login.dynamic_page_visibility' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.DYNAMIC_VISIBILITY',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.dynamic_page_visibility',
                'validation' => 'loose'
            ],
            'plugins.login.twofa_enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.2FA_ENABLED',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.twofa_enabled',
                'validation' => 'loose'
            ],
            'plugins.login.protect_protected_page_media' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.PROTECT_PROTECTED_PAGE_MEDIA_LABEL',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.protect_protected_page_media',
                'validation' => 'loose'
            ],
            'plugins.login.session_user_sync' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SESSION_USER_SYNC',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.session_user_sync',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme' => [
                'type' => '_parent',
                'name' => 'plugins.login.rememberme',
                'form_field' => false
            ],
            'plugins.login.rememberme.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.rememberme.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.timeout' => [
                'type' => 'text',
                'size' => 'small',
                'default' => 604800,
                'label' => 'PLUGIN_ADMIN.TIMEOUT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.rememberme.timeout',
                'validation' => 'loose'
            ],
            'plugins.login.rememberme.name' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_ADMIN.NAME',
                'name' => 'plugins.login.rememberme.name',
                'validation' => 'loose'
            ],
            'plugins.login.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE',
                'name' => 'plugins.login.route',
                'validation' => 'loose'
            ],
            'plugins.login.route_after_login' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGIN',
                'name' => 'plugins.login.route_after_login',
                'validation' => 'loose'
            ],
            'plugins.login.route_after_logout' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_AFTER_LOGOUT',
                'name' => 'plugins.login.route_after_logout',
                'validation' => 'loose'
            ],
            'plugins.login.route_forgot' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_FORGOT',
                'name' => 'plugins.login.route_forgot',
                'validation' => 'loose'
            ],
            'plugins.login.route_reset' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_RESET',
                'name' => 'plugins.login.route_reset',
                'validation' => 'loose'
            ],
            'plugins.login.route_profile' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_PROFILE',
                'name' => 'plugins.login.route_profile',
                'validation' => 'loose'
            ],
            'plugins.login.route_activate' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_ACTIVATE',
                'name' => 'plugins.login.route_activate',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration',
                'form_field' => false
            ],
            'plugins.login.user_registration.redirect_after_activation' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_ACTIVATION',
                'name' => 'plugins.login.user_registration.redirect_after_activation',
                'validation' => 'loose'
            ],
            'plugins.login.route_register' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.ROUTE_REGISTER',
                'name' => 'plugins.login.route_register',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.redirect_after_registration' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.REDIRECT_AFTER_REGISTRATION',
                'name' => 'plugins.login.user_registration.redirect_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.enabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.ENABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.enabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.fields' => [
                'type' => 'array',
                'value_only' => true,
                'label' => 'PLUGIN_LOGIN.REGISTRATION_FIELDS',
                'name' => 'plugins.login.user_registration.fields',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.default_values' => [
                'type' => 'array',
                'label' => 'PLUGIN_LOGIN.DEFAULT_VALUES',
                'name' => 'plugins.login.user_registration.default_values',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.groups' => [
                'type' => 'select',
                'multiple' => true,
                'size' => 'large',
                'label' => 'PLUGIN_ADMIN.GROUPS',
                'data-options@' => 'Grav\\Common\\Flex\\Types\\UserGroups\\UserGroupObject::groupNames',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.login.user_registration.groups',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.access' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.access',
                'form_field' => false
            ],
            'plugins.login.user_registration.access.site' => [
                'type' => 'array',
                'label' => 'PLUGIN_ADMIN.SITE_ACCESS',
                'multiple' => false,
                'validate' => [
                    'type' => 'array'
                ],
                'name' => 'plugins.login.user_registration.access.site',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options' => [
                'type' => '_parent',
                'name' => 'plugins.login.user_registration.options',
                'form_field' => false
            ],
            'plugins.login.user_registration.options.validate_password1_and_password2' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.VALIDATE_PASSWORD1_AND_PASSWORD2',
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.set_user_disabled' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SET_USER_DISABLED',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.set_user_disabled',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.login_after_registration' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.LOGIN_AFTER_REGISTRATION',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.login_after_registration',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_activation_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_ACTIVATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_activation_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.manually_enable' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.MANUALLY_ENABLE',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.manually_enable',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_notification_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_NOTIFICATION_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_notification_email',
                'validation' => 'loose'
            ],
            'plugins.login.user_registration.options.send_welcome_email' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_LOGIN.SEND_WELCOME_EMAIL',
                'highlight' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.YES',
                    0 => 'PLUGIN_ADMIN.NO'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.login.user_registration.options.send_welcome_email',
                'validation' => 'loose'
            ],
            'plugins.login.site_host' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_LOGIN.SITE_HOST',
                'name' => 'plugins.login.site_host',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_COUNT',
                'append' => 'PLUGIN_LOGIN.RESETS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_pw_resets_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_pw_resets_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_RESETS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_pw_resets_interval',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_count' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_COUNT',
                'append' => 'PLUGIN_LOGIN.ATTEMPTS',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.login.max_login_count',
                'validation' => 'loose'
            ],
            'plugins.login.max_login_interval' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.MAX_LOGINS_INTERVAL',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.max_login_interval',
                'validation' => 'loose'
            ],
            'plugins.login.ipv6_subnet_size' => [
                'type' => 'number',
                'size' => 'x-small',
                'label' => 'PLUGIN_LOGIN.IPV6_SUBNET_SIZE',
                'append' => 'PLUGIN_LOGIN.MINUTES',
                'validate' => [
                    'type' => 'number',
                    'min' => 1
                ],
                'name' => 'plugins.login.ipv6_subnet_size',
                'validation' => 'loose'
            ],
            'plugins.email' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.email.enabled' => [
                'type' => 'hidden',
                'label' => 'PLUGIN_ADMIN.PLUGIN_STATUS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.enabled',
                'validation' => 'loose'
            ],
            'plugins.email.mailer' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer',
                'form_field' => false
            ],
            'plugins.email.mailer.engine' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.MAIL_ENGINE',
                'size' => 'medium',
                'description' => 'PLUGIN_EMAIL.MAIL_ENGINE_DESC',
                'data-options@' => '\\Grav\\Plugin\\EmailPlugin::getEngines',
                'name' => 'plugins.email.mailer.engine',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.smtp',
                'form_field' => false
            ],
            'plugins.email.mailer.smtp.server' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_SERVER',
                'name' => 'plugins.email.mailer.smtp.server',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.port' => [
                'type' => 'text',
                'size' => 'small',
                'label' => 'PLUGIN_EMAIL.SMTP_PORT',
                'validate' => [
                    'type' => 'number',
                    'min' => 1,
                    'max' => 65535
                ],
                'name' => 'plugins.email.mailer.smtp.port',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.encryption' => [
                'type' => 'select',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION',
                'options' => [
                    'none' => 'PLUGIN_EMAIL.SMTP_ENCRYPTION_NONE',
                    'ssl' => 'SSL',
                    'tls' => 'TLS'
                ],
                'name' => 'plugins.email.mailer.smtp.encryption',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.user' => [
                'type' => 'text',
                'size' => 'medium',
                'autocomplete' => 'off',
                'label' => 'PLUGIN_EMAIL.SMTP_LOGIN_NAME',
                'name' => 'plugins.email.mailer.smtp.user',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.smtp.password' => [
                'type' => 'password',
                'size' => 'medium',
                'autocomplete' => 'new-password',
                'label' => 'PLUGIN_EMAIL.SMTP_PASSWORD',
                'name' => 'plugins.email.mailer.smtp.password',
                'validation' => 'loose'
            ],
            'plugins.email.mailer.sendmail' => [
                'type' => '_parent',
                'name' => 'plugins.email.mailer.sendmail',
                'form_field' => false
            ],
            'plugins.email.mailer.sendmail.bin' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_EMAIL.PATH_TO_SENDMAIL',
                'name' => 'plugins.email.mailer.sendmail.bin',
                'validation' => 'loose'
            ],
            'plugins.email.content_type' => [
                'type' => 'select',
                'label' => 'PLUGIN_EMAIL.CONTENT_TYPE',
                'size' => 'medium',
                'default' => 'text/html',
                'options' => [
                    'text/plain' => 'PLUGIN_EMAIL.CONTENT_TYPE_PLAIN_TEXT',
                    'text/html' => 'HTML'
                ],
                'name' => 'plugins.email.content_type',
                'validation' => 'loose'
            ],
            'plugins.email.from' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_FORM',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.email.from',
                'validation' => 'loose'
            ],
            'plugins.email.to' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_TO',
                'validate' => [
                    'required' => true
                ],
                'name' => 'plugins.email.to',
                'validation' => 'loose'
            ],
            'plugins.email.cc' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_CC',
                'name' => 'plugins.email.cc',
                'validation' => 'loose'
            ],
            'plugins.email.bcc' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_BCC',
                'name' => 'plugins.email.bcc',
                'validation' => 'loose'
            ],
            'plugins.email.reply_to' => [
                'type' => 'text',
                'size' => 'large',
                'label' => 'PLUGIN_EMAIL.EMAIL_REPLY_TO',
                'name' => 'plugins.email.reply_to',
                'validation' => 'loose'
            ],
            'plugins.email.body' => [
                'type' => 'textarea',
                'size' => 'large',
                'rows' => 10,
                'label' => 'PLUGIN_EMAIL.EMAIL_BODY',
                'name' => 'plugins.email.body',
                'validation' => 'loose'
            ],
            'plugins.email.debug' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_EMAIL.DEBUG',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.email.debug',
                'validation' => 'loose'
            ],
            'plugins.taxonomylist' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.taxonomylist.enabled' => [
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
                ],
                'name' => 'plugins.taxonomylist.enabled',
                'validation' => 'strict'
            ],
            'plugins.taxonomylist.route' => [
                'type' => 'text',
                'label' => 'Route to blog',
                'validate' => [
                    'pattern' => '/([a-z\\-_]+/?)+'
                ],
                'name' => 'plugins.taxonomylist.route',
                'validation' => 'strict'
            ],
            'themes.nur-ul-huda' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'themes' => [
                'type' => '_parent',
                'name' => 'themes',
                'form_field' => false
            ],
            'themes.nur-ul-huda.direction' => [
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
                'name' => 'themes.nur-ul-huda.direction',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.language' => [
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
                'name' => 'themes.nur-ul-huda.language',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.number_format' => [
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
                'name' => 'themes.nur-ul-huda.number_format',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.date_calendar' => [
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
                'name' => 'themes.nur-ul-huda.date_calendar',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.production-mode' => [
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
                ],
                'name' => 'themes.nur-ul-huda.production-mode',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.primary_spirit_color' => [
                'type' => 'colorpicker',
                'label' => 'Primary Spirit Color',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'oklch(0.55 0.18 165)',
                'name' => 'themes.nur-ul-huda.primary_spirit_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.accent_color' => [
                'type' => 'colorpicker',
                'label' => 'Accent Color',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'oklch(0.85 0.15 85)',
                'name' => 'themes.nur-ul-huda.accent_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.custom_fonts' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'Custom Fonts Library',
                'style' => 'vertical',
                'width' => '33%',
                'destination' => 'theme://fonts/custom',
                'multiple' => true,
                'accept' => [
                    0 => '.ttf',
                    1 => '.woff',
                    2 => '.woff2'
                ],
                'name' => 'themes.nur-ul-huda.custom_fonts',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.font_heading' => [
                'type' => 'select',
                'label' => 'Heading Font Family',
                'style' => 'vertical',
                'width' => '33%',
                'default' => '\'PlusJakartaSans-VariableFont_wght\', sans-serif',
                'data-options@' => '\\Grav\\Theme\\NurUlHuda::getFontOptions',
                'name' => 'themes.nur-ul-huda.font_heading',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.font_body' => [
                'type' => 'select',
                'label' => 'Body Font Family',
                'style' => 'vertical',
                'width' => '33%',
                'default' => '\'Outfit-VariableFont_wght\', sans-serif',
                'data-options@' => '\\Grav\\Theme\\NurUlHuda::getFontOptions',
                'name' => 'themes.nur-ul-huda.font_body',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.header_tab' => [
                'validation' => 'loose',
                'name' => 'themes.nur-ul-huda.header_tab',
                'type' => ''
            ],
            'themes.nur-ul-huda.top_banner_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.top_banner_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_bg_color' => [
                'type' => 'colorpicker',
                'label' => 'Banner Background Color',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'oklch(0.2 0.02 260)',
                'name' => 'themes.nur-ul-huda.top_banner_bg_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_text_color' => [
                'type' => 'colorpicker',
                'label' => 'Banner Text Color',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'oklch(0.85 0.15 85)',
                'name' => 'themes.nur-ul-huda.top_banner_text_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_glass' => [
                'type' => 'toggle',
                'label' => 'Glassmorphism Effect',
                'style' => 'vertical',
                'width' => '33%',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_glass',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_border' => [
                'type' => 'select',
                'label' => 'Border Style',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'bottom',
                'options' => [
                    'none' => 'None',
                    'solid' => 'Solid (Full)',
                    'bottom' => 'Bottom Only'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_border',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_widgets_order' => [
                'type' => 'selectize',
                'label' => 'Widget Order',
                'default' => [
                    0 => 'date',
                    1 => 'prayer',
                    2 => 'hijri'
                ],
                'options' => [
                    'date' => 'Gregorian Date',
                    'prayer' => 'Upcoming Namaz Timing',
                    'hijri' => 'Hijri Date'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_widgets_order',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_mobile_hide' => [
                'type' => 'selectize',
                'label' => 'Hide on Mobile',
                'default' => [
                    
                ],
                'options' => [
                    'date' => 'Gregorian Date',
                    'prayer' => 'Upcoming Namaz Timing',
                    'hijri' => 'Hijri Date'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_mobile_hide',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Ticker',
                'style' => 'vertical',
                'width' => '25%',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_announcement_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_text' => [
                'type' => 'text',
                'label' => 'Ticker Message',
                'style' => 'vertical',
                'width' => '50%',
                'name' => 'themes.nur-ul-huda.top_banner_announcement_text',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_starts' => [
                'type' => 'datetime',
                'label' => 'Ticker Start (Start Date/Time)',
                'style' => 'vertical',
                'width' => '25%',
                'name' => 'themes.nur-ul-huda.top_banner_announcement_starts',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_expires' => [
                'type' => 'datetime',
                'label' => 'Ticker Expiration (End Date/Time)',
                'style' => 'vertical',
                'width' => '25%',
                'name' => 'themes.nur-ul-huda.top_banner_announcement_expires',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_speed' => [
                'type' => 'range',
                'label' => 'Scrolling Speed',
                'style' => 'vertical',
                'width' => '50%',
                'default' => 20,
                'min' => 5,
                'max' => 60,
                'step' => 1,
                'name' => 'themes.nur-ul-huda.top_banner_announcement_speed',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_bg_color' => [
                'type' => 'colorpicker',
                'label' => 'Ticker Strip Color',
                'style' => 'vertical',
                'width' => '50%',
                'default' => 'oklch(0.55 0.25 25)',
                'name' => 'themes.nur-ul-huda.top_banner_announcement_bg_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_text_color' => [
                'type' => 'colorpicker',
                'label' => 'Ticker Text Color',
                'style' => 'vertical',
                'width' => '50%',
                'default' => 'oklch(0.98 0 0)',
                'name' => 'themes.nur-ul-huda.top_banner_announcement_text_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.top_banner_announcement_pause' => [
                'type' => 'toggle',
                'label' => 'Pause on Hover',
                'style' => 'vertical',
                'width' => '50%',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.nur-ul-huda.top_banner_announcement_pause',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.theme_colors_tab' => [
                'validation' => 'loose',
                'name' => 'themes.nur-ul-huda.theme_colors_tab',
                'type' => ''
            ],
            'themes.nur-ul-huda.bottom_banner_show_logo' => [
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
                ],
                'name' => 'themes.nur-ul-huda.bottom_banner_show_logo',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.bottom_banner_show_site_name' => [
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
                ],
                'name' => 'themes.nur-ul-huda.bottom_banner_show_site_name',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.bottom_banner_show_tagline' => [
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
                ],
                'name' => 'themes.nur-ul-huda.bottom_banner_show_tagline',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.bottom_banner_copyright' => [
                'type' => 'textarea',
                'label' => 'Copyright Text',
                'style' => 'vertical',
                'width' => '33%',
                'rows' => 3,
                'name' => 'themes.nur-ul-huda.bottom_banner_copyright',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.bottom_banner_widgets_order' => [
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
                'name' => 'themes.nur-ul-huda.bottom_banner_widgets_order',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.newsletter_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Newsletter',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 1,
                'highlight' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.nur-ul-huda.newsletter_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.newsletter_title' => [
                'type' => 'text',
                'label' => 'Newsletter Title',
                'width' => '33%',
                'default' => 'Stay Connected',
                'name' => 'themes.nur-ul-huda.newsletter_title',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.newsletter_text' => [
                'type' => 'text',
                'label' => 'Newsletter Description',
                'width' => '33%',
                'default' => 'Join our spiritual journey for weekly insights.',
                'name' => 'themes.nur-ul-huda.newsletter_text',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_facebook' => [
                'type' => 'text',
                'label' => 'Facebook',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_facebook',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_facebook_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_facebook_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_twitter' => [
                'type' => 'text',
                'label' => 'Twitter',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_twitter',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_twitter_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_twitter_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_instagram' => [
                'type' => 'text',
                'label' => 'Instagram',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_instagram',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_instagram_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_instagram_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_youtube' => [
                'type' => 'text',
                'label' => 'YouTube',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_youtube',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_youtube_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_youtube_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_telegram' => [
                'type' => 'text',
                'label' => 'Telegram',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_telegram',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_telegram_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_telegram_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_linkedin' => [
                'type' => 'text',
                'label' => 'LinkedIn',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_linkedin',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_linkedin_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_linkedin_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_tiktok' => [
                'type' => 'text',
                'label' => 'TikTok',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_tiktok',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_tiktok_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_tiktok_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_pinterest' => [
                'type' => 'text',
                'label' => 'Pinterest',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_pinterest',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_pinterest_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_pinterest_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_snapchat' => [
                'type' => 'text',
                'label' => 'Snapchat',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_snapchat',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_snapchat_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_snapchat_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_spotify' => [
                'type' => 'text',
                'label' => 'Spotify',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_spotify',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_spotify_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_spotify_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_discord' => [
                'type' => 'text',
                'label' => 'Discord Invite',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_discord',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_discord_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_discord_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_google_maps' => [
                'type' => 'text',
                'label' => 'Google Maps',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_google_maps',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_google_maps_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_google_maps_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_whatsapp' => [
                'type' => 'text',
                'label' => 'WhatsApp',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'URL'
                ],
                'name' => 'themes.nur-ul-huda.social_whatsapp',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_whatsapp_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_whatsapp_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_phone' => [
                'type' => 'text',
                'label' => 'Phone',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'text'
                ],
                'name' => 'themes.nur-ul-huda.social_phone',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_phone_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_phone_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_email' => [
                'type' => 'text',
                'label' => 'Email',
                'style' => 'vertical',
                'width' => '100%',
                'validate' => [
                    'type' => 'email'
                ],
                'name' => 'themes.nur-ul-huda.social_email',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_email_enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.social_email_enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_show_labels_mobile' => [
                'type' => 'toggle',
                'label' => 'Show Names on Mobile',
                'style' => 'vertical',
                'width' => '50%',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.nur-ul-huda.social_show_labels_mobile',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.social_show_labels_desktop' => [
                'type' => 'toggle',
                'label' => 'Show Names on Desktop',
                'style' => 'vertical',
                'width' => '50%',
                'highlight' => 1,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.nur-ul-huda.social_show_labels_desktop',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.sidebar_tab' => [
                'validation' => 'loose',
                'name' => 'themes.nur-ul-huda.sidebar_tab',
                'type' => ''
            ],
            'themes.nur-ul-huda.glass_bg_color' => [
                'type' => 'colorpicker',
                'label' => 'Base Color',
                'style' => 'vertical',
                'width' => '33%',
                'default' => '#ffffff',
                'name' => 'themes.nur-ul-huda.glass_bg_color',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.glass_opacity' => [
                'type' => 'range',
                'label' => 'Opacity %',
                'style' => 'vertical',
                'width' => '33%',
                'validate' => [
                    'min' => 10,
                    'max' => 90
                ],
                'default' => 65,
                'name' => 'themes.nur-ul-huda.glass_opacity',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.glass_blur' => [
                'type' => 'range',
                'label' => 'Blur Radius (px)',
                'style' => 'vertical',
                'width' => '33%',
                'validate' => [
                    'min' => 0,
                    'max' => 50
                ],
                'default' => 16,
                'name' => 'themes.nur-ul-huda.glass_blur',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.glass_border_opacity' => [
                'type' => 'range',
                'label' => 'Border Opacity %',
                'style' => 'vertical',
                'width' => '33%',
                'validate' => [
                    'min' => 0,
                    'max' => 100
                ],
                'default' => 15,
                'name' => 'themes.nur-ul-huda.glass_border_opacity',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.glass_highlight' => [
                'type' => 'range',
                'label' => 'Specular Highlight %',
                'style' => 'vertical',
                'width' => '33%',
                'validate' => [
                    'min' => 0,
                    'max' => 100
                ],
                'default' => 40,
                'name' => 'themes.nur-ul-huda.glass_highlight',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.glass_noise' => [
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
                'name' => 'themes.nur-ul-huda.glass_noise',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.prayer_method' => [
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
                ],
                'name' => 'themes.nur-ul-huda.prayer_method',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.hijri_offset' => [
                'type' => 'number',
                'label' => 'Hijri Calibration',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 0,
                'name' => 'themes.nur-ul-huda.hijri_offset',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.adhan_media' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'Adhan Media',
                'style' => 'vertical',
                'width' => '33%',
                'destination' => 'theme://media',
                'multiple' => false,
                'accept' => [
                    0 => '.mp3'
                ],
                'name' => 'themes.nur-ul-huda.adhan_media',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.default_location' => [
                'type' => 'text',
                'label' => 'Geo-Location Default',
                'style' => 'vertical',
                'width' => '33%',
                'default' => 'Karachi',
                'name' => 'themes.nur-ul-huda.default_location',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.moodle_url' => [
                'type' => 'text',
                'label' => 'Moodle URL',
                'style' => 'vertical',
                'width' => '33%',
                'name' => 'themes.nur-ul-huda.moodle_url',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.moodle_token' => [
                'type' => 'password',
                'label' => 'Web Service API Token',
                'style' => 'vertical',
                'width' => '33%',
                'name' => 'themes.nur-ul-huda.moodle_token',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.snipcart_key' => [
                'type' => 'text',
                'label' => 'Snipcart Public API Key',
                'style' => 'vertical',
                'width' => '33%',
                'name' => 'themes.nur-ul-huda.snipcart_key',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.jazzcash_merchant' => [
                'type' => 'text',
                'label' => 'JazzCash Merchant ID',
                'style' => 'vertical',
                'width' => '33%',
                'name' => 'themes.nur-ul-huda.jazzcash_merchant',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.jazzcash_salt' => [
                'type' => 'password',
                'label' => 'JazzCash Integrity Salt',
                'style' => 'vertical',
                'width' => '33%',
                'name' => 'themes.nur-ul-huda.jazzcash_salt',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.components_tab' => [
                'validation' => 'loose',
                'name' => 'themes.nur-ul-huda.components_tab',
                'type' => ''
            ],
            'themes.nur-ul-huda.custom_logo' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'Desktop Logo',
                'style' => 'vertical',
                'width' => '33%',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.nur-ul-huda.custom_logo',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.custom_logo_mobile' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'Mobile Logo',
                'style' => 'vertical',
                'width' => '33%',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.nur-ul-huda.custom_logo_mobile',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.favicon' => [
                'array' => true,
                'media_field' => true,
                'validate' => [
                    'type' => 'ignore'
                ],
                'type' => 'file',
                'label' => 'Favicon',
                'style' => 'vertical',
                'width' => '33%',
                'destination' => 'theme://images',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.nur-ul-huda.favicon',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.dropdown' => [
                'type' => '_parent',
                'name' => 'themes.nur-ul-huda.dropdown',
                'form_field' => false
            ],
            'themes.nur-ul-huda.dropdown.enabled' => [
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
                ],
                'name' => 'themes.nur-ul-huda.dropdown.enabled',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.grid-size' => [
                'type' => 'select',
                'label' => 'Grid Size',
                'style' => 'vertical',
                'width' => '33%',
                'default' => '',
                'options' => [
                    '' => 'None',
                    'grid-xl' => 'Extra Large',
                    'grid-lg' => 'Large',
                    'grid-md' => 'Medium'
                ],
                'name' => 'themes.nur-ul-huda.grid-size',
                'validation' => 'loose'
            ],
            'themes.nur-ul-huda.blog-page' => [
                'type' => 'text',
                'label' => 'Blog Page Path',
                'style' => 'vertical',
                'width' => '33%',
                'size' => 'medium',
                'default' => '/blog',
                'name' => 'themes.nur-ul-huda.blog-page',
                'validation' => 'loose'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'backups' => [
                'history' => 'backups.history',
                'purge' => [
                    'trigger' => 'backups.purge.trigger',
                    'max_backups_count' => 'backups.purge.max_backups_count',
                    'max_backups_space' => 'backups.purge.max_backups_space',
                    'max_backups_time' => 'backups.purge.max_backups_time'
                ],
                'profiles' => [
                    '*' => [
                        'name' => 'backups.profiles.*.name',
                        'root' => 'backups.profiles.*.root',
                        'exclude_paths' => 'backups.profiles.*.exclude_paths',
                        'exclude_files' => 'backups.profiles.*.exclude_files',
                        'schedule' => 'backups.profiles.*.schedule',
                        'schedule_at' => 'backups.profiles.*.schedule_at',
                        'schedule_environment' => 'backups.profiles.*.schedule_environment'
                    ]
                ]
            ],
            'media' => 'media',
            'scheduler' => [
                'status' => 'scheduler.status',
                'custom_jobs' => [
                    '*' => [
                        'command' => 'scheduler.custom_jobs.*.command',
                        'args' => 'scheduler.custom_jobs.*.args',
                        'at' => 'scheduler.custom_jobs.*.at',
                        'output' => 'scheduler.custom_jobs.*.output',
                        'output_mode' => 'scheduler.custom_jobs.*.output_mode',
                        'email' => 'scheduler.custom_jobs.*.email'
                    ]
                ],
                'modern' => [
                    'workers' => 'scheduler.modern.workers',
                    'retry' => [
                        'enabled' => 'scheduler.modern.retry.enabled',
                        'max_attempts' => 'scheduler.modern.retry.max_attempts',
                        'backoff' => 'scheduler.modern.retry.backoff'
                    ],
                    'queue' => [
                        'path' => 'scheduler.modern.queue.path',
                        'max_size' => 'scheduler.modern.queue.max_size'
                    ],
                    'history' => [
                        'enabled' => 'scheduler.modern.history.enabled',
                        'retention_days' => 'scheduler.modern.history.retention_days'
                    ],
                    'webhook' => [
                        'enabled' => 'scheduler.modern.webhook.enabled',
                        'token' => 'scheduler.modern.webhook.token',
                        'path' => 'scheduler.modern.webhook.path'
                    ],
                    'health' => [
                        'enabled' => 'scheduler.modern.health.enabled',
                        'path' => 'scheduler.modern.health.path'
                    ]
                ],
                'webhook_plugin_status' => 'scheduler.webhook_plugin_status'
            ],
            'security' => [
                'xss_whitelist' => 'security.xss_whitelist',
                'xss_enabled' => [
                    'on_events' => 'security.xss_enabled.on_events',
                    'invalid_protocols' => 'security.xss_enabled.invalid_protocols',
                    'moz_binding' => 'security.xss_enabled.moz_binding',
                    'html_inline_styles' => 'security.xss_enabled.html_inline_styles',
                    'dangerous_tags' => 'security.xss_enabled.dangerous_tags'
                ],
                'xss_invalid_protocols' => 'security.xss_invalid_protocols',
                'xss_dangerous_tags' => 'security.xss_dangerous_tags',
                'uploads_dangerous_extensions' => 'security.uploads_dangerous_extensions',
                'sanitize_svg' => 'security.sanitize_svg'
            ],
            'site' => [
                'title' => 'site.title',
                'default_lang' => 'site.default_lang',
                'author' => [
                    'name' => 'site.author.name',
                    'email' => 'site.author.email'
                ],
                'taxonomies' => 'site.taxonomies',
                'summary' => [
                    'enabled' => 'site.summary.enabled',
                    'size' => 'site.summary.size',
                    'format' => 'site.summary.format',
                    'delimiter' => 'site.summary.delimiter'
                ],
                'metadata' => 'site.metadata',
                'redirects' => 'site.redirects',
                'routes' => 'site.routes'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'home' => [
                    'alias' => 'system.home.alias',
                    'hide_in_urls' => 'system.home.hide_in_urls'
                ],
                'pages' => [
                    'theme' => 'system.pages.theme',
                    'process' => 'system.pages.process',
                    'types' => 'system.pages.types',
                    'dateformat' => [
                        'default' => 'system.pages.dateformat.default',
                        'short' => 'system.pages.dateformat.short',
                        'long' => 'system.pages.dateformat.long'
                    ],
                    'order' => [
                        'by' => 'system.pages.order.by',
                        'dir' => 'system.pages.order.dir'
                    ],
                    'list' => [
                        'count' => 'system.pages.list.count'
                    ],
                    'publish_dates' => 'system.pages.publish_dates',
                    'events' => 'system.pages.events',
                    'append_url_extension' => 'system.pages.append_url_extension',
                    'redirect_default_code' => 'system.pages.redirect_default_code',
                    'redirect_default_route' => 'system.pages.redirect_default_route',
                    'redirect_trailing_slash' => 'system.pages.redirect_trailing_slash',
                    'ignore_hidden' => 'system.pages.ignore_hidden',
                    'ignore_files' => 'system.pages.ignore_files',
                    'ignore_folders' => 'system.pages.ignore_folders',
                    'hide_empty_folders' => 'system.pages.hide_empty_folders',
                    'url_taxonomy_filters' => 'system.pages.url_taxonomy_filters',
                    'twig_first' => 'system.pages.twig_first',
                    'never_cache_twig' => 'system.pages.never_cache_twig',
                    'frontmatter' => [
                        'process_twig' => 'system.pages.frontmatter.process_twig',
                        'ignore_fields' => 'system.pages.frontmatter.ignore_fields'
                    ],
                    'expires' => 'system.pages.expires',
                    'cache_control' => 'system.pages.cache_control',
                    'last_modified' => 'system.pages.last_modified',
                    'etag' => 'system.pages.etag',
                    'vary_accept_encoding' => 'system.pages.vary_accept_encoding',
                    'markdown' => [
                        'extra' => 'system.pages.markdown.extra',
                        'auto_line_breaks' => 'system.pages.markdown.auto_line_breaks',
                        'auto_url_links' => 'system.pages.markdown.auto_url_links',
                        'escape_markup' => 'system.pages.markdown.escape_markup',
                        'valid_link_attributes' => 'system.pages.markdown.valid_link_attributes'
                    ]
                ],
                'timezone' => 'system.timezone',
                'languages' => [
                    'supported' => 'system.languages.supported',
                    'default_lang' => 'system.languages.default_lang',
                    'include_default_lang' => 'system.languages.include_default_lang',
                    'include_default_lang_file_extension' => 'system.languages.include_default_lang_file_extension',
                    'content_fallback' => 'system.languages.content_fallback',
                    'pages_fallback_only' => 'system.languages.pages_fallback_only',
                    'translations' => 'system.languages.translations',
                    'translations_fallback' => 'system.languages.translations_fallback',
                    'session_store_active' => 'system.languages.session_store_active',
                    'http_accept_language' => 'system.languages.http_accept_language',
                    'override_locale' => 'system.languages.override_locale',
                    'debug' => 'system.languages.debug'
                ],
                'value' => 'system.value',
                'cache' => [
                    'enabled' => 'system.cache.enabled',
                    'check' => [
                        'method' => 'system.cache.check.method',
                        'interval' => 'system.cache.check.interval'
                    ],
                    'driver' => 'system.cache.driver',
                    'prefix' => 'system.cache.prefix',
                    'purge_max_age_days' => 'system.cache.purge_max_age_days',
                    'purge_at' => 'system.cache.purge_at',
                    'clear_at' => 'system.cache.clear_at',
                    'clear_job_type' => 'system.cache.clear_job_type',
                    'clear_images_by_default' => 'system.cache.clear_images_by_default',
                    'cli_compatibility' => 'system.cache.cli_compatibility',
                    'lifetime' => 'system.cache.lifetime',
                    'gzip' => 'system.cache.gzip',
                    'allow_webserver_gzip' => 'system.cache.allow_webserver_gzip',
                    'memcached' => [
                        'server' => 'system.cache.memcached.server',
                        'port' => 'system.cache.memcached.port'
                    ],
                    'redis' => [
                        'socket' => 'system.cache.redis.socket',
                        'server' => 'system.cache.redis.server',
                        'port' => 'system.cache.redis.port',
                        'password' => 'system.cache.redis.password',
                        'database' => 'system.cache.redis.database'
                    ]
                ],
                'flex' => [
                    'cache' => [
                        'index' => [
                            'enabled' => 'system.flex.cache.index.enabled',
                            'lifetime' => 'system.flex.cache.index.lifetime'
                        ],
                        'object' => [
                            'enabled' => 'system.flex.cache.object.enabled',
                            'lifetime' => 'system.flex.cache.object.lifetime'
                        ],
                        'render' => [
                            'enabled' => 'system.flex.cache.render.enabled',
                            'lifetime' => 'system.flex.cache.render.lifetime'
                        ]
                    ]
                ],
                'twig' => [
                    'cache' => 'system.twig.cache',
                    'debug' => 'system.twig.debug',
                    'auto_reload' => 'system.twig.auto_reload',
                    'autoescape' => 'system.twig.autoescape'
                ],
                'assets' => [
                    'enable_asset_timestamp' => 'system.assets.enable_asset_timestamp',
                    'enable_asset_sri' => 'system.assets.enable_asset_sri',
                    'collections' => 'system.assets.collections',
                    'css_pipeline' => 'system.assets.css_pipeline',
                    'css_pipeline_include_externals' => 'system.assets.css_pipeline_include_externals',
                    'css_pipeline_before_excludes' => 'system.assets.css_pipeline_before_excludes',
                    'css_minify' => 'system.assets.css_minify',
                    'css_minify_windows' => 'system.assets.css_minify_windows',
                    'css_rewrite' => 'system.assets.css_rewrite',
                    'js_pipeline' => 'system.assets.js_pipeline',
                    'js_pipeline_include_externals' => 'system.assets.js_pipeline_include_externals',
                    'js_pipeline_before_excludes' => 'system.assets.js_pipeline_before_excludes',
                    'js_minify' => 'system.assets.js_minify',
                    'js_module_pipeline' => 'system.assets.js_module_pipeline',
                    'js_module_pipeline_include_externals' => 'system.assets.js_module_pipeline_include_externals',
                    'js_module_pipeline_before_excludes' => 'system.assets.js_module_pipeline_before_excludes'
                ],
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'log' => [
                    'handler' => 'system.log.handler',
                    'syslog' => [
                        'facility' => 'system.log.syslog.facility',
                        'tag' => 'system.log.syslog.tag'
                    ]
                ],
                'debugger' => [
                    'enabled' => 'system.debugger.enabled',
                    'provider' => 'system.debugger.provider',
                    'censored' => 'system.debugger.censored',
                    'shutdown' => [
                        'close_connection' => 'system.debugger.shutdown.close_connection'
                    ]
                ],
                'images' => [
                    'adapter' => 'system.images.adapter',
                    'default_image_quality' => 'system.images.default_image_quality',
                    'cache_all' => 'system.images.cache_all',
                    'cache_perms' => 'system.images.cache_perms',
                    'debug' => 'system.images.debug',
                    'auto_fix_orientation' => 'system.images.auto_fix_orientation',
                    'defaults' => [
                        'loading' => 'system.images.defaults.loading',
                        'decoding' => 'system.images.defaults.decoding',
                        'fetchpriority' => 'system.images.defaults.fetchpriority'
                    ],
                    'seofriendly' => 'system.images.seofriendly',
                    'cls' => [
                        'auto_sizes' => 'system.images.cls.auto_sizes',
                        'aspect_ratio' => 'system.images.cls.aspect_ratio',
                        'retina_scale' => 'system.images.cls.retina_scale'
                    ]
                ],
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'auto_metadata_exif' => 'system.media.auto_metadata_exif',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'session' => [
                    'enabled' => 'system.session.enabled',
                    'initialize' => 'system.session.initialize',
                    'timeout' => 'system.session.timeout',
                    'name' => 'system.session.name',
                    'uniqueness' => 'system.session.uniqueness',
                    'secure' => 'system.session.secure',
                    'secure_https' => 'system.session.secure_https',
                    'httponly' => 'system.session.httponly',
                    'domain' => 'system.session.domain',
                    'path' => 'system.session.path',
                    'samesite' => 'system.session.samesite',
                    'split' => 'system.session.split'
                ],
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'official_gpm_only' => 'system.gpm.official_gpm_only'
                ],
                'updates' => [
                    'safe_upgrade' => 'system.updates.safe_upgrade',
                    'safe_upgrade_snapshot_limit' => 'system.updates.safe_upgrade_snapshot_limit',
                    'recovery_mode' => 'system.updates.recovery_mode'
                ],
                'http' => [
                    'method' => 'system.http.method',
                    'enable_proxy' => 'system.http.enable_proxy',
                    'proxy_url' => 'system.http.proxy_url',
                    'proxy_cert_path' => 'system.http.proxy_cert_path',
                    'verify_peer' => 'system.http.verify_peer',
                    'verify_host' => 'system.http.verify_host',
                    'concurrent_connections' => 'system.http.concurrent_connections'
                ],
                'reverse_proxy_setup' => 'system.reverse_proxy_setup',
                'username_regex' => 'system.username_regex',
                'pwd_regex' => 'system.pwd_regex',
                'intl_enabled' => 'system.intl_enabled',
                'wrapped_site' => 'system.wrapped_site',
                'absolute_urls' => 'system.absolute_urls',
                'param_sep' => 'system.param_sep',
                'force_ssl' => 'system.force_ssl',
                'force_lowercase_urls' => 'system.force_lowercase_urls',
                'custom_base_url' => 'system.custom_base_url',
                'http_x_forwarded' => [
                    'protocol' => 'system.http_x_forwarded.protocol',
                    'host' => 'system.http_x_forwarded.host',
                    'port' => 'system.http_x_forwarded.port',
                    'ip' => 'system.http_x_forwarded.ip'
                ],
                'strict_mode' => [
                    'blueprint_compat' => 'system.strict_mode.blueprint_compat',
                    'yaml_compat' => 'system.strict_mode.yaml_compat',
                    'twig2_compat' => 'system.strict_mode.twig2_compat',
                    'twig3_compat' => 'system.strict_mode.twig3_compat'
                ],
                'accounts' => [
                    'type' => 'system.accounts.type',
                    'storage' => 'system.accounts.storage',
                    'avatar' => 'system.accounts.avatar'
                ]
            ],
            'plugins' => [
                'markdown-notices' => [
                    'enabled' => 'plugins.markdown-notices.enabled',
                    'built_in_css' => 'plugins.markdown-notices.built_in_css',
                    'base_classes' => 'plugins.markdown-notices.base_classes',
                    'level_classes' => 'plugins.markdown-notices.level_classes'
                ],
                'pagination' => [
                    'enabled' => 'plugins.pagination.enabled',
                    'delta' => 'plugins.pagination.delta',
                    'built_in_css' => 'plugins.pagination.built_in_css'
                ],
                'form' => [
                    'enabled' => 'plugins.form.enabled',
                    'debug' => 'plugins.form.debug',
                    'built_in_css' => 'plugins.form.built_in_css',
                    'inline_css' => 'plugins.form.inline_css',
                    'refresh_prevention' => 'plugins.form.refresh_prevention',
                    'client_side_validation' => 'plugins.form.client_side_validation',
                    'inline_errors' => 'plugins.form.inline_errors',
                    'modular_form_fix' => 'plugins.form.modular_form_fix',
                    'files' => [
                        'multiple' => 'plugins.form.files.multiple',
                        'limit' => 'plugins.form.files.limit',
                        'destination' => 'plugins.form.files.destination',
                        'accept' => 'plugins.form.files.accept',
                        'filesize' => 'plugins.form.files.filesize',
                        'avoid_overwriting' => 'plugins.form.files.avoid_overwriting',
                        'random_name' => 'plugins.form.files.random_name'
                    ],
                    'recaptcha' => [
                        'version' => 'plugins.form.recaptcha.version',
                        'theme' => 'plugins.form.recaptcha.theme',
                        'site_key' => 'plugins.form.recaptcha.site_key',
                        'secret_key' => 'plugins.form.recaptcha.secret_key'
                    ],
                    'turnstile' => [
                        'theme' => 'plugins.form.turnstile.theme',
                        'site_key' => 'plugins.form.turnstile.site_key',
                        'secret_key' => 'plugins.form.turnstile.secret_key'
                    ],
                    'basic_captcha' => [
                        'image' => [
                            'width' => 'plugins.form.basic_captcha.image.width',
                            'height' => 'plugins.form.basic_captcha.image.height'
                        ],
                        'chars' => [
                            'font' => 'plugins.form.basic_captcha.chars.font',
                            'size' => 'plugins.form.basic_captcha.chars.size',
                            'bg' => 'plugins.form.basic_captcha.chars.bg',
                            'text' => 'plugins.form.basic_captcha.chars.text',
                            'start_x' => 'plugins.form.basic_captcha.chars.start_x',
                            'start_y' => 'plugins.form.basic_captcha.chars.start_y',
                            'length' => 'plugins.form.basic_captcha.chars.length'
                        ],
                        'type' => 'plugins.form.basic_captcha.type',
                        'math' => [
                            'min' => 'plugins.form.basic_captcha.math.min',
                            'max' => 'plugins.form.basic_captcha.math.max',
                            'operators' => 'plugins.form.basic_captcha.math.operators'
                        ]
                    ]
                ],
                'flex-objects' => [
                    'enabled' => 'plugins.flex-objects.enabled',
                    'built_in_css' => 'plugins.flex-objects.built_in_css',
                    'extra_admin_twig_path' => 'plugins.flex-objects.extra_admin_twig_path',
                    'security' => [
                        'restrict_page_frontmatter' => 'plugins.flex-objects.security.restrict_page_frontmatter'
                    ],
                    'directories' => 'plugins.flex-objects.directories'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'limit' => 'plugins.relatedpages.limit',
                    'show_score' => 'plugins.relatedpages.show_score',
                    'filter' => [
                        'items' => 'plugins.relatedpages.filter.items',
                        'excluded_types' => 'plugins.relatedpages.filter.excluded_types',
                        'order' => [
                            'by' => 'plugins.relatedpages.filter.order.by',
                            'dir' => 'plugins.relatedpages.filter.order.dir'
                        ]
                    ],
                    'page_in_filter' => 'plugins.relatedpages.page_in_filter',
                    'explicit_pages' => [
                        'process' => 'plugins.relatedpages.explicit_pages.process',
                        'score' => 'plugins.relatedpages.explicit_pages.score'
                    ],
                    'taxonomy_match' => [
                        'taxonomy' => 'plugins.relatedpages.taxonomy_match.taxonomy',
                        'taxonomy_taxonomy' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_taxonomy.score_scale'
                        ],
                        'taxonomy_content' => [
                            'process' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.process',
                            'score_scale' => 'plugins.relatedpages.taxonomy_match.taxonomy_content.score_scale'
                        ]
                    ],
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ]
                ],
                'tntsearch' => [
                    'enabled' => 'plugins.tntsearch.enabled',
                    'index_status' => 'plugins.tntsearch.index_status',
                    'enable_admin_page_events' => 'plugins.tntsearch.enable_admin_page_events',
                    'scheduled_index' => [
                        'enabled' => 'plugins.tntsearch.scheduled_index.enabled',
                        'at' => 'plugins.tntsearch.scheduled_index.at',
                        'logs' => 'plugins.tntsearch.scheduled_index.logs'
                    ],
                    'built_in_css' => 'plugins.tntsearch.built_in_css',
                    'built_in_js' => 'plugins.tntsearch.built_in_js',
                    'built_in_search_page' => 'plugins.tntsearch.built_in_search_page',
                    'search_route' => 'plugins.tntsearch.search_route',
                    'query_route' => 'plugins.tntsearch.query_route',
                    'search_type' => 'plugins.tntsearch.search_type',
                    'fuzzy' => 'plugins.tntsearch.fuzzy',
                    'distance' => 'plugins.tntsearch.distance',
                    'phrases' => 'plugins.tntsearch.phrases',
                    'stemmer' => 'plugins.tntsearch.stemmer',
                    'display_route' => 'plugins.tntsearch.display_route',
                    'live_uri_update' => 'plugins.tntsearch.live_uri_update',
                    'display_hits' => 'plugins.tntsearch.display_hits',
                    'display_time' => 'plugins.tntsearch.display_time',
                    'limit' => 'plugins.tntsearch.limit',
                    'min' => 'plugins.tntsearch.min',
                    'snippet' => 'plugins.tntsearch.snippet',
                    'index_page_by_default' => 'plugins.tntsearch.index_page_by_default',
                    'filter' => [
                        'items' => 'plugins.tntsearch.filter.items'
                    ],
                    'powered_by' => 'plugins.tntsearch.powered_by',
                    'search_object_type' => 'plugins.tntsearch.search_object_type'
                ],
                'admin' => [
                    'enabled' => 'plugins.admin.enabled',
                    'cache_enabled' => 'plugins.admin.cache_enabled',
                    'twofa_enabled' => 'plugins.admin.twofa_enabled',
                    'route' => 'plugins.admin.route',
                    'logo_text' => 'plugins.admin.logo_text',
                    'content_padding' => 'plugins.admin.content_padding',
                    'body_classes' => 'plugins.admin.body_classes',
                    'sidebar' => [
                        'activate' => 'plugins.admin.sidebar.activate',
                        'hover_delay' => 'plugins.admin.sidebar.hover_delay',
                        'size' => 'plugins.admin.sidebar.size'
                    ],
                    'theme' => 'plugins.admin.theme',
                    'edit_mode' => 'plugins.admin.edit_mode',
                    'frontend_preview_target' => 'plugins.admin.frontend_preview_target',
                    'pages' => [
                        'show_parents' => 'plugins.admin.pages.show_parents',
                        'parents_levels' => 'plugins.admin.pages.parents_levels',
                        'show_modular' => 'plugins.admin.pages.show_modular'
                    ],
                    'show_beta_msg' => 'plugins.admin.show_beta_msg',
                    'show_github_msg' => 'plugins.admin.show_github_msg',
                    'enable_auto_updates_check' => 'plugins.admin.enable_auto_updates_check',
                    'session' => [
                        'timeout' => 'plugins.admin.session.timeout',
                        'keep_alive' => 'plugins.admin.session.keep_alive'
                    ],
                    'hide_page_types' => 'plugins.admin.hide_page_types',
                    'hide_modular_page_types' => 'plugins.admin.hide_modular_page_types',
                    'widgets_display' => 'plugins.admin.widgets_display',
                    'notifications' => [
                        'feed' => 'plugins.admin.notifications.feed',
                        'dashboard' => 'plugins.admin.notifications.dashboard',
                        'plugins' => 'plugins.admin.notifications.plugins',
                        'themes' => 'plugins.admin.notifications.themes'
                    ],
                    'whitelabel' => [
                        'logo_login' => 'plugins.admin.whitelabel.logo_login',
                        'logo_custom' => 'plugins.admin.whitelabel.logo_custom',
                        'codemirror_theme' => 'plugins.admin.whitelabel.codemirror_theme',
                        'codemirror_fontsize' => 'plugins.admin.whitelabel.codemirror_fontsize',
                        'codemirror_md_font' => 'plugins.admin.whitelabel.codemirror_md_font',
                        'quicktray_recompile' => 'plugins.admin.whitelabel.quicktray_recompile',
                        'color_scheme' => [
                            'name' => 'plugins.admin.whitelabel.color_scheme.name',
                            'colors' => [
                                'logo-bg' => 'plugins.admin.whitelabel.color_scheme.colors.logo-bg',
                                'logo-link' => 'plugins.admin.whitelabel.color_scheme.colors.logo-link',
                                'nav-bg' => 'plugins.admin.whitelabel.color_scheme.colors.nav-bg',
                                'nav-text' => 'plugins.admin.whitelabel.color_scheme.colors.nav-text',
                                'nav-link' => 'plugins.admin.whitelabel.color_scheme.colors.nav-link',
                                'nav-selected-bg' => 'plugins.admin.whitelabel.color_scheme.colors.nav-selected-bg',
                                'nav-selected-link' => 'plugins.admin.whitelabel.color_scheme.colors.nav-selected-link',
                                'nav-hover-bg' => 'plugins.admin.whitelabel.color_scheme.colors.nav-hover-bg',
                                'nav-hover-link' => 'plugins.admin.whitelabel.color_scheme.colors.nav-hover-link',
                                'toolbar-bg' => 'plugins.admin.whitelabel.color_scheme.colors.toolbar-bg',
                                'toolbar-text' => 'plugins.admin.whitelabel.color_scheme.colors.toolbar-text',
                                'page-bg' => 'plugins.admin.whitelabel.color_scheme.colors.page-bg',
                                'page-text' => 'plugins.admin.whitelabel.color_scheme.colors.page-text',
                                'page-link' => 'plugins.admin.whitelabel.color_scheme.colors.page-link',
                                'content-bg' => 'plugins.admin.whitelabel.color_scheme.colors.content-bg',
                                'content-text' => 'plugins.admin.whitelabel.color_scheme.colors.content-text',
                                'content-link' => 'plugins.admin.whitelabel.color_scheme.colors.content-link',
                                'content-link2' => 'plugins.admin.whitelabel.color_scheme.colors.content-link2',
                                'content-header' => 'plugins.admin.whitelabel.color_scheme.colors.content-header',
                                'content-tabs-bg' => 'plugins.admin.whitelabel.color_scheme.colors.content-tabs-bg',
                                'content-tabs-text' => 'plugins.admin.whitelabel.color_scheme.colors.content-tabs-text',
                                'content-highlight' => 'plugins.admin.whitelabel.color_scheme.colors.content-highlight',
                                'button-bg' => 'plugins.admin.whitelabel.color_scheme.colors.button-bg',
                                'button-text' => 'plugins.admin.whitelabel.color_scheme.colors.button-text',
                                'notice-bg' => 'plugins.admin.whitelabel.color_scheme.colors.notice-bg',
                                'notice-text' => 'plugins.admin.whitelabel.color_scheme.colors.notice-text',
                                'update-bg' => 'plugins.admin.whitelabel.color_scheme.colors.update-bg',
                                'update-text' => 'plugins.admin.whitelabel.color_scheme.colors.update-text',
                                'critical-bg' => 'plugins.admin.whitelabel.color_scheme.colors.critical-bg',
                                'critical-text' => 'plugins.admin.whitelabel.color_scheme.colors.critical-text'
                            ],
                            'accents' => [
                                'primary-accent' => 'plugins.admin.whitelabel.color_scheme.accents.primary-accent',
                                'secondary-accent' => 'plugins.admin.whitelabel.color_scheme.accents.secondary-accent',
                                'tertiary-accent' => 'plugins.admin.whitelabel.color_scheme.accents.tertiary-accent'
                            ]
                        ],
                        'custom_footer' => 'plugins.admin.whitelabel.custom_footer',
                        'custom_css' => 'plugins.admin.whitelabel.custom_css',
                        'custom_presets' => 'plugins.admin.whitelabel.custom_presets'
                    ],
                    'themes-preview' => 'plugins.admin.themes-preview',
                    'colorschemes' => 'plugins.admin.colorschemes',
                    'popularity' => [
                        'enabled' => 'plugins.admin.popularity.enabled',
                        'ignore' => 'plugins.admin.popularity.ignore',
                        'history' => [
                            'daily' => 'plugins.admin.popularity.history.daily',
                            'monthly' => 'plugins.admin.popularity.history.monthly',
                            'visitors' => 'plugins.admin.popularity.history.visitors'
                        ]
                    ],
                    'dashboard' => [
                        'days_of_stats' => 'plugins.admin.dashboard.days_of_stats'
                    ],
                    'pagemedia' => [
                        'resize_width' => 'plugins.admin.pagemedia.resize_width',
                        'resize_height' => 'plugins.admin.pagemedia.resize_height',
                        'res_min_width' => 'plugins.admin.pagemedia.res_min_width',
                        'res_min_height' => 'plugins.admin.pagemedia.res_min_height',
                        'res_max_width' => 'plugins.admin.pagemedia.res_max_width',
                        'res_max_height' => 'plugins.admin.pagemedia.res_max_height',
                        'resize_quality' => 'plugins.admin.pagemedia.resize_quality'
                    ]
                ],
                'sitemap' => [
                    'enabled' => 'plugins.sitemap.enabled',
                    'route' => 'plugins.sitemap.route',
                    'multilang_enabled' => 'plugins.sitemap.multilang_enabled',
                    'ignore_external' => 'plugins.sitemap.ignore_external',
                    'ignore_protected' => 'plugins.sitemap.ignore_protected',
                    'ignore_redirect' => 'plugins.sitemap.ignore_redirect',
                    'xsl_transform' => 'plugins.sitemap.xsl_transform',
                    'html_support' => 'plugins.sitemap.html_support',
                    'ignores' => 'plugins.sitemap.ignores',
                    'include_news_tags' => 'plugins.sitemap.include_news_tags',
                    'standalone_sitemap_news' => 'plugins.sitemap.standalone_sitemap_news',
                    'sitemap_news_path' => 'plugins.sitemap.sitemap_news_path',
                    'news_max_age_days' => 'plugins.sitemap.news_max_age_days',
                    'news_enabled_paths' => 'plugins.sitemap.news_enabled_paths',
                    'date_type' => 'plugins.sitemap.date_type',
                    'include_changefreq' => 'plugins.sitemap.include_changefreq',
                    'changefreq' => 'plugins.sitemap.changefreq',
                    'include_priority' => 'plugins.sitemap.include_priority',
                    'priority' => 'plugins.sitemap.priority',
                    'additions' => [
                        '*' => [
                            'location' => 'plugins.sitemap.additions.*.location',
                            'lastmod' => 'plugins.sitemap.additions.*.lastmod',
                            'changefreq' => 'plugins.sitemap.additions.*.changefreq',
                            'priority' => 'plugins.sitemap.additions.*.priority'
                        ]
                    ],
                    'urlset' => 'plugins.sitemap.urlset',
                    'urlimageset' => 'plugins.sitemap.urlimageset',
                    'urlnewsset' => 'plugins.sitemap.urlnewsset'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
                ],
                'archives' => [
                    'enabled' => 'plugins.archives.enabled',
                    'built_in_css' => 'plugins.archives.built_in_css',
                    'date_display_format' => 'plugins.archives.date_display_format',
                    'show_count' => 'plugins.archives.show_count',
                    'limit' => 'plugins.archives.limit',
                    'taxonomy_names' => 'plugins.archives.taxonomy_names',
                    'taxonomy_values' => 'plugins.archives.taxonomy_values',
                    'order' => [
                        'by' => 'plugins.archives.order.by',
                        'dir' => 'plugins.archives.order.dir'
                    ],
                    'filters' => 'plugins.archives.filters',
                    'filter_combinator' => 'plugins.archives.filter_combinator',
                    'page_specific_config' => [
                        '*' => [
                            'route' => 'plugins.archives.page_specific_config.*.route',
                            'filters' => 'plugins.archives.page_specific_config.*.filters',
                            'filter_combinator' => 'plugins.archives.page_specific_config.*.filter_combinator',
                            'order_by' => 'plugins.archives.page_specific_config.*.order_by',
                            'order_dir' => 'plugins.archives.page_specific_config.*.order_dir'
                        ]
                    ]
                ],
                'feed' => [
                    'enabled' => 'plugins.feed.enabled',
                    'limit' => 'plugins.feed.limit',
                    'title' => 'plugins.feed.title',
                    'description' => 'plugins.feed.description',
                    'length' => 'plugins.feed.length',
                    'enable_json_feed' => 'plugins.feed.enable_json_feed',
                    'show_last_modified' => 'plugins.feed.show_last_modified'
                ],
                'shortcode-core' => [
                    'enabled' => 'plugins.shortcode-core.enabled',
                    'active' => 'plugins.shortcode-core.active',
                    'active_admin' => 'plugins.shortcode-core.active_admin',
                    'admin_pages_only' => 'plugins.shortcode-core.admin_pages_only',
                    'parser' => 'plugins.shortcode-core.parser',
                    'custom_shortcodes' => 'plugins.shortcode-core.custom_shortcodes',
                    'css' => [
                        'notice_enabled' => 'plugins.shortcode-core.css.notice_enabled'
                    ],
                    'fontawesome' => [
                        'load' => 'plugins.shortcode-core.fontawesome.load',
                        'url' => 'plugins.shortcode-core.fontawesome.url',
                        'v5' => 'plugins.shortcode-core.fontawesome.v5'
                    ]
                ],
                'seo' => [
                    'enabled' => 'plugins.seo.enabled',
                    'facebookid' => 'plugins.seo.facebookid',
                    'twitterid' => 'plugins.seo.twitterid',
                    'twitter_default' => 'plugins.seo.twitter_default',
                    'facebook_default' => 'plugins.seo.facebook_default',
                    'article' => 'plugins.seo.article',
                    'event' => 'plugins.seo.event',
                    'restaurant' => 'plugins.seo.restaurant',
                    'musicevent' => 'plugins.seo.musicevent',
                    'customjson' => 'plugins.seo.customjson',
                    'person' => 'plugins.seo.person',
                    'organization' => 'plugins.seo.organization',
                    'musicalbum' => 'plugins.seo.musicalbum',
                    'product' => 'plugins.seo.product'
                ],
                'error' => [
                    'enabled' => 'plugins.error.enabled',
                    'routes' => [
                        404 => 'plugins.error.routes.404'
                    ]
                ],
                'breadcrumbs' => [
                    'enabled' => 'plugins.breadcrumbs.enabled',
                    'show_all' => 'plugins.breadcrumbs.show_all',
                    'built_in_css' => 'plugins.breadcrumbs.built_in_css',
                    'include_home' => 'plugins.breadcrumbs.include_home',
                    'include_current' => 'plugins.breadcrumbs.include_current',
                    'icon_home' => 'plugins.breadcrumbs.icon_home',
                    'icon_divider_classes' => 'plugins.breadcrumbs.icon_divider_classes',
                    'link_trailing' => 'plugins.breadcrumbs.link_trailing'
                ],
                'login' => [
                    'enabled' => 'plugins.login.enabled',
                    'built_in_css' => 'plugins.login.built_in_css',
                    'redirect_to_login' => 'plugins.login.redirect_to_login',
                    'redirect_after_login' => 'plugins.login.redirect_after_login',
                    'redirect_after_logout' => 'plugins.login.redirect_after_logout',
                    'parent_acl' => 'plugins.login.parent_acl',
                    'dynamic_page_visibility' => 'plugins.login.dynamic_page_visibility',
                    'twofa_enabled' => 'plugins.login.twofa_enabled',
                    'protect_protected_page_media' => 'plugins.login.protect_protected_page_media',
                    'session_user_sync' => 'plugins.login.session_user_sync',
                    'rememberme' => [
                        'enabled' => 'plugins.login.rememberme.enabled',
                        'timeout' => 'plugins.login.rememberme.timeout',
                        'name' => 'plugins.login.rememberme.name'
                    ],
                    'route' => 'plugins.login.route',
                    'route_after_login' => 'plugins.login.route_after_login',
                    'route_after_logout' => 'plugins.login.route_after_logout',
                    'route_forgot' => 'plugins.login.route_forgot',
                    'route_reset' => 'plugins.login.route_reset',
                    'route_profile' => 'plugins.login.route_profile',
                    'route_activate' => 'plugins.login.route_activate',
                    'user_registration' => [
                        'redirect_after_activation' => 'plugins.login.user_registration.redirect_after_activation',
                        'redirect_after_registration' => 'plugins.login.user_registration.redirect_after_registration',
                        'enabled' => 'plugins.login.user_registration.enabled',
                        'fields' => 'plugins.login.user_registration.fields',
                        'default_values' => 'plugins.login.user_registration.default_values',
                        'groups' => 'plugins.login.user_registration.groups',
                        'access' => [
                            'site' => 'plugins.login.user_registration.access.site'
                        ],
                        'options' => [
                            'validate_password1_and_password2' => 'plugins.login.user_registration.options.validate_password1_and_password2',
                            'set_user_disabled' => 'plugins.login.user_registration.options.set_user_disabled',
                            'login_after_registration' => 'plugins.login.user_registration.options.login_after_registration',
                            'send_activation_email' => 'plugins.login.user_registration.options.send_activation_email',
                            'manually_enable' => 'plugins.login.user_registration.options.manually_enable',
                            'send_notification_email' => 'plugins.login.user_registration.options.send_notification_email',
                            'send_welcome_email' => 'plugins.login.user_registration.options.send_welcome_email'
                        ]
                    ],
                    'route_register' => 'plugins.login.route_register',
                    'site_host' => 'plugins.login.site_host',
                    'max_pw_resets_count' => 'plugins.login.max_pw_resets_count',
                    'max_pw_resets_interval' => 'plugins.login.max_pw_resets_interval',
                    'max_login_count' => 'plugins.login.max_login_count',
                    'max_login_interval' => 'plugins.login.max_login_interval',
                    'ipv6_subnet_size' => 'plugins.login.ipv6_subnet_size'
                ],
                'email' => [
                    'enabled' => 'plugins.email.enabled',
                    'mailer' => [
                        'engine' => 'plugins.email.mailer.engine',
                        'smtp' => [
                            'server' => 'plugins.email.mailer.smtp.server',
                            'port' => 'plugins.email.mailer.smtp.port',
                            'encryption' => 'plugins.email.mailer.smtp.encryption',
                            'user' => 'plugins.email.mailer.smtp.user',
                            'password' => 'plugins.email.mailer.smtp.password'
                        ],
                        'sendmail' => [
                            'bin' => 'plugins.email.mailer.sendmail.bin'
                        ]
                    ],
                    'content_type' => 'plugins.email.content_type',
                    'from' => 'plugins.email.from',
                    'to' => 'plugins.email.to',
                    'cc' => 'plugins.email.cc',
                    'bcc' => 'plugins.email.bcc',
                    'reply_to' => 'plugins.email.reply_to',
                    'body' => 'plugins.email.body',
                    'debug' => 'plugins.email.debug'
                ],
                'taxonomylist' => [
                    'enabled' => 'plugins.taxonomylist.enabled',
                    'route' => 'plugins.taxonomylist.route'
                ]
            ],
            'themes' => [
                'nur-ul-huda' => [
                    'direction' => 'themes.nur-ul-huda.direction',
                    'language' => 'themes.nur-ul-huda.language',
                    'number_format' => 'themes.nur-ul-huda.number_format',
                    'date_calendar' => 'themes.nur-ul-huda.date_calendar',
                    'production-mode' => 'themes.nur-ul-huda.production-mode',
                    'primary_spirit_color' => 'themes.nur-ul-huda.primary_spirit_color',
                    'accent_color' => 'themes.nur-ul-huda.accent_color',
                    'custom_fonts' => 'themes.nur-ul-huda.custom_fonts',
                    'font_heading' => 'themes.nur-ul-huda.font_heading',
                    'font_body' => 'themes.nur-ul-huda.font_body',
                    'header_tab' => 'themes.nur-ul-huda.header_tab',
                    'top_banner_enabled' => 'themes.nur-ul-huda.top_banner_enabled',
                    'top_banner_bg_color' => 'themes.nur-ul-huda.top_banner_bg_color',
                    'top_banner_text_color' => 'themes.nur-ul-huda.top_banner_text_color',
                    'top_banner_glass' => 'themes.nur-ul-huda.top_banner_glass',
                    'top_banner_border' => 'themes.nur-ul-huda.top_banner_border',
                    'top_banner_widgets_order' => 'themes.nur-ul-huda.top_banner_widgets_order',
                    'top_banner_mobile_hide' => 'themes.nur-ul-huda.top_banner_mobile_hide',
                    'top_banner_announcement_enabled' => 'themes.nur-ul-huda.top_banner_announcement_enabled',
                    'top_banner_announcement_text' => 'themes.nur-ul-huda.top_banner_announcement_text',
                    'top_banner_announcement_starts' => 'themes.nur-ul-huda.top_banner_announcement_starts',
                    'top_banner_announcement_expires' => 'themes.nur-ul-huda.top_banner_announcement_expires',
                    'top_banner_announcement_speed' => 'themes.nur-ul-huda.top_banner_announcement_speed',
                    'top_banner_announcement_bg_color' => 'themes.nur-ul-huda.top_banner_announcement_bg_color',
                    'top_banner_announcement_text_color' => 'themes.nur-ul-huda.top_banner_announcement_text_color',
                    'top_banner_announcement_pause' => 'themes.nur-ul-huda.top_banner_announcement_pause',
                    'theme_colors_tab' => 'themes.nur-ul-huda.theme_colors_tab',
                    'bottom_banner_show_logo' => 'themes.nur-ul-huda.bottom_banner_show_logo',
                    'bottom_banner_show_site_name' => 'themes.nur-ul-huda.bottom_banner_show_site_name',
                    'bottom_banner_show_tagline' => 'themes.nur-ul-huda.bottom_banner_show_tagline',
                    'bottom_banner_copyright' => 'themes.nur-ul-huda.bottom_banner_copyright',
                    'bottom_banner_widgets_order' => 'themes.nur-ul-huda.bottom_banner_widgets_order',
                    'newsletter_enabled' => 'themes.nur-ul-huda.newsletter_enabled',
                    'newsletter_title' => 'themes.nur-ul-huda.newsletter_title',
                    'newsletter_text' => 'themes.nur-ul-huda.newsletter_text',
                    'social_facebook' => 'themes.nur-ul-huda.social_facebook',
                    'social_facebook_enabled' => 'themes.nur-ul-huda.social_facebook_enabled',
                    'social_twitter' => 'themes.nur-ul-huda.social_twitter',
                    'social_twitter_enabled' => 'themes.nur-ul-huda.social_twitter_enabled',
                    'social_instagram' => 'themes.nur-ul-huda.social_instagram',
                    'social_instagram_enabled' => 'themes.nur-ul-huda.social_instagram_enabled',
                    'social_youtube' => 'themes.nur-ul-huda.social_youtube',
                    'social_youtube_enabled' => 'themes.nur-ul-huda.social_youtube_enabled',
                    'social_telegram' => 'themes.nur-ul-huda.social_telegram',
                    'social_telegram_enabled' => 'themes.nur-ul-huda.social_telegram_enabled',
                    'social_linkedin' => 'themes.nur-ul-huda.social_linkedin',
                    'social_linkedin_enabled' => 'themes.nur-ul-huda.social_linkedin_enabled',
                    'social_tiktok' => 'themes.nur-ul-huda.social_tiktok',
                    'social_tiktok_enabled' => 'themes.nur-ul-huda.social_tiktok_enabled',
                    'social_pinterest' => 'themes.nur-ul-huda.social_pinterest',
                    'social_pinterest_enabled' => 'themes.nur-ul-huda.social_pinterest_enabled',
                    'social_snapchat' => 'themes.nur-ul-huda.social_snapchat',
                    'social_snapchat_enabled' => 'themes.nur-ul-huda.social_snapchat_enabled',
                    'social_spotify' => 'themes.nur-ul-huda.social_spotify',
                    'social_spotify_enabled' => 'themes.nur-ul-huda.social_spotify_enabled',
                    'social_discord' => 'themes.nur-ul-huda.social_discord',
                    'social_discord_enabled' => 'themes.nur-ul-huda.social_discord_enabled',
                    'social_google_maps' => 'themes.nur-ul-huda.social_google_maps',
                    'social_google_maps_enabled' => 'themes.nur-ul-huda.social_google_maps_enabled',
                    'social_whatsapp' => 'themes.nur-ul-huda.social_whatsapp',
                    'social_whatsapp_enabled' => 'themes.nur-ul-huda.social_whatsapp_enabled',
                    'social_phone' => 'themes.nur-ul-huda.social_phone',
                    'social_phone_enabled' => 'themes.nur-ul-huda.social_phone_enabled',
                    'social_email' => 'themes.nur-ul-huda.social_email',
                    'social_email_enabled' => 'themes.nur-ul-huda.social_email_enabled',
                    'social_show_labels_mobile' => 'themes.nur-ul-huda.social_show_labels_mobile',
                    'social_show_labels_desktop' => 'themes.nur-ul-huda.social_show_labels_desktop',
                    'sidebar_tab' => 'themes.nur-ul-huda.sidebar_tab',
                    'glass_bg_color' => 'themes.nur-ul-huda.glass_bg_color',
                    'glass_opacity' => 'themes.nur-ul-huda.glass_opacity',
                    'glass_blur' => 'themes.nur-ul-huda.glass_blur',
                    'glass_border_opacity' => 'themes.nur-ul-huda.glass_border_opacity',
                    'glass_highlight' => 'themes.nur-ul-huda.glass_highlight',
                    'glass_noise' => 'themes.nur-ul-huda.glass_noise',
                    'prayer_method' => 'themes.nur-ul-huda.prayer_method',
                    'hijri_offset' => 'themes.nur-ul-huda.hijri_offset',
                    'adhan_media' => 'themes.nur-ul-huda.adhan_media',
                    'default_location' => 'themes.nur-ul-huda.default_location',
                    'moodle_url' => 'themes.nur-ul-huda.moodle_url',
                    'moodle_token' => 'themes.nur-ul-huda.moodle_token',
                    'snipcart_key' => 'themes.nur-ul-huda.snipcart_key',
                    'jazzcash_merchant' => 'themes.nur-ul-huda.jazzcash_merchant',
                    'jazzcash_salt' => 'themes.nur-ul-huda.jazzcash_salt',
                    'components_tab' => 'themes.nur-ul-huda.components_tab',
                    'custom_logo' => 'themes.nur-ul-huda.custom_logo',
                    'custom_logo_mobile' => 'themes.nur-ul-huda.custom_logo_mobile',
                    'favicon' => 'themes.nur-ul-huda.favicon',
                    'dropdown' => [
                        'enabled' => 'themes.nur-ul-huda.dropdown.enabled'
                    ],
                    'grid-size' => 'themes.nur-ul-huda.grid-size',
                    'blog-page' => 'themes.nur-ul-huda.blog-page'
                ]
            ]
        ],
        'dynamic' => [
            
        ],
        'filter' => [
            'validation' => true,
            'xss_check' => true
        ]
    ]
];
