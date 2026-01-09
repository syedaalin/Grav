<?php
return [
    '@class' => 'Grav\\Common\\Config\\CompiledBlueprints',
    'timestamp' => 1767917949,
    'checksum' => 'aec3526bc2368d2affb7dd19d7cdc0d1',
    'files' => [
        'system/blueprints/config' => [
            'backups' => [
                'file' => 'system/blueprints/config/backups.yaml',
                'modified' => 1767661386
            ],
            'media' => [
                'file' => 'system/blueprints/config/media.yaml',
                'modified' => 1767661386
            ],
            'scheduler' => [
                'file' => 'system/blueprints/config/scheduler.yaml',
                'modified' => 1767661386
            ],
            'security' => [
                'file' => 'system/blueprints/config/security.yaml',
                'modified' => 1767661386
            ],
            'site' => [
                'file' => 'system/blueprints/config/site.yaml',
                'modified' => 1767661386
            ],
            'streams' => [
                'file' => 'system/blueprints/config/streams.yaml',
                'modified' => 1767661386
            ],
            'system' => [
                'file' => 'system/blueprints/config/system.yaml',
                'modified' => 1767661386
            ]
        ],
        'user/plugins' => [
            'plugins/markdown-notices' => [
                'file' => 'user/plugins/markdown-notices/blueprints.yaml',
                'modified' => 1762876910
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
            'plugins/simplesearch' => [
                'file' => 'user/plugins/simplesearch/blueprints.yaml',
                'modified' => 1661506352
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
                'modified' => 1762876910
            ],
            'plugins/feed' => [
                'file' => 'user/plugins/feed/blueprints.yaml',
                'modified' => 1695707474
            ],
            'plugins/seo' => [
                'file' => 'user/plugins/seo/blueprints.yaml',
                'modified' => 1536888544
            ],
            'plugins/error' => [
                'file' => 'user/plugins/error/blueprints.yaml',
                'modified' => 1762876910
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
            ]
        ],
        'user/themes' => [
            'themes/ngo-theme' => [
                'file' => 'user/themes/ngo-theme/blueprints.yaml',
                'modified' => 1767917804
            ],
            'themes/quark' => [
                'file' => 'user/themes/quark/blueprints.yaml',
                'modified' => 1764386856
            ],
            'themes/my-quark' => [
                'file' => 'user/themes/my-quark/blueprints.yaml',
                'modified' => 1767809409
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
            'backups.history_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.history_title',
                'validation' => 'loose'
            ],
            'backups.history' => [
                'type' => 'backupshistory',
                'name' => 'backups.history',
                'validation' => 'loose'
            ],
            'backups.config_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.config_title',
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
            'backups.profiles_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'backups.profiles_title',
                'validation' => 'loose'
            ],
            'backups.profiles' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'backups-list compact',
                'sort' => false,
                'name' => 'backups.profiles',
                'validation' => 'loose'
            ],
            'backups.profiles.name' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.NAME',
                'validate' => [
                    'max' => 20,
                    'message' => 'Name must be less than 20 characters',
                    'required' => true
                ],
                'name' => 'backups.profiles.name',
                'validation' => 'loose'
            ],
            'backups.profiles.root' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ROOT_FOLDER',
                'default' => '/',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.root',
                'validation' => 'loose'
            ],
            'backups.profiles.exclude_paths' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_PATHS',
                'rows' => 5,
                'name' => 'backups.profiles.exclude_paths',
                'validation' => 'loose'
            ],
            'backups.profiles.exclude_files' => [
                'type' => 'textarea',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_EXCLUDE_FILES',
                'rows' => 5,
                'name' => 'backups.profiles.exclude_files',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule' => [
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
                'name' => 'backups.profiles.schedule',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule_at' => [
                'type' => 'cron',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_SCHEDULE_AT',
                'default' => '* 3 * * *',
                'validate' => [
                    'required' => true
                ],
                'name' => 'backups.profiles.schedule_at',
                'validation' => 'loose'
            ],
            'backups.profiles.schedule_environment' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.BACKUPS_PROFILE_ENVIRONMENT',
                'default' => '',
                'options' => [
                    '' => 'Default (cli)',
                    'localhost' => 'Localhost',
                    'cli' => 'CLI'
                ],
                'name' => 'backups.profiles.schedule_environment',
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
            'scheduler.status_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.status_title',
                'validation' => 'loose'
            ],
            'scheduler.status' => [
                'type' => 'cronstatus',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'scheduler.status',
                'validation' => 'loose'
            ],
            'scheduler.webhook_status_override' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<script>
(function() {
    function updateSchedulerStatus() {
        // Find all notice bars
        var notices = document.querySelectorAll(\'.notice\');
        var webhookStatusChecked = false;
        
        // Check for modern scheduler and webhook settings
        fetch(window.location.origin + \'/grav-editor-pro/scheduler/health\')
            .then(response => response.json())
            .then(data => {
                if (data.webhook_enabled) {
                    notices.forEach(function(notice) {
                        if (notice.textContent.includes(\'Not Enabled for user:\')) {
                            // This is the cron status notice - replace it
                            notice.className = \'notice info\';
                            notice.innerHTML = \'<i class="fa fa-fw fa-check-circle"></i> <strong>Webhook Active</strong> - Scheduler can be triggered via webhook. Cron is not configured.\';
                        }
                    });
                    
                    // Also update the main status if it exists
                    var statusDiv = document.querySelector(\'.cronstatus-status\');
                    if (statusDiv && statusDiv.textContent.includes(\'Not Enabled\')) {
                        statusDiv.className = \'cronstatus-status success\';
                        statusDiv.innerHTML = \'<i class="fa fa-fw fa-check"></i> Webhook Ready\';
                    }
                }
            })
            .catch(error => {
                console.log(\'Webhook status check failed:\', error);
            });
    }
    
    // Run on page load
    if (document.readyState === \'loading\') {
        document.addEventListener(\'DOMContentLoaded\', updateSchedulerStatus);
    } else {
        updateSchedulerStatus();
    }
    
    // Also run after a short delay to catch any late-rendered elements
    setTimeout(updateSchedulerStatus, 500);
})();
</script>
',
                'markdown' => false,
                'name' => 'scheduler.webhook_status_override',
                'validation' => 'loose'
            ],
            'scheduler.status_enhanced' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<script>
document.addEventListener(\'DOMContentLoaded\', function() {
    // Check if webhook is enabled
    var webhookEnabled = document.querySelector(\'[name="data[scheduler][modern][webhook][enabled]"]:checked\');
    var statusDiv = document.querySelector(\'.cronstatus-status\');
    
    // Also find the parent notice bar
    var noticeBar = document.querySelector(\'.notice.alert\');
    
    if (statusDiv) {
        var currentStatus = statusDiv.textContent || statusDiv.innerText;
        var cronReady = currentStatus.includes(\'Ready\');
        var cronNotEnabled = currentStatus.includes(\'Not Enabled\');
        
        // Check if scheduler-webhook plugin exists
        var webhookPluginInstalled = false;
        fetch(window.location.origin + \'/grav-editor-pro/scheduler/health\')
            .then(response => response.json())
            .then(data => {
                webhookPluginInstalled = true;
                updateStatusDisplay(data);
            })
            .catch(error => {
                updateStatusDisplay(null);
            });
        
        function updateStatusDisplay(healthData) {
            var isWebhookEnabled = webhookEnabled && webhookEnabled.value == \'1\';
            var isWebhookReady = webhookPluginInstalled && isWebhookEnabled && healthData && healthData.webhook_enabled;
            
            // Update the main status text
            var mainStatusText = \'\';
            var mainStatusClass = \'\';
            
            if (cronReady && isWebhookReady) {
                mainStatusText = \'Cron and Webhook Ready\';
                mainStatusClass = \'success\';
            } else if (cronReady) {
                mainStatusText = \'Cron Ready\';
                mainStatusClass = \'success\';
            } else if (isWebhookReady) {
                mainStatusText = \'Webhook Ready (No Cron)\';
                mainStatusClass = \'success\'; // Changed from warning to success
            } else if (cronNotEnabled && !isWebhookReady) {
                mainStatusText = \'Not Configured\';
                mainStatusClass = \'error\';
            } else {
                mainStatusText = \'Configuration Pending\';
                mainStatusClass = \'warning\';
            }
            
            // Update the notice bar if webhooks are ready
            if (noticeBar && isWebhookReady) {
                // Change from error (red) to success (green) or info (blue)
                noticeBar.classList.remove(\'alert\');
                noticeBar.classList.add(\'info\');
                
                var noticeIcon = noticeBar.querySelector(\'i.fa\');
                if (noticeIcon) {
                    noticeIcon.classList.remove(\'fa-times-circle\');
                    noticeIcon.classList.add(\'fa-check-circle\');
                }
                
                var noticeText = noticeBar.querySelector(\'strong\') || noticeBar;
                var username = noticeText.textContent.match(/user:\\s*(\\w+)/);
                if (username) {
                    noticeText.innerHTML = \'Webhook Ready for user: <b>\' + username[1] + \'</b> (Cron not configured)\';
                } else {
                    noticeText.innerHTML = mainStatusText;
                }
            }
            
            // Update the main status div
            if (statusDiv) {
                statusDiv.innerHTML = \'<i class="fa fa-fw fa-\' + 
                    (mainStatusClass === \'success\' ? \'check\' : mainStatusClass === \'warning\' ? \'exclamation\' : \'times\') + 
                    \'"></i> \' + mainStatusText;
                statusDiv.className = \'cronstatus-status \' + mainStatusClass;
            }
            
            // Update install instructions button/content
            var installButton = document.querySelector(\'.cronstatus-install-button\');
            var installDiv = document.querySelector(\'.cronstatus-install\');
            
            if (installDiv) {
                var installHtml = \'<div class="alert alert-info">\';
                installHtml += \'<h4>Setup Instructions:</h4>\';
                
                var hasInstructions = false;
                
                // Cron setup
                if (!cronReady) {
                    installHtml += \'<p><strong>Option 1: Traditional Cron</strong><br>\';
                    installHtml += \'Run: <code>bin/grav scheduler --install</code><br>\';
                    installHtml += \'This will add a cron job that runs every minute.</p>\';
                    hasInstructions = true;
                }
                
                // Webhook setup
                if (!webhookPluginInstalled) {
                    installHtml += \'<p><strong>Option 2: Webhook Support</strong><br>\';
                    installHtml += \'1. Install plugin: <code>bin/gpm install scheduler-webhook</code><br>\';
                    installHtml += \'2. Configure webhook token in Advanced Features tab<br>\';
                    installHtml += \'3. Use webhook URL in your CI/CD or cloud scheduler</p>\';
                    hasInstructions = true;
                } else if (!isWebhookEnabled) {
                    installHtml += \'<p><strong>Webhook Plugin Installed</strong><br>\';
                    installHtml += \'Enable webhooks in Advanced Features tab and set a secure token.</p>\';
                    hasInstructions = true;
                } else if (isWebhookReady) {
                    installHtml += \'<p><strong>✅ Webhook is Active!</strong><br>\';
                    installHtml += \'Trigger URL: <code>\' + window.location.origin + \'/grav-editor-pro/scheduler/webhook</code><br>\';
                    installHtml += \'Use with Authorization header: <code>Bearer YOUR_TOKEN</code></p>\';
                    
                    if (!cronReady) {
                        installHtml += \'<p class="text-muted"><small>Note: No cron job configured. Scheduler runs only via webhook triggers.</small></p>\';
                    }
                }
                
                if (!hasInstructions && cronReady) {
                    installHtml += \'<p><strong>✅ Cron is configured and ready!</strong><br>\';
                    installHtml += \'The scheduler runs automatically every minute via system cron.</p>\';
                    
                }
                
                installHtml += \'</div>\';
                installDiv.innerHTML = installHtml;
                
                // Update button text based on status
                if (installButton) {
                    if (cronReady && isWebhookReady) {
                        installButton.innerHTML = \'<i class="fa fa-info-circle"></i> Configuration Details\';
                    } else if (cronReady || isWebhookReady) {
                        installButton.innerHTML = \'<i class="fa fa-plus-circle"></i> Add More Triggers\';
                    } else {
                        installButton.innerHTML = \'<i class="fa fa-exclamation-triangle"></i> Install Instructions\';
                    }
                }
            }
        }
    }
});
</script>
',
                'name' => 'scheduler.status_enhanced',
                'validation' => 'loose'
            ],
            'scheduler.modern_health' => [
                'type' => 'display',
                'label' => 'Health Status',
                'content' => '<div id="scheduler-health-status">
    <div class="text-muted">Checking health...</div>
</div>
<script>
(function() {
            function loadHealthStatus() {
                fetch(window.location.origin + \'/grav-editor-pro/scheduler/health\')
                    .then(response => response.json())
                    .then(data => {
                        var statusEl = document.getElementById(\'scheduler-health-status\');
                        if (!statusEl) return;
                        
                        // Modern card-based layout
                        var statusColor = \'#6c757d\';
                        var statusLabel = data.status || \'unknown\';
                        if (data.status === \'healthy\') statusColor = \'#28a745\';
                        else if (data.status === \'warning\') statusColor = \'#ffc107\';
                        else if (data.status === \'critical\') statusColor = \'#dc3545\';
                        
                        var html = \'<div style="display: flex; flex-direction: column; gap: 1rem;">\';
                        
                        // Status card
                        html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: linear-gradient(135deg, #f8f9fa 0%, #fff 100%); border-radius: 6px; border: 1px solid #e9ecef; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">\';
                        html += \'<span style="font-weight: 500; color: #495057;">Status:</span>\';
                        html += \'<span style="background: \' + statusColor + \'; color: white; padding: 0.375rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 4px; text-transform: uppercase; letter-spacing: 0.025em;">\' + statusLabel + \'</span>\';
                        html += \'</div>\';
                        
                        // Info grid
                        html += \'<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">\';
                        
                        // Last run card
                        html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
                        html += \'<div style="color: #6c757d; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.25rem;">Last Run</div>\';
                        if (data.last_run) {
                            var age = data.last_run_age;
                            var ageText = \'just now\';
                            if (age > 86400) {
                                ageText = Math.floor(age / 86400) + \' day(s) ago\';
                            } else if (age > 3600) {
                                ageText = Math.floor(age / 3600) + \' hour(s) ago\';
                            } else if (age > 60) {
                                ageText = Math.floor(age / 60) + \' minute(s) ago\';
                            } else if (age > 0) {
                                ageText = age + \' second(s) ago\';
                            }
                            html += \'<div style="font-size: 1rem; color: #212529; font-weight: 500;">\' + ageText + \'</div>\';
                        } else {
                            html += \'<div style="font-size: 1rem; color: #6c757d;">Never</div>\';
                        }
                        html += \'</div>\';
                        
                        // Jobs count card
                        html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
                        html += \'<div style="color: #6c757d; font-size: 0.75rem; text-transform: uppercase; letter-spacing: 0.05em; margin-bottom: 0.25rem;">Scheduled Jobs</div>\';
                        html += \'<div style="font-size: 1rem; color: #212529; font-weight: 500;">\' + (data.scheduled_jobs || 0) + \'</div>\';
                        html += \'</div>\';
                        
                        html += \'</div>\'; // Close grid
                        
                        // Additional info if available
                        if (data.modern_features && data.queue_size !== undefined) {
                            html += \'<div style="background: white; border: 1px solid #e9ecef; border-radius: 6px; padding: 0.75rem; box-shadow: 0 1px 2px rgba(0,0,0,0.03);">\';
                            html += \'<span style="color: #6c757d; font-size: 0.875rem;">Queue Size: </span>\';
                            html += \'<span style="font-weight: 500;">\' + data.queue_size + \'</span>\';
                            html += \'</div>\';
                        }
                        
                        // Failed jobs warning
                        if (data.failed_jobs_24h > 0) {
                            html += \'<div style="background: #fff5f5; border: 1px solid #feb2b2; border-radius: 6px; padding: 0.75rem; color: #c53030;">\';
                            html += \'<strong>⚠️ Failed Jobs (24h):</strong> \' + data.failed_jobs_24h;
                            html += \'</div>\';
                        }
                        
                        html += \'</div>\'; // Close main container
                        statusEl.innerHTML = html;
                    })
                    .catch(error => {
                        var statusEl = document.getElementById(\'scheduler-health-status\');
                        if (statusEl) {
                            statusEl.innerHTML = \'<div class="alert alert-warning">Unable to fetch health status. Ensure scheduler-webhook plugin is installed.</div>\';
                        }
                    });
            }
            
            // Load on page ready
            if (document.readyState === \'loading\') {
                document.addEventListener(\'DOMContentLoaded\', loadHealthStatus);
            } else {
                loadHealthStatus();
            }
            
    // Refresh every 30 seconds
    setInterval(loadHealthStatus, 30000);
})();
</script>
',
                'markdown' => false,
                'name' => 'scheduler.modern_health',
                'validation' => 'loose'
            ],
            'scheduler.trigger_methods' => [
                'type' => 'display',
                'label' => 'Active Triggers',
                'content' => '<div id="scheduler-triggers">
    <div class="text-muted">Checking triggers...</div>
</div>
<script>
(function() {
            function loadTriggers() {
                // Check cron status from the main status field
                var cronReady = false;
                var statusDiv = document.querySelector(\'.cronstatus-status\');
                if (statusDiv) {
                    var statusText = statusDiv.textContent || statusDiv.innerText;
                    cronReady = statusText.includes(\'Ready\');
                }
                
                // Check webhook status
                fetch(window.location.origin + \'/grav-editor-pro/scheduler/health\')
                    .then(response => response.json())
                    .then(data => {
                        var triggersEl = document.getElementById(\'scheduler-triggers\');
                        if (!triggersEl) return;
                        
                        var html = \'<div style="display: flex; flex-direction: column; gap: 0.5rem;">\';
                        
                        // Cron trigger card
                        var cronIcon = cronReady ? \'✅\' : \'❌\';
                        var cronStatus = cronReady ? \'Active\' : \'Not Configured\';
                        var cronStatusColor = cronReady ? \'#28a745\' : \'#6c757d\';
                        var cardBg = cronReady ? \'#f8f9fa\' : \'#fff\';
                        
                        html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: \' + cardBg + \'; border: 1px solid #e9ecef; border-radius: 4px;">\';
                        html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
                        html += \'<span style="font-size: 1.25rem; line-height: 1;">\' + cronIcon + \'</span>\';
                        html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Cron:</span>\';
                        html += \'</div>\';
                        html += \'<span style="background: \' + cronStatusColor + \'; color: white; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">\' + cronStatus + \'</span>\';
                        html += \'</div>\';
                        
                        // Webhook trigger card
                        if (data.webhook_enabled) {
                            html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: #f8f9fa; border: 1px solid #e9ecef; border-radius: 4px;">\';
                            html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
                            html += \'<span style="font-size: 1.25rem; line-height: 1;">✅</span>\';
                            html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Webhook:</span>\';
                            html += \'</div>\';
                            html += \'<span style="background: #28a745; color: white; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">ACTIVE</span>\';
                            html += \'</div>\';
                        } else {
                            // Show webhook as not configured/disabled
                            html += \'<div style="display: flex; align-items: center; justify-content: space-between; padding: 0.75rem 1rem; background: #fff; border: 1px solid #e9ecef; border-radius: 4px;">\';
                            html += \'<div style="display: flex; align-items: center; gap: 0.75rem;">\';
                            html += \'<span style="font-size: 1.25rem; line-height: 1;">⚠️</span>\';
                            html += \'<span style="font-weight: 500; color: #212529; font-size: 1rem;">Webhook:</span>\';
                            html += \'</div>\';
                            html += \'<span style="background: #ffc107; color: #212529; padding: 0.25rem 0.75rem; font-size: 0.875rem; font-weight: 500; border-radius: 3px; text-transform: uppercase; letter-spacing: 0.025em;">DISABLED</span>\';
                            html += \'</div>\';
                        }
                        
                        html += \'</div>\';
                        
                        // Add warning if no triggers active
                        if (!cronReady && !data.webhook_enabled) {
                            html += \'<div class="alert alert-warning" style="margin-top: 1rem;"><i class="fa fa-exclamation-triangle"></i> No triggers active! Configure cron or enable webhooks.</div>\';
                        }
                        
                        triggersEl.innerHTML = html;
                    })
                    .catch(error => {
                        var triggersEl = document.getElementById(\'scheduler-triggers\');
                        if (triggersEl) {
                            // Show just cron status if health endpoint not available
                            var html = \'<ul class="list-unstyled">\';
                            if (cronReady) {
                                html += \'<li>✅ <strong>Cron:</strong> <span class="badge badge-success">Active</span></li>\';
                            } else {
                                html += \'<li>❌ <strong>Cron:</strong> <span class="badge badge-secondary">Not Configured</span></li>\';
                            }
                            html += \'<li>⚠️ <strong>Webhook:</strong> <span class="badge badge-secondary">Plugin Not Installed</span></li>\';
                            html += \'</ul>\';
                            triggersEl.innerHTML = html;
                        }
                    });
            }
            
            // Load on page ready
            if (document.readyState === \'loading\') {
                document.addEventListener(\'DOMContentLoaded\', loadTriggers);
            } else {
                loadTriggers();
    }
})();
</script>
',
                'markdown' => false,
                'name' => 'scheduler.trigger_methods',
                'validation' => 'loose'
            ],
            'scheduler.status_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.status_tab',
                'validation' => 'loose'
            ],
            'scheduler.jobs_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.jobs_title',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs' => [
                'type' => 'list',
                'style' => 'vertical',
                'label' => NULL,
                'classes' => 'cron-job-list compact',
                'key' => 'id',
                'name' => 'scheduler.custom_jobs',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.id' => [
                'type' => 'key',
                'label' => 'ID',
                'validate' => [
                    'required' => true,
                    'pattern' => '[a-zа-я0-9_\\-]+',
                    'max' => 20,
                    'message' => 'ID must be lowercase with dashes/underscores only and less than 20 characters'
                ],
                'name' => 'scheduler.custom_jobs.id',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.command' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.COMMAND',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.command',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.args' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.EXTRA_ARGUMENTS',
                'name' => 'scheduler.custom_jobs.args',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.at' => [
                'type' => 'text',
                'wrapper_classes' => 'cron-selector',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_RUNAT',
                'validate' => [
                    'required' => true
                ],
                'name' => 'scheduler.custom_jobs.at',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.output' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT',
                'name' => 'scheduler.custom_jobs.output',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.output_mode' => [
                'type' => 'select',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_OUTPUT_TYPE',
                'default' => 'append',
                'options' => [
                    'append' => 'Append',
                    'overwrite' => 'Overwrite'
                ],
                'name' => 'scheduler.custom_jobs.output_mode',
                'validation' => 'loose'
            ],
            'scheduler.custom_jobs.email' => [
                'type' => 'text',
                'label' => 'PLUGIN_ADMIN.SCHEDULER_EMAIL',
                'name' => 'scheduler.custom_jobs.email',
                'validation' => 'loose'
            ],
            'scheduler.jobs_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.jobs_tab',
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
            'scheduler.workers_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.workers_section',
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
            'scheduler.retry_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.retry_section',
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
            'scheduler.queue_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.queue_section',
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
            'scheduler.history_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.history_section',
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
            'scheduler.webhook_token_generate' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<div style="margin-top: -10px; margin-bottom: 15px;">
    <button type="button" class="button button-primary" onclick="generateWebhookToken()">
        <i class="fa fa-refresh"></i> Generate Token
    </button>
</div>
<script>
function generateWebhookToken() {
    try {
        // Generate token
        const array = new Uint8Array(32);
        crypto.getRandomValues(array);
        const token = Array.from(array, byte => byte.toString(16).padStart(2, \'0\')).join(\'\');
        
        // Try multiple selectors to find the field
        let field = document.querySelector(\'[name="data[scheduler][modern][webhook][token]"]\');
        if (!field) {
            field = document.querySelector(\'input[name*="webhook][token"]\');
        }
        if (!field) {
            field = document.getElementById(\'scheduler-modern-webhook-token\');
        }
        if (!field) {
            // Look for any text input in the webhook section
            const webhookSection = document.querySelector(\'.webhook_section\');
            if (webhookSection) {
                const inputs = webhookSection.querySelectorAll(\'input[type="text"]\');
                // Find the token field by checking for the placeholder
                for (let input of inputs) {
                    if (input.placeholder && input.placeholder.includes(\'Generate\')) {
                        field = input;
                        break;
                    }
                }
            }
        }
        
        if (field) {
            field.value = token;
            field.dispatchEvent(new Event(\'change\', { bubbles: true }));
            field.dispatchEvent(new Event(\'input\', { bubbles: true }));
            // Flash the field to show it was updated
            field.style.backgroundColor = \'#d4edda\';
            setTimeout(function() {
                field.style.backgroundColor = \'\';
            }, 500);
            // Also try to trigger Grav\'s form change detection
            if (window.jQuery) {
                jQuery(field).trigger(\'change\');
            }
        } else {
            // Log more debugging info
            console.error(\'Token field not found. Looking for input fields...\');
            console.log(\'All inputs:\', document.querySelectorAll(\'input[type="text"]\'));
            alert(\'Could not find the token field. Please ensure you are in the Advanced Features tab and the Webhook Configuration section is visible.\');
        }
    } catch (e) {
        console.error(\'Error generating token:\', e);
        alert(\'Error generating token: \' + e.message);
    }
}
</script>
',
                'markdown' => false,
                'name' => 'scheduler.webhook_token_generate',
                'validation' => 'loose'
            ],
            'scheduler.modern.webhook.path' => [
                'type' => 'text',
                'label' => 'Webhook Path',
                'default' => '/scheduler/webhook',
                'name' => 'scheduler.modern.webhook.path',
                'validation' => 'loose'
            ],
            'scheduler.webhook_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.webhook_section',
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
            'scheduler.health_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.health_section',
                'validation' => 'loose'
            ],
            'scheduler.webhook_examples' => [
                'type' => 'display',
                'label' => NULL,
                'content' => '<script src="{{ url(\'plugin://admin/themes/grav/js/clipboard-helper.js\') }}"></script>
<div class="webhook-examples">
    <script>
    // Initialize webhook commands when page loads
    document.addEventListener(\'DOMContentLoaded\', function() {
        if (typeof GravClipboard !== \'undefined\') {
            GravClipboard.initWebhookCommands();
        }
    });
    </script>
    
    <div class="alert alert-info">
        <h4>How to use webhooks:</h4>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Trigger all due jobs (respects schedule):</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <textarea id="webhook-all-cmd" readonly rows="2" style="font-family: monospace; background: #f5f5f5; resize: none;">Loading...</textarea>
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Force-run specific job (ignores schedule):</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <textarea id="webhook-job-cmd" readonly rows="2" style="font-family: monospace; background: #f5f5f5; resize: none;">Loading...</textarea>
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-bottom: 1rem;">
            <label style="display: block; margin-bottom: 0.25rem; font-weight: 500;">Check health status:</label>
            <div class="form-input-wrapper form-input-addon-wrapper">
                <input type="text" id="webhook-health-cmd" readonly value="Loading..." style="font-family: monospace; background: #f5f5f5;">
                <div class="form-input-addon form-input-append" style="cursor: pointer;" onclick="GravClipboard.copy(this)"><i class="fa fa-copy"></i> Copy</div>
            </div>
        </div>
        
        <div style="margin-top: 1rem;">
            <p><strong>GitHub Actions example:</strong></p>
            <pre>- name: Trigger Scheduler
  run: |
    curl -X POST ${{ secrets.SITE_URL }}/scheduler/webhook \\
      -H "Authorization: Bearer ${{ secrets.WEBHOOK_TOKEN }}"</pre>
        </div>
    </div>
</div>
',
                'markdown' => false,
                'name' => 'scheduler.webhook_examples',
                'validation' => 'loose'
            ],
            'scheduler.webhook_usage' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'scheduler.webhook_usage',
                'validation' => 'loose'
            ],
            'scheduler.modern_tab' => [
                'type' => 'tab',
                'name' => 'scheduler.modern_tab',
                'validation' => 'loose'
            ],
            'scheduler.scheduler_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'scheduler.scheduler_tabs',
                'validation' => 'loose'
            ],
            'security' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'security.xss_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'security.xss_section',
                'validation' => 'loose'
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
            'security.uploads_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'security.uploads_section',
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
            'site.content' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.content',
                'validation' => 'loose'
            ],
            'site.summary' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'site.summary',
                'validation' => 'loose'
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
                'type' => 'section',
                'underline' => true,
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
                'type' => 'section',
                'underline' => true,
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
            'system.content_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.content_section',
                'validation' => 'loose'
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
            'system.content' => [
                'type' => 'tab',
                'name' => 'system.content',
                'validation' => 'loose'
            ],
            'system.languages-section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.languages-section',
                'validation' => 'loose'
            ],
            'system.languages' => [
                'type' => 'tab',
                'name' => 'system.languages',
                'validation' => 'loose'
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
            'system.key' => [
                'type' => 'key',
                'label' => 'PLUGIN_ADMIN.LANGUAGE',
                'name' => 'system.key',
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
            'system.http_headers_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.http_headers_section',
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
            'system.http_headers' => [
                'type' => 'tab',
                'name' => 'system.http_headers',
                'validation' => 'loose'
            ],
            'system.markdow_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.markdow_section',
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
            'system.markdown' => [
                'type' => 'tab',
                'name' => 'system.markdown',
                'validation' => 'loose'
            ],
            'system.caching_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.caching_section',
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
            'system.flex_caching' => [
                'type' => 'section',
                'name' => 'system.flex_caching',
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
            'system.caching' => [
                'type' => 'tab',
                'name' => 'system.caching',
                'validation' => 'loose'
            ],
            'system.twig_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.twig_section',
                'validation' => 'loose'
            ],
            'system.twig' => [
                'type' => 'tab',
                'name' => 'system.twig',
                'validation' => 'loose'
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
            'system.general_config_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.general_config_section',
                'validation' => 'loose'
            ],
            'system.assets' => [
                'type' => 'tab',
                'name' => 'system.assets',
                'validation' => 'loose'
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
            'system.css_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.css_assets_section',
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
            'system.js_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.js_assets_section',
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
            'system.js_module_assets_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.js_module_assets_section',
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
            'system.errors_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.errors_section',
                'validation' => 'loose'
            ],
            'system.errors' => [
                'type' => 'tab',
                'name' => 'system.errors',
                'validation' => 'loose'
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
            'system.debugger_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.debugger_section',
                'validation' => 'loose'
            ],
            'system.debugger' => [
                'type' => 'tab',
                'name' => 'system.debugger',
                'validation' => 'loose'
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
            'system.media_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.media_section',
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
                'type' => 'tab',
                'name' => 'system.media',
                'validation' => 'loose'
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
            'system.section_images_cls' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.section_images_cls',
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
            'system.session_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.session_section',
                'validation' => 'loose'
            ],
            'system.session' => [
                'type' => 'tab',
                'name' => 'system.session',
                'validation' => 'loose'
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
            'system.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'system.advanced_section',
                'validation' => 'loose'
            ],
            'system.gpm_section' => [
                'type' => 'section',
                'name' => 'system.gpm_section',
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
            'system.updates_section' => [
                'type' => 'section',
                'name' => 'system.updates_section',
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
            'system.http_section' => [
                'type' => 'section',
                'name' => 'system.http_section',
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
            'system.misc_section' => [
                'type' => 'section',
                'name' => 'system.misc_section',
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
            'system.advanced' => [
                'type' => 'tab',
                'name' => 'system.advanced',
                'validation' => 'loose'
            ],
            'system.flex_accounts' => [
                'type' => 'section',
                'name' => 'system.flex_accounts',
                'validation' => 'loose'
            ],
            'system.accounts' => [
                'type' => 'tab',
                'name' => 'system.accounts',
                'validation' => 'loose'
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
            'system.system_tabs' => [
                'type' => 'tabs',
                'classes' => 'side-tabs',
                'name' => 'system.system_tabs',
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
            'plugins.form.general' => [
                'type' => 'section',
                'name' => 'plugins.form.general',
                'validation' => 'strict'
            ],
            'plugins.form.files' => [
                'type' => 'section',
                'name' => 'plugins.form.files',
                'validation' => 'strict'
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
                'type' => 'section',
                'name' => 'plugins.form.recaptcha',
                'validation' => 'strict'
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
            'plugins.form.turnstile_captcha' => [
                'type' => 'section',
                'name' => 'plugins.form.turnstile_captcha',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha' => [
                'type' => 'section',
                'name' => 'plugins.form.basic_captcha',
                'validation' => 'strict'
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
            'plugins.form.characters' => [
                'type' => 'element',
                'name' => 'plugins.form.characters',
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
            'plugins.form.math' => [
                'type' => 'element',
                'name' => 'plugins.form.math',
                'validation' => 'strict'
            ],
            'plugins.form.basic_captcha.type' => [
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
            'plugins.flex-objects.security_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.flex-objects.security_section',
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
            'plugins.relatedpages.basics_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.basics_title',
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
            'plugins.relatedpages.taxonomy_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.taxonomy_title',
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
            'plugins.relatedpages.content_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.content_title',
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
            'plugins.relatedpages.advanced_title' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.relatedpages.advanced_title',
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
            'plugins.simplesearch' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.simplesearch.enabled' => [
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
                'name' => 'plugins.simplesearch.enabled',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.search_content' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_CONTENT',
                'default' => 'rendered',
                'options' => [
                    'rendered' => 'PLUGIN_SIMPLESEARCH.RENDERED_CONTENT',
                    'raw' => 'PLUGIN_SIMPLESEARCH.RAW_CONTENT'
                ],
                'name' => 'plugins.simplesearch.search_content',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_css' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SIMPLESEARCH.BUILTIN_CSS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_css',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.built_in_js' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SIMPLESEARCH.BUILTIN_JS',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.built_in_js',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.display_button' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SIMPLESEARCH.DISPLAY_SEARCH_BUTTON',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.display_button',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.ignore_accented_characters' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_SIMPLESEARCH.IGNORE_ACCENDED_CHARACTERS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'plugins.simplesearch.ignore_accented_characters',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.min_query_length' => [
                'type' => 'text',
                'size' => 'x-small',
                'label' => 'PLUGIN_SIMPLESEARCH.MIN_QUERY_LENGTH',
                'validate' => [
                    'type' => 'number',
                    'min' => 0
                ],
                'name' => 'plugins.simplesearch.min_query_length',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.route' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_ROUTE',
                'default' => '/random',
                'name' => 'plugins.simplesearch.route',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.searchable_types' => [
                'type' => 'checkboxes',
                'label' => 'PLUGIN_SIMPLESEARCH.SEARCHABLE_TYPES',
                'description' => 'PLUGIN_SIMPLESEARCH.SEARCHABLE_TYPES_DESCRIPTION',
                'options' => [
                    'title' => 'Title',
                    'content' => 'Content',
                    'header' => 'Header',
                    'taxonomy' => 'Taxonomy'
                ],
                'use' => 'keys',
                'name' => 'plugins.simplesearch.searchable_types',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.header_keys_ignored' => [
                'type' => 'selectize',
                'size' => 'large',
                'label' => 'PLUGIN_SIMPLESEARCH.HEADER_KEYS_IGNORED',
                'classes' => 'fancy',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.header_keys_ignored',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.template' => [
                'type' => 'text',
                'size' => 'medium',
                'label' => 'PLUGIN_SIMPLESEARCH.SEARCH_PAGE_TEMPLATE',
                'default' => 'simplesearch_results',
                'name' => 'plugins.simplesearch.template',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filters' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.filters',
                'form_field' => false
            ],
            'plugins.simplesearch.filters.category' => [
                'type' => 'selectize',
                'label' => 'PLUGIN_SIMPLESEARCH.CATEGORY_FILTER',
                'validate' => [
                    'type' => 'commalist'
                ],
                'name' => 'plugins.simplesearch.filters.category',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.filter_combinator' => [
                'type' => 'select',
                'size' => 'medium',
                'classes' => 'fancy',
                'label' => 'PLUGIN_SIMPLESEARCH.FILTER_COMBINATOR',
                'default' => 'and',
                'options' => [
                    'and' => 'PLUGIN_SIMPLESEARCH.AND_COMBINATOR',
                    'or' => 'PLUGIN_SIMPLESEARCH.OR_COMBINATOR'
                ],
                'name' => 'plugins.simplesearch.filter_combinator',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order' => [
                'type' => '_parent',
                'name' => 'plugins.simplesearch.order',
                'form_field' => false
            ],
            'plugins.simplesearch.order.by' => [
                'type' => 'select',
                'size' => 'long',
                'classes' => 'fancy',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDERING',
                'options' => [
                    'default' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DEFAULT',
                    'folder' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_FOLDER',
                    'title' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_TITLE',
                    'date' => 'PLUGIN_ADMIN.DEFAULT_ORDERING_DATE'
                ],
                'name' => 'plugins.simplesearch.order.by',
                'validation' => 'strict'
            ],
            'plugins.simplesearch.order.dir' => [
                'type' => 'toggle',
                'label' => 'PLUGIN_ADMIN.DEFAULT_ORDER_DIRECTION',
                'highlight' => 'asc',
                'default' => 'desc',
                'options' => [
                    'asc' => 'PLUGIN_ADMIN.ASCENDING',
                    'desc' => 'PLUGIN_ADMIN.DESCENDING'
                ],
                'name' => 'plugins.simplesearch.order.dir',
                'validation' => 'strict'
            ],
            'plugins.admin' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'plugins.admin.Basics' => [
                'type' => 'section',
                'underline' => false,
                'name' => 'plugins.admin.Basics',
                'validation' => 'loose'
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
            'plugins.admin.Dashboard' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Dashboard',
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
            'plugins.admin.Notifications' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Notifications',
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
            'plugins.admin.config_tab' => [
                'type' => 'tab',
                'name' => 'plugins.admin.config_tab',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel' => [
                'type' => '_parent',
                'name' => 'plugins.admin.whitelabel',
                'form_field' => false
            ],
            'plugins.admin.whitelabel.logos' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.whitelabel.logos',
                'validation' => 'loose'
            ],
            'plugins.admin.whitelabel.logo_login' => [
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
                'type' => 'file',
                'label' => 'PLUGIN_ADMIN.TOP_LEFT_CUSTOM_LOGO_LABEL',
                'destination' => 'user://assets',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'plugins.admin.whitelabel.logo_custom',
                'validation' => 'loose'
            ],
            'plugins.admin.codemirror_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.codemirror_section',
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
            'plugins.admin.customization_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.customization_section',
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
            'plugins.admin.customization_tab' => [
                'type' => 'tab',
                'name' => 'plugins.admin.customization_tab',
                'validation' => 'loose'
            ],
            'plugins.admin.Popularity' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.Popularity',
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
            'plugins.admin.MediaResize' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.admin.MediaResize',
                'validation' => 'loose'
            ],
            'plugins.admin.MediaResizeNote' => [
                'type' => 'spacer',
                'text' => 'PLUGIN_ADMIN.PAGEMEDIA_RESIZER',
                'markdown' => true,
                'name' => 'plugins.admin.MediaResizeNote',
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
            'plugins.admin.extras_tab' => [
                'type' => 'tab',
                'name' => 'plugins.admin.extras_tab',
                'validation' => 'loose'
            ],
            'plugins.admin.admin_tabs' => [
                'type' => 'tabs',
                'name' => 'plugins.admin.admin_tabs',
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
            'plugins.sitemap.news_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.sitemap.news_section',
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
            'plugins.sitemap.data_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.sitemap.data_section',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions' => [
                'type' => 'list',
                'label' => 'PLUGIN_SITEMAP.ADDITIONS',
                'name' => 'plugins.sitemap.additions',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.location' => [
                'type' => 'text',
                'label' => 'PLUGIN_SITEMAP.LOCATION',
                'name' => 'plugins.sitemap.additions.location',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.lastmod' => [
                'type' => 'text',
                'label' => 'PLUGIN_SITEMAP.LASTMOD',
                'name' => 'plugins.sitemap.additions.lastmod',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.changefreq' => [
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
                'name' => 'plugins.sitemap.additions.changefreq',
                'validation' => 'strict'
            ],
            'plugins.sitemap.additions.priority' => [
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
                'name' => 'plugins.sitemap.additions.priority',
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
            'plugins.sitemap.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.sitemap.advanced_section',
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
            'plugins.seo' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'strict'
                ]
            ],
            'plugins.seo.plugin_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.seo.plugin_section',
                'validation' => 'strict'
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
            'plugins.seo.microdata_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.seo.microdata_section',
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
            'plugins.seo.mdcolumn1' => [
                'type' => 'column',
                'name' => 'plugins.seo.mdcolumn1',
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
            'plugins.seo.mdcolumn2' => [
                'type' => 'column',
                'name' => 'plugins.seo.mdcolumn2',
                'validation' => 'strict'
            ],
            'plugins.seo.md_columns' => [
                'type' => 'columns',
                'name' => 'plugins.seo.md_columns',
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
                'type' => 'section',
                'name' => 'plugins.login.rememberme',
                'validation' => 'loose'
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
            'plugins.login.options' => [
                'type' => 'section',
                'name' => 'plugins.login.options',
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
            'plugins.login.routes' => [
                'type' => 'tab',
                'name' => 'plugins.login.routes',
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
            'plugins.login.registration_fields' => [
                'type' => 'section',
                'name' => 'plugins.login.registration_fields',
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
            'plugins.login.access_levels' => [
                'type' => 'section',
                'security' => 'admin.super',
                'name' => 'plugins.login.access_levels',
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
            'plugins.login.registration' => [
                'type' => 'tab',
                'name' => 'plugins.login.registration',
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
            'plugins.login.Security' => [
                'type' => 'tab',
                'name' => 'plugins.login.Security',
                'validation' => 'loose'
            ],
            'plugins.login.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'class' => 'subtle',
                'name' => 'plugins.login.tabs',
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
            'plugins.email.smtp_config' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.smtp_config',
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
            'plugins.email.sendmail_config' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.sendmail_config',
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
            'plugins.email.email_Defaults' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.email_Defaults',
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
            'plugins.email.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'plugins.email.advanced_section',
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
            'themes.ngo-theme' => [
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
            'themes.ngo-theme.production-mode' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.PRODUCTION_MODE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.production-mode',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.grid-size' => [
                'type' => 'select',
                'label' => 'THEME_NGO.ADMIN.GRID_SIZE',
                'size' => 'small',
                'options' => [
                    '' => 'THEME_NGO.ADMIN.GRID_SIZE_NONE',
                    'grid-xl' => 'THEME_NGO.ADMIN.GRID_SIZE_EXTRA_LARGE',
                    'grid-lg' => 'THEME_NGO.ADMIN.GRID_SIZE_LARGE',
                    'grid-md' => 'THEME_NGO.ADMIN.GRID_SIZE_MEDIUM'
                ],
                'name' => 'themes.ngo-theme.grid-size',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.header_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.header_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.custom_logo' => [
                'type' => 'file',
                'label' => 'THEME_NGO.ADMIN.CUSTOM_LOGO',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.ngo-theme.custom_logo',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.header-fixed' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.HEADER_FIXED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.header-fixed',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.header-animated' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.HEADER_ANIMATED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.header-animated',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.header-dark' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.HEADER_DARK',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.header-dark',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.header-transparent' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.HEADER_TRANSPARENT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.header-transparent',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.footer_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.sticky-footer' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.STICKY_FOOTER',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.sticky-footer',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.blog_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.blog_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.blog-page' => [
                'type' => 'text',
                'label' => 'THEME_NGO.ADMIN.BLOG_PAGE',
                'size' => 'medium',
                'default' => '/blog',
                'name' => 'themes.ngo-theme.blog-page',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.sustainability_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.sustainability_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.sustainability_score' => [
                'type' => 'text',
                'label' => 'THEME_NGO.ADMIN.SUSTAINABILITY_SCORE',
                'size' => 'x-small',
                'default' => 'A+',
                'name' => 'themes.ngo-theme.sustainability_score',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.co2_per_view' => [
                'type' => 'text',
                'label' => 'THEME_NGO.ADMIN.CO2_PER_VIEW',
                'size' => 'x-small',
                'default' => '0.3g',
                'name' => 'themes.ngo-theme.co2_per_view',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.agentic_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.agentic_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.ai_disclosure' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.AI_DISCLOSURE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.ai_disclosure',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.ai_assistant' => [
                'type' => 'toggle',
                'label' => 'AI Assistant',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.ai_assistant',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.focus_mode' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.FOCUS_MODE',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.focus_mode',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.doodle_engine' => [
                'type' => 'toggle',
                'label' => 'THEME_NGO.ADMIN.DOODLE_ENGINE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.doodle_engine',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.eco_mode' => [
                'type' => 'toggle',
                'label' => 'Sustainability Mode',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.eco_mode',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.ngo_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.ngo_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_about_title' => [
                'type' => 'text',
                'label' => 'Footer About Title',
                'size' => 'medium',
                'default' => 'About Our Mission',
                'name' => 'themes.ngo-theme.footer_about_title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_mission' => [
                'type' => 'textarea',
                'label' => 'Footer Mission Statement',
                'size' => 'medium',
                'default' => 'Faith. Knowledge. Access.',
                'name' => 'themes.ngo-theme.footer_mission',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list' => [
                'type' => 'list',
                'label' => 'Active Projects (Timeline)',
                'name' => 'themes.ngo-theme.project_timeline_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.title' => [
                'type' => 'text',
                'label' => 'Project Title',
                'name' => 'themes.ngo-theme.project_timeline_list.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.description' => [
                'type' => 'textarea',
                'label' => 'Short Description',
                'name' => 'themes.ngo-theme.project_timeline_list.description',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.goal' => [
                'type' => 'text',
                'label' => 'Funding Goal (e.g. $10k)',
                'name' => 'themes.ngo-theme.project_timeline_list.goal',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.raised' => [
                'type' => 'text',
                'label' => 'Amount Raised (e.g. $7.5k)',
                'name' => 'themes.ngo-theme.project_timeline_list.raised',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.percent' => [
                'type' => 'range',
                'label' => 'Completion %',
                'min' => 0,
                'max' => 100,
                'default' => 0,
                'append' => '%',
                'name' => 'themes.ngo-theme.project_timeline_list.percent',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.project_timeline_list.status' => [
                'type' => 'select',
                'label' => 'Status',
                'options' => [
                    'active' => 'Active',
                    'completed' => 'Completed',
                    'planning' => 'Planning'
                ],
                'name' => 'themes.ngo-theme.project_timeline_list.status',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_bar_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.utility_bar_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_hijri_toggle' => [
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
                ],
                'name' => 'themes.ngo-theme.utility_hijri_toggle',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_prayer_toggle' => [
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
                ],
                'name' => 'themes.ngo-theme.utility_prayer_toggle',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_prayer_city' => [
                'type' => 'text',
                'label' => 'Default City for Prayer Times',
                'default' => 'Karachi',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.utility_prayer_city',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_language_toggle' => [
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
                ],
                'name' => 'themes.ngo-theme.utility_language_toggle',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.utility_accessibility_toggle' => [
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
                ],
                'name' => 'themes.ngo-theme.utility_accessibility_toggle',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.mega_menu_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_structure' => [
                'type' => 'list',
                'label' => 'Menu Columns',
                'name' => 'themes.ngo-theme.mega_menu_structure',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_structure.title' => [
                'type' => 'text',
                'label' => 'Column Title',
                'name' => 'themes.ngo-theme.mega_menu_structure.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_structure.links' => [
                'type' => 'list',
                'label' => 'Links',
                'name' => 'themes.ngo-theme.mega_menu_structure.links',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_structure.links.text' => [
                'type' => 'text',
                'label' => 'Link Text',
                'name' => 'themes.ngo-theme.mega_menu_structure.links.text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.mega_menu_structure.links.url' => [
                'type' => 'text',
                'label' => 'URL',
                'name' => 'themes.ngo-theme.mega_menu_structure.links.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.hero_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_video_url' => [
                'type' => 'file',
                'label' => 'Hero Background Video',
                'destination' => 'theme://images/hero',
                'multiple' => false,
                'accept' => [
                    0 => 'video/*'
                ],
                'name' => 'themes.ngo-theme.hero_video_url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_glass_opacity' => [
                'type' => 'range',
                'label' => 'Glass Overlay Opacity',
                'default' => 60,
                'min' => 0,
                'max' => 100,
                'append' => '%',
                'name' => 'themes.ngo-theme.hero_glass_opacity',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_primary_cta_text' => [
                'type' => 'text',
                'label' => 'Primary CTA Text',
                'default' => 'Explore Services',
                'name' => 'themes.ngo-theme.hero_primary_cta_text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_primary_cta_link' => [
                'type' => 'text',
                'label' => 'Primary CTA Link',
                'default' => '/services',
                'name' => 'themes.ngo-theme.hero_primary_cta_link',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_secondary_cta_text' => [
                'type' => 'text',
                'label' => 'Secondary CTA Text',
                'default' => 'Support Our Mission',
                'name' => 'themes.ngo-theme.hero_secondary_cta_text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hero_secondary_cta_link' => [
                'type' => 'text',
                'label' => 'Secondary CTA Link',
                'default' => '/donate',
                'name' => 'themes.ngo-theme.hero_secondary_cta_link',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.services_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_list' => [
                'type' => 'list',
                'label' => 'Service Cards',
                'name' => 'themes.ngo-theme.services_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_list.icon' => [
                'type' => 'text',
                'label' => 'Icon (Line Awesome)',
                'name' => 'themes.ngo-theme.services_list.icon',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_list.title' => [
                'type' => 'text',
                'label' => 'Title',
                'name' => 'themes.ngo-theme.services_list.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_list.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'themes.ngo-theme.services_list.description',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.services_list.link' => [
                'type' => 'text',
                'label' => 'Link URL',
                'name' => 'themes.ngo-theme.services_list.link',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.testimonials_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list' => [
                'type' => 'list',
                'label' => 'Testimonials',
                'name' => 'themes.ngo-theme.testimonials_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list.name' => [
                'type' => 'text',
                'label' => 'Name',
                'name' => 'themes.ngo-theme.testimonials_list.name',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list.role' => [
                'type' => 'text',
                'label' => 'Role (e.g. Student, Donor)',
                'name' => 'themes.ngo-theme.testimonials_list.role',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list.quote' => [
                'type' => 'textarea',
                'label' => 'Quote',
                'name' => 'themes.ngo-theme.testimonials_list.quote',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list.image' => [
                'type' => 'file',
                'label' => 'Photo',
                'destination' => 'theme://images/testimonials',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.ngo-theme.testimonials_list.image',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.testimonials_list.video_url' => [
                'type' => 'text',
                'label' => 'Video URL (optional)',
                'name' => 'themes.ngo-theme.testimonials_list.video_url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.khums_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.khums_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.khums_rate' => [
                'type' => 'number',
                'label' => 'Khums Rate (%)',
                'default' => 20,
                'size' => 'x-small',
                'name' => 'themes.ngo-theme.khums_rate',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.khums_currency' => [
                'type' => 'text',
                'label' => 'Currency Symbol',
                'default' => '$',
                'size' => 'x-small',
                'name' => 'themes.ngo-theme.khums_currency',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.events_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list' => [
                'type' => 'list',
                'label' => 'Upcoming Events',
                'name' => 'themes.ngo-theme.events_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list.title' => [
                'type' => 'text',
                'label' => 'Event Title',
                'name' => 'themes.ngo-theme.events_list.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list.date' => [
                'type' => 'datetime',
                'label' => 'Date & Time',
                'name' => 'themes.ngo-theme.events_list.date',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list.location' => [
                'type' => 'text',
                'label' => 'Location',
                'name' => 'themes.ngo-theme.events_list.location',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list.url' => [
                'type' => 'text',
                'label' => 'Event Link/Registration',
                'name' => 'themes.ngo-theme.events_list.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.events_list.type' => [
                'type' => 'text',
                'label' => 'Event Type',
                'default' => 'Seminar',
                'name' => 'themes.ngo-theme.events_list.type',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.inspiration_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.inspiration_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.inspiration_text' => [
                'type' => 'text',
                'label' => 'Inspiration Text',
                'default' => '"Indeed, with hardship [will be] ease."',
                'size' => 'large',
                'name' => 'themes.ngo-theme.inspiration_text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.inspiration_source' => [
                'type' => 'text',
                'label' => 'Inspiration Source',
                'default' => 'Quran 94:6',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.inspiration_source',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.prayer_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.prayer_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.prayer_times_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Prayer Times',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.ngo-theme.prayer_times_enabled',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.prayer_api_key' => [
                'type' => 'text',
                'label' => 'Aladhan API Key (Optional)',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.prayer_api_key',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.hijri_adjustment' => [
                'type' => 'number',
                'label' => 'Hijri Date Adjustment',
                'default' => 0,
                'size' => 'x-small',
                'name' => 'themes.ngo-theme.hijri_adjustment',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.contact_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.contact_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.contact_address' => [
                'type' => 'textarea',
                'label' => 'Contact Address',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.contact_address',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.contact_email' => [
                'type' => 'email',
                'label' => 'Contact Email',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.contact_email',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.contact_phone' => [
                'type' => 'text',
                'label' => 'Contact Phone',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.contact_phone',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.contact_whatsapp' => [
                'type' => 'text',
                'label' => 'WhatsApp Number',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.contact_whatsapp',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.social_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.social_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.social_links' => [
                'type' => 'list',
                'label' => 'Social Media Links',
                'name' => 'themes.ngo-theme.social_links',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.social_links.network' => [
                'type' => 'select',
                'label' => 'Network',
                'options' => [
                    'facebook' => 'Facebook',
                    'twitter' => 'Twitter',
                    'instagram' => 'Instagram',
                    'linkedin' => 'LinkedIn',
                    'youtube' => 'YouTube',
                    'whatsapp' => 'WhatsApp'
                ],
                'name' => 'themes.ngo-theme.social_links.network',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.social_links.url' => [
                'type' => 'url',
                'label' => 'URL',
                'name' => 'themes.ngo-theme.social_links.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_links_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.footer_links_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_links' => [
                'type' => 'list',
                'label' => 'Footer Quick Links',
                'name' => 'themes.ngo-theme.footer_links',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_links.text' => [
                'type' => 'text',
                'label' => 'Link Text',
                'name' => 'themes.ngo-theme.footer_links.text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_links.url' => [
                'type' => 'text',
                'label' => 'Link URL',
                'name' => 'themes.ngo-theme.footer_links.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.footer_links.icon' => [
                'type' => 'text',
                'label' => 'Icon (optional)',
                'name' => 'themes.ngo-theme.footer_links.icon',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.cta_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.cta_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.enabled' => [
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
                ],
                'name' => 'themes.ngo-theme.enabled',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.text' => [
                'type' => 'text',
                'label' => 'Button Text',
                'default' => 'Student Login',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.url' => [
                'type' => 'url',
                'label' => 'Button URL',
                'default' => 'https://moodle.aabtaab.com',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.icon' => [
                'type' => 'text',
                'label' => 'Button Icon',
                'default' => 'graduation-cap',
                'name' => 'themes.ngo-theme.icon',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.external' => [
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
                ],
                'name' => 'themes.ngo-theme.external',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.cta_button' => [
                'type' => 'fieldset',
                'collapsed' => false,
                'name' => 'themes.ngo-theme.cta_button',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.newsletter_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.newsletter_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.newsletter_enabled' => [
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
                ],
                'name' => 'themes.ngo-theme.newsletter_enabled',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.newsletter_action' => [
                'type' => 'url',
                'label' => 'Newsletter Form Action',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.newsletter_action',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.education_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.education_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.student_login_title' => [
                'type' => 'text',
                'label' => 'Student Login Title',
                'default' => 'Student Login',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.student_login_title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.student_login_description' => [
                'type' => 'text',
                'label' => 'Student Login Description',
                'default' => 'Access your Moodle courses and dashboard.',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.student_login_description',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.student_login_button_text' => [
                'type' => 'text',
                'label' => 'Student Login Button Text',
                'default' => 'Sign In to Portal',
                'size' => 'medium',
                'name' => 'themes.ngo-theme.student_login_button_text',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.featured_courses_list' => [
                'type' => 'list',
                'label' => 'Featured Courses',
                'name' => 'themes.ngo-theme.featured_courses_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.featured_courses_list.title' => [
                'type' => 'text',
                'label' => 'Course Title',
                'name' => 'themes.ngo-theme.featured_courses_list.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.featured_courses_list.instructor' => [
                'type' => 'text',
                'label' => 'Instructor Name',
                'name' => 'themes.ngo-theme.featured_courses_list.instructor',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.featured_courses_list.image' => [
                'type' => 'file',
                'label' => 'Course Thumbnail',
                'destination' => 'theme://images/courses',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.ngo-theme.featured_courses_list.image',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.featured_courses_list.url' => [
                'type' => 'text',
                'label' => 'Course Link',
                'default' => '#',
                'name' => 'themes.ngo-theme.featured_courses_list.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.products_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list' => [
                'type' => 'list',
                'label' => 'Product Highlights',
                'name' => 'themes.ngo-theme.products_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list.title' => [
                'type' => 'text',
                'label' => 'Product Title',
                'name' => 'themes.ngo-theme.products_list.title',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list.price' => [
                'type' => 'text',
                'label' => 'Price',
                'name' => 'themes.ngo-theme.products_list.price',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list.type' => [
                'type' => 'select',
                'label' => 'Type',
                'options' => [
                    'physical' => 'Physical',
                    'digital' => 'Digital'
                ],
                'name' => 'themes.ngo-theme.products_list.type',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list.image' => [
                'type' => 'file',
                'label' => 'Product Image',
                'destination' => 'theme://images/products',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.ngo-theme.products_list.image',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.products_list.url' => [
                'type' => 'text',
                'label' => 'Product Link',
                'default' => '#',
                'name' => 'themes.ngo-theme.products_list.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.trust_signals_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.trust_signals_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.trust_signals_images' => [
                'type' => 'list',
                'label' => 'Trust Badges (Payment/SSL)',
                'name' => 'themes.ngo-theme.trust_signals_images',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.trust_signals_images.name' => [
                'type' => 'text',
                'label' => 'Name',
                'name' => 'themes.ngo-theme.trust_signals_images.name',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.trust_signals_images.image' => [
                'type' => 'file',
                'label' => 'Badge Image',
                'destination' => 'theme://images/badges',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.ngo-theme.trust_signals_images.image',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.trust_signals_images.url' => [
                'type' => 'text',
                'label' => 'Link (optional)',
                'name' => 'themes.ngo-theme.trust_signals_images.url',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.faq_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.faq_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.faq_list' => [
                'type' => 'list',
                'label' => 'Common Q&A',
                'name' => 'themes.ngo-theme.faq_list',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.faq_list.q' => [
                'type' => 'text',
                'label' => 'Question',
                'name' => 'themes.ngo-theme.faq_list.q',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.faq_list.a' => [
                'type' => 'textarea',
                'label' => 'Answer',
                'name' => 'themes.ngo-theme.faq_list.a',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.search_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.ngo-theme.search_section',
                'validation' => 'loose'
            ],
            'themes.ngo-theme.search_enabled' => [
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
                ],
                'name' => 'themes.ngo-theme.search_enabled',
                'validation' => 'loose'
            ],
            'themes.quark' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'themes.quark.production-mode' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.PRODUCTION_MODE',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.production-mode',
                'validation' => 'loose'
            ],
            'themes.quark.grid-size' => [
                'type' => 'select',
                'label' => 'THEME_QUARK.ADMIN.GRID_SIZE',
                'size' => 'small',
                'options' => [
                    '' => 'THEME_QUARK.ADMIN.GRID_SIZE_NONE',
                    'grid-xl' => 'THEME_QUARK.ADMIN.GRID_SIZE_EXTRA_LARGE',
                    'grid-lg' => 'THEME_QUARK.ADMIN.GRID_SIZE_LARGE',
                    'grid-md' => 'THEME_QUARK.ADMIN.GRID_SIZE_MEDIUM'
                ],
                'name' => 'themes.quark.grid-size',
                'validation' => 'loose'
            ],
            'themes.quark.header_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark.header_section',
                'validation' => 'loose'
            ],
            'themes.quark.custom_logo' => [
                'type' => 'file',
                'label' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'markdown' => true,
                'description' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO_DESCRIPTION',
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.quark.custom_logo',
                'validation' => 'loose'
            ],
            'themes.quark.custom_logo_mobile' => [
                'type' => 'file',
                'label' => 'THEME_QUARK.ADMIN.CUSTOM_LOGO_MOBILE',
                'size' => 'large',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.quark.custom_logo_mobile',
                'validation' => 'loose'
            ],
            'themes.quark.header-fixed' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.HEADER_FIXED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.header-fixed',
                'validation' => 'loose'
            ],
            'themes.quark.header-animated' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.HEADER_ANIMATED',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.header-animated',
                'validation' => 'loose'
            ],
            'themes.quark.header-dark' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.HEADER_DARK',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.header-dark',
                'validation' => 'loose'
            ],
            'themes.quark.header-transparent' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.HEADER_TRANSPARENT',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.header-transparent',
                'validation' => 'loose'
            ],
            'themes.quark.footer_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark.footer_section',
                'validation' => 'loose'
            ],
            'themes.quark.sticky-footer' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.STICKY_FOOTER',
                'highlight' => 1,
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.sticky-footer',
                'validation' => 'loose'
            ],
            'themes.quark.blog_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark.blog_section',
                'validation' => 'loose'
            ],
            'themes.quark.blog-page' => [
                'type' => 'text',
                'label' => 'THEME_QUARK.ADMIN.BLOG_PAGE',
                'size' => 'medium',
                'default' => '/blog',
                'name' => 'themes.quark.blog-page',
                'validation' => 'loose'
            ],
            'themes.quark.spectre_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.quark.spectre_section',
                'validation' => 'loose'
            ],
            'themes.quark.spectre' => [
                'type' => '_parent',
                'name' => 'themes.quark.spectre',
                'form_field' => false
            ],
            'themes.quark.spectre.exp' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.SPECTRE_EXP',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.spectre.exp',
                'validation' => 'loose'
            ],
            'themes.quark.spectre.icons' => [
                'type' => 'toggle',
                'label' => 'THEME_QUARK.ADMIN.SPECTRE_ICONS',
                'highlight' => 0,
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'validate' => [
                    'type' => 'bool'
                ],
                'name' => 'themes.quark.spectre.icons',
                'validation' => 'loose'
            ],
            'themes.my-quark' => [
                'type' => '_root',
                'form_field' => false,
                'form' => [
                    'validation' => 'loose'
                ]
            ],
            'themes.my-quark.design_system_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Configure atomic design tokens that form the foundation of your site\'s visual design. These settings cascade throughout all components and features.',
                'name' => 'themes.my-quark.design_system_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_colors_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.brand_colors_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_primary' => [
                'type' => 'color',
                'label' => 'Primary Color',
                'default' => '#3b4252',
                'validate' => [
                    'required' => true
                ],
                'name' => 'themes.my-quark.color_primary',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_secondary' => [
                'type' => 'color',
                'label' => 'Secondary Color',
                'default' => '#88c0d0',
                'name' => 'themes.my-quark.color_secondary',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_accent' => [
                'type' => 'color',
                'label' => 'Accent Color',
                'default' => '#bf616a',
                'name' => 'themes.my-quark.color_accent',
                'validation' => 'loose'
            ],
            'themes.my-quark.surface_colors_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.surface_colors_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_background_body' => [
                'type' => 'color',
                'label' => 'Body Background',
                'default' => '#eceff4',
                'name' => 'themes.my-quark.color_background_body',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_background_card' => [
                'type' => 'color',
                'label' => 'Card Background',
                'default' => '#ffffff',
                'name' => 'themes.my-quark.color_background_card',
                'validation' => 'loose'
            ],
            'themes.my-quark.text_colors_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.text_colors_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_text_primary' => [
                'type' => 'color',
                'label' => 'Primary Text',
                'default' => '#2e3440',
                'name' => 'themes.my-quark.color_text_primary',
                'validation' => 'loose'
            ],
            'themes.my-quark.color_text_secondary' => [
                'type' => 'color',
                'label' => 'Secondary Text',
                'default' => '#4c566a',
                'name' => 'themes.my-quark.color_text_secondary',
                'validation' => 'loose'
            ],
            'themes.my-quark.colors_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.colors_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.font_families_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.font_families_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_font_body' => [
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
                'name' => 'themes.my-quark.typography_font_body',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_font_headings' => [
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
                'name' => 'themes.my-quark.typography_font_headings',
                'validation' => 'loose'
            ],
            'themes.my-quark.fluid_typography_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.fluid_typography_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_fluid_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Fluid Scaling',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.typography_fluid_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_size_min' => [
                'type' => 'range',
                'label' => 'Minimum Font Size (Mobile)',
                'default' => 16,
                'min' => 14,
                'max' => 18,
                'step' => 0.5,
                'append' => 'px',
                'name' => 'themes.my-quark.typography_size_min',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_size_max' => [
                'type' => 'range',
                'label' => 'Maximum Font Size (Desktop)',
                'default' => 18,
                'min' => 16,
                'max' => 24,
                'step' => 0.5,
                'append' => 'px',
                'name' => 'themes.my-quark.typography_size_max',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_scale_ratio' => [
                'type' => 'range',
                'label' => 'Type Scale Ratio',
                'default' => 1.25,
                'min' => 1.067,
                'max' => 1.618,
                'step' => 0.001,
                'append' => 'x',
                'name' => 'themes.my-quark.typography_scale_ratio',
                'validation' => 'loose'
            ],
            'themes.my-quark.line_heights_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.line_heights_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_line_height_body' => [
                'type' => 'range',
                'label' => 'Body Line Height',
                'default' => 1.6,
                'min' => 1.4,
                'max' => 2.0,
                'step' => 0.05,
                'name' => 'themes.my-quark.typography_line_height_body',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_line_height_headings' => [
                'type' => 'range',
                'label' => 'Headings Line Height',
                'default' => 1.2,
                'min' => 1.0,
                'max' => 1.4,
                'step' => 0.05,
                'name' => 'themes.my-quark.typography_line_height_headings',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_letter_spacing_headings' => [
                'type' => 'range',
                'label' => 'Headings Letter Spacing',
                'default' => -0.02,
                'min' => -0.1,
                'max' => 0.1,
                'step' => 0.01,
                'append' => 'em',
                'name' => 'themes.my-quark.typography_letter_spacing_headings',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_max_measure' => [
                'type' => 'range',
                'label' => 'Maximum Line Length',
                'default' => 65,
                'min' => 45,
                'max' => 85,
                'step' => 1,
                'append' => 'ch',
                'name' => 'themes.my-quark.typography_max_measure',
                'validation' => 'loose'
            ],
            'themes.my-quark.typography_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.typography_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.layout_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.layout_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.layout_container_width' => [
                'type' => 'range',
                'label' => 'Container Max Width',
                'default' => 1200,
                'min' => 800,
                'max' => 1600,
                'step' => 50,
                'append' => 'px',
                'name' => 'themes.my-quark.layout_container_width',
                'validation' => 'loose'
            ],
            'themes.my-quark.layout_spacing_scale' => [
                'type' => 'range',
                'label' => 'Spacing Scale',
                'default' => 1.0,
                'min' => 0.5,
                'max' => 2.0,
                'step' => 0.1,
                'append' => 'x',
                'name' => 'themes.my-quark.layout_spacing_scale',
                'validation' => 'loose'
            ],
            'themes.my-quark.grid_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.grid_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.layout_grid_size' => [
                'type' => 'select',
                'label' => 'Grid System',
                'default' => 'grid-xl',
                'options' => [
                    'grid-lg' => 'Large Grid',
                    'grid-xl' => 'Extra Large Grid'
                ],
                'name' => 'themes.my-quark.layout_grid_size',
                'validation' => 'loose'
            ],
            'themes.my-quark.spacing_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.spacing_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.shapes_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.shapes_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.radius_corners' => [
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
                'name' => 'themes.my-quark.radius_corners',
                'validation' => 'loose'
            ],
            'themes.my-quark.shadows_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.shadows_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.shadow_neomorphism_strength' => [
                'type' => 'range',
                'label' => 'Neomorphism Intensity',
                'default' => 0,
                'min' => 0,
                'max' => 1.0,
                'step' => 0.1,
                'name' => 'themes.my-quark.shadow_neomorphism_strength',
                'validation' => 'loose'
            ],
            'themes.my-quark.shadow_neomorphism_light_source' => [
                'type' => 'select',
                'label' => 'Light Source Direction',
                'default' => 'top-left',
                'options' => [
                    'top-left' => 'Top Left',
                    'top-right' => 'Top Right',
                    'top' => 'Top (Overhead)'
                ],
                'name' => 'themes.my-quark.shadow_neomorphism_light_source',
                'validation' => 'loose'
            ],
            'themes.my-quark.glass_effects_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.glass_effects_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.glass_opacity' => [
                'type' => 'range',
                'label' => 'Glass Transparency',
                'default' => 0.85,
                'min' => 0.1,
                'max' => 1.0,
                'step' => 0.05,
                'name' => 'themes.my-quark.glass_opacity',
                'validation' => 'loose'
            ],
            'themes.my-quark.glass_blur' => [
                'type' => 'range',
                'label' => 'Background Blur',
                'default' => 20,
                'min' => 0,
                'max' => 50,
                'step' => 1,
                'append' => 'px',
                'name' => 'themes.my-quark.glass_blur',
                'validation' => 'loose'
            ],
            'themes.my-quark.atmospheric_effects_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.atmospheric_effects_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.effect_vignette_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Vignette',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.effect_vignette_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.visual_effects_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.visual_effects_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.design_system_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.design_system_tabs',
                'validation' => 'loose'
            ],
            'themes.my-quark.design_system_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.design_system_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_identity_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Configure your brand identity, logo, contact details, and social media profiles.',
                'name' => 'themes.my-quark.brand_identity_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.logo_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.logo_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_logo' => [
                'type' => 'file',
                'label' => 'Website Logo',
                'destination' => 'theme://images/logo',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.my-quark.brand_logo',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_name' => [
                'type' => 'text',
                'label' => 'Brand Name',
                'name' => 'themes.my-quark.brand_name',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_show_text' => [
                'type' => 'toggle',
                'label' => 'Show Brand Text with Logo',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.brand_show_text',
                'validation' => 'loose'
            ],
            'themes.my-quark.contact_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.contact_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.contact_address' => [
                'type' => 'text',
                'label' => 'Address',
                'name' => 'themes.my-quark.contact_address',
                'validation' => 'loose'
            ],
            'themes.my-quark.contact_email' => [
                'type' => 'text',
                'label' => 'Email Address',
                'name' => 'themes.my-quark.contact_email',
                'validation' => 'loose'
            ],
            'themes.my-quark.contact_phone' => [
                'type' => 'text',
                'label' => 'Phone Number',
                'name' => 'themes.my-quark.contact_phone',
                'validation' => 'loose'
            ],
            'themes.my-quark.social_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.social_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.social_links' => [
                'type' => 'list',
                'label' => 'Social Profiles',
                'name' => 'themes.my-quark.social_links',
                'validation' => 'loose'
            ],
            'themes.my-quark.social_links.network' => [
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
                ],
                'name' => 'themes.my-quark.social_links.network',
                'validation' => 'loose'
            ],
            'themes.my-quark.social_links.url' => [
                'type' => 'text',
                'label' => 'Profile URL',
                'name' => 'themes.my-quark.social_links.url',
                'validation' => 'loose'
            ],
            'themes.my-quark.brand_identity_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.brand_identity_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.homepage_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Manage the content sections of your homepage directly from here.',
                'name' => 'themes.my-quark.homepage_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Dynamic Homepage',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.home_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_hero_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.home_hero_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_hero_title' => [
                'type' => 'text',
                'label' => 'Hero Title',
                'default' => 'Learn Quran, Fiqh & More From Shia Scholars.',
                'name' => 'themes.my-quark.home_hero_title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_hero_description' => [
                'type' => 'textarea',
                'label' => 'Hero Description',
                'default' => 'At Aabtaab, we bring accessible and affordable Shia Islamic education to everyone no matter where you are in the world.',
                'name' => 'themes.my-quark.home_hero_description',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_hero_btn_text' => [
                'type' => 'text',
                'label' => 'Primary Button Text',
                'default' => 'VIEW ALL SERVICES',
                'name' => 'themes.my-quark.home_hero_btn_text',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_hero_btn_url' => [
                'type' => 'text',
                'label' => 'Primary Button URL',
                'default' => '#services',
                'name' => 'themes.my-quark.home_hero_btn_url',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.home_services_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services_title' => [
                'type' => 'text',
                'label' => 'Section Title',
                'default' => 'Our Services 🤲',
                'name' => 'themes.my-quark.home_services_title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services' => [
                'type' => 'list',
                'label' => 'Services List',
                'name' => 'themes.my-quark.home_services',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services.icon' => [
                'type' => 'text',
                'label' => 'Icon (Emoji/Text)',
                'name' => 'themes.my-quark.home_services.icon',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services.title' => [
                'type' => 'text',
                'label' => 'Title',
                'name' => 'themes.my-quark.home_services.title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services.description' => [
                'type' => 'textarea',
                'label' => 'Description',
                'name' => 'themes.my-quark.home_services.description',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services.url' => [
                'type' => 'text',
                'label' => 'Link URL',
                'name' => 'themes.my-quark.home_services.url',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_services.btn_text' => [
                'type' => 'text',
                'label' => 'Button Text',
                'default' => 'View Details →',
                'name' => 'themes.my-quark.home_services.btn_text',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.home_quote_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_title' => [
                'type' => 'text',
                'label' => 'Section Title',
                'default' => 'Quote of the Day',
                'name' => 'themes.my-quark.home_quote_title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_author' => [
                'type' => 'text',
                'label' => 'Author',
                'default' => 'Prophet Muhammad (SAWW)',
                'name' => 'themes.my-quark.home_quote_author',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_arabic' => [
                'type' => 'textarea',
                'label' => 'Arabic Text',
                'default' => 'ظِلُّ الْمُؤْمِنِ يَوْمَ الْقِيَامَةِ صَدَقَتُهُ',
                'name' => 'themes.my-quark.home_quote_arabic',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_english' => [
                'type' => 'textarea',
                'label' => 'English Translation',
                'default' => '"The believer\'s shade on the Day of Resurrection will be his charity"',
                'name' => 'themes.my-quark.home_quote_english',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_btn_text' => [
                'type' => 'text',
                'label' => 'CTA Button Text',
                'default' => '❤️ GIVE TODAY',
                'name' => 'themes.my-quark.home_quote_btn_text',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_quote_btn_url' => [
                'type' => 'text',
                'label' => 'CTA Button URL',
                'default' => '/donate',
                'name' => 'themes.my-quark.home_quote_btn_url',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.home_courses_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses_title' => [
                'type' => 'text',
                'label' => 'Section Title',
                'default' => 'Popular Courses 📚',
                'name' => 'themes.my-quark.home_courses_title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses_subtitle' => [
                'type' => 'text',
                'label' => 'Subtitle',
                'default' => 'Pick A Course To Get Started',
                'name' => 'themes.my-quark.home_courses_subtitle',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses' => [
                'type' => 'list',
                'label' => 'Courses List',
                'name' => 'themes.my-quark.home_courses',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses.icon' => [
                'type' => 'text',
                'label' => 'Icon',
                'name' => 'themes.my-quark.home_courses.icon',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses.title' => [
                'type' => 'text',
                'label' => 'Title',
                'name' => 'themes.my-quark.home_courses.title',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses.subtitle' => [
                'type' => 'text',
                'label' => 'Subtitle',
                'name' => 'themes.my-quark.home_courses.subtitle',
                'validation' => 'loose'
            ],
            'themes.my-quark.home_courses.url' => [
                'type' => 'text',
                'label' => 'Enroll URL',
                'name' => 'themes.my-quark.home_courses.url',
                'validation' => 'loose'
            ],
            'themes.my-quark.homepage_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.homepage_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Theme-level defaults for hero sections. Individual pages can override these settings.',
                'name' => 'themes.my-quark.hero_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.hero_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_default_style' => [
                'type' => 'select',
                'label' => 'Default Style',
                'default' => 'standard',
                'options' => [
                    'standard' => 'Standard (Centered)',
                    'split' => 'Split (Text Left / Image Right)',
                    'immersive' => 'Immersive (Full Screen)',
                    'minimal' => 'Minimal (Text Only)'
                ],
                'name' => 'themes.my-quark.hero_default_style',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_default_overlay' => [
                'type' => 'range',
                'label' => 'Default Overlay Opacity',
                'default' => 0.3,
                'min' => 0,
                'max' => 1,
                'step' => 0.1,
                'name' => 'themes.my-quark.hero_default_overlay',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_default_button_style' => [
                'type' => 'select',
                'label' => 'Default CTA Button Style',
                'default' => 'primary',
                'options' => [
                    'primary' => 'Primary',
                    'secondary' => 'Secondary',
                    'accent' => 'Accent',
                    'ghost' => 'Ghost'
                ],
                'name' => 'themes.my-quark.hero_default_button_style',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_enable_animations' => [
                'type' => 'toggle',
                'label' => 'Enable Animations',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.hero_enable_animations',
                'validation' => 'loose'
            ],
            'themes.my-quark.hero_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.hero_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.backgrounds_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Configure page backgrounds with solid colors, gradients, images, animated meshes, or patterns.',
                'name' => 'themes.my-quark.backgrounds_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mode_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.background_mode_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mode' => [
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
                'name' => 'themes.my-quark.background_mode',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_solid_color' => [
                'type' => 'color',
                'label' => 'Background Color',
                'default' => '#ffffff',
                'name' => 'themes.my-quark.background_solid_color',
                'validation' => 'loose'
            ],
            'themes.my-quark.solid_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.solid_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_gradient_type' => [
                'type' => 'select',
                'label' => 'Gradient Type',
                'default' => 'linear',
                'options' => [
                    'linear' => 'Linear',
                    'radial' => 'Radial'
                ],
                'name' => 'themes.my-quark.background_gradient_type',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_gradient_angle' => [
                'type' => 'range',
                'label' => 'Angle',
                'default' => 135,
                'min' => 0,
                'max' => 360,
                'step' => 5,
                'append' => 'deg',
                'name' => 'themes.my-quark.background_gradient_angle',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_gradient_start' => [
                'type' => 'color',
                'label' => 'Start Color',
                'default' => '#3b4252',
                'name' => 'themes.my-quark.background_gradient_start',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_gradient_end' => [
                'type' => 'color',
                'label' => 'End Color',
                'default' => '#88c0d0',
                'name' => 'themes.my-quark.background_gradient_end',
                'validation' => 'loose'
            ],
            'themes.my-quark.gradient_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.gradient_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image' => [
                'type' => 'file',
                'label' => 'Background Image',
                'destination' => 'theme://images/backgrounds',
                'multiple' => false,
                'accept' => [
                    0 => 'image/*'
                ],
                'name' => 'themes.my-quark.background_image',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image_position' => [
                'type' => 'select',
                'label' => 'Position',
                'default' => 'center center',
                'options' => [
                    'center center' => 'Center',
                    'top center' => 'Top',
                    'bottom center' => 'Bottom'
                ],
                'name' => 'themes.my-quark.background_image_position',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image_size' => [
                'type' => 'select',
                'label' => 'Size',
                'default' => 'cover',
                'options' => [
                    'cover' => 'Cover (Fill)',
                    'contain' => 'Contain (Fit)',
                    'auto' => 'Original Size'
                ],
                'name' => 'themes.my-quark.background_image_size',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image_attachment' => [
                'type' => 'select',
                'label' => 'Scroll Behavior',
                'default' => 'fixed',
                'options' => [
                    'fixed' => 'Fixed (Parallax)',
                    'scroll' => 'Scroll (Normal)'
                ],
                'name' => 'themes.my-quark.background_image_attachment',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image_overlay' => [
                'type' => 'color',
                'label' => 'Overlay Color',
                'default' => '#000000',
                'name' => 'themes.my-quark.background_image_overlay',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_image_overlay_opacity' => [
                'type' => 'range',
                'label' => 'Overlay Opacity',
                'default' => 0.3,
                'min' => 0,
                'max' => 1,
                'step' => 0.1,
                'name' => 'themes.my-quark.background_image_overlay_opacity',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.image_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mesh_color1' => [
                'type' => 'color',
                'label' => 'Mesh Color 1',
                'default' => '#3b4252',
                'name' => 'themes.my-quark.background_mesh_color1',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mesh_color2' => [
                'type' => 'color',
                'label' => 'Mesh Color 2',
                'default' => '#bf616a',
                'name' => 'themes.my-quark.background_mesh_color2',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mesh_color3' => [
                'type' => 'color',
                'label' => 'Mesh Color 3',
                'default' => '#88c0d0',
                'name' => 'themes.my-quark.background_mesh_color3',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_mesh_speed' => [
                'type' => 'range',
                'label' => 'Animation Speed',
                'default' => 20,
                'min' => 5,
                'max' => 60,
                'step' => 5,
                'name' => 'themes.my-quark.background_mesh_speed',
                'validation' => 'loose'
            ],
            'themes.my-quark.mesh_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.mesh_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_pattern_type' => [
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
                'name' => 'themes.my-quark.background_pattern_type',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_pattern_color' => [
                'type' => 'color',
                'label' => 'Pattern Color',
                'default' => '#000000',
                'name' => 'themes.my-quark.background_pattern_color',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_pattern_opacity' => [
                'type' => 'range',
                'label' => 'Pattern Opacity',
                'default' => 0.05,
                'min' => 0.01,
                'max' => 0.2,
                'step' => 0.01,
                'name' => 'themes.my-quark.background_pattern_opacity',
                'validation' => 'loose'
            ],
            'themes.my-quark.pattern_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.pattern_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.background_options_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.background_options_tabs',
                'validation' => 'loose'
            ],
            'themes.my-quark.backgrounds_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.backgrounds_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.components_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Configure default styles and behaviors for reusable components. These settings apply site-wide but can be overridden at the page or component level.',
                'name' => 'themes.my-quark.components_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.button_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.button_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.button_default_variant' => [
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
                'name' => 'themes.my-quark.button_default_variant',
                'validation' => 'loose'
            ],
            'themes.my-quark.button_default_size' => [
                'type' => 'select',
                'label' => 'Default Size',
                'default' => 'md',
                'options' => [
                    'sm' => 'Small',
                    'md' => 'Medium',
                    'lg' => 'Large'
                ],
                'name' => 'themes.my-quark.button_default_size',
                'validation' => 'loose'
            ],
            'themes.my-quark.button_haptic_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Haptic Feedback',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.button_haptic_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.buttons_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.buttons_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.card_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.card_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.card_default_variant' => [
                'type' => 'select',
                'label' => 'Default Style',
                'default' => 'default',
                'options' => [
                    'default' => 'Default (Solid)',
                    'glass' => 'Glass (Translucent)',
                    'neo' => 'Neomorphic (Soft 3D)',
                    'accent' => 'Accent (Highlighted)'
                ],
                'name' => 'themes.my-quark.card_default_variant',
                'validation' => 'loose'
            ],
            'themes.my-quark.card_shadow_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Shadows',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.card_shadow_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.card_image_lazy_load' => [
                'type' => 'toggle',
                'label' => 'Lazy Load Images',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.card_image_lazy_load',
                'validation' => 'loose'
            ],
            'themes.my-quark.cards_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.cards_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.form_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.form_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.form_required_symbol' => [
                'type' => 'text',
                'label' => 'Required Field Symbol',
                'default' => '*',
                'name' => 'themes.my-quark.form_required_symbol',
                'validation' => 'loose'
            ],
            'themes.my-quark.form_validation_style' => [
                'type' => 'select',
                'label' => 'Validation Display',
                'default' => 'inline',
                'options' => [
                    'inline' => 'Inline (Below Field)',
                    'tooltip' => 'Tooltip (On Hover)',
                    'summary' => 'Summary (Top of Form)'
                ],
                'name' => 'themes.my-quark.form_validation_style',
                'validation' => 'loose'
            ],
            'themes.my-quark.form_focus_highlight' => [
                'type' => 'toggle',
                'label' => 'Focus Highlight',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.form_focus_highlight',
                'validation' => 'loose'
            ],
            'themes.my-quark.forms_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.forms_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.image_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_default_loading' => [
                'type' => 'select',
                'label' => 'Loading Strategy',
                'default' => 'lazy',
                'options' => [
                    'eager' => 'Eager (Immediate)',
                    'lazy' => 'Lazy (Deferred)'
                ],
                'name' => 'themes.my-quark.image_default_loading',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_default_quality' => [
                'type' => 'range',
                'label' => 'Image Quality',
                'default' => 85,
                'min' => 60,
                'max' => 100,
                'step' => 5,
                'append' => '%',
                'name' => 'themes.my-quark.image_default_quality',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_caption_enabled' => [
                'type' => 'toggle',
                'label' => 'Show Captions',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.image_caption_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.image_responsive' => [
                'type' => 'toggle',
                'label' => 'Responsive Images',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.image_responsive',
                'validation' => 'loose'
            ],
            'themes.my-quark.images_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.images_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_defaults_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.meta_defaults_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_show_author' => [
                'type' => 'toggle',
                'label' => 'Show Author',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.meta_show_author',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_show_date' => [
                'type' => 'toggle',
                'label' => 'Show Publish Date',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.meta_show_date',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_date_format' => [
                'type' => 'text',
                'label' => 'Date Format',
                'default' => 'F d, Y',
                'name' => 'themes.my-quark.meta_date_format',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_show_reading_time' => [
                'type' => 'toggle',
                'label' => 'Show Reading Time',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.meta_show_reading_time',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_separator' => [
                'type' => 'text',
                'label' => 'Separator Character',
                'default' => '•',
                'name' => 'themes.my-quark.meta_separator',
                'validation' => 'loose'
            ],
            'themes.my-quark.meta_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.meta_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.components_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.components_tabs',
                'validation' => 'loose'
            ],
            'themes.my-quark.components_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.components_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.experience_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Configure animations, accessibility features, and adaptive behaviors that enhance the user experience.',
                'name' => 'themes.my-quark.experience_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.animations_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.animations_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.animations_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable Animations',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.animations_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.animations_respect_reduced_motion' => [
                'type' => 'toggle',
                'label' => 'Respect Reduced Motion',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.animations_respect_reduced_motion',
                'validation' => 'loose'
            ],
            'themes.my-quark.animations_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.animations_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.accessibility_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.accessibility_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.accessibility_skip_link_text' => [
                'type' => 'text',
                'label' => 'Skip to Content Text',
                'default' => 'THEME_MY_QUARK.SKIP_TO_CONTENT',
                'name' => 'themes.my-quark.accessibility_skip_link_text',
                'validation' => 'loose'
            ],
            'themes.my-quark.accessibility_mobile_menu_label' => [
                'type' => 'text',
                'label' => 'Mobile Menu Label',
                'default' => 'THEME_MY_QUARK.TOGGLE_MOBILE_MENU',
                'name' => 'themes.my-quark.accessibility_mobile_menu_label',
                'validation' => 'loose'
            ],
            'themes.my-quark.accessibility_focus_mode' => [
                'type' => 'toggle',
                'label' => 'Focus Mode',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.accessibility_focus_mode',
                'validation' => 'loose'
            ],
            'themes.my-quark.accessibility_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.accessibility_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.sustainability_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.sustainability_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.sustainability_eco_mode' => [
                'type' => 'toggle',
                'label' => 'Force Eco Mode',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.sustainability_eco_mode',
                'validation' => 'loose'
            ],
            'themes.my-quark.sustainability_score' => [
                'type' => 'text',
                'label' => 'Sustainability Score',
                'default' => 'A+',
                'name' => 'themes.my-quark.sustainability_score',
                'validation' => 'loose'
            ],
            'themes.my-quark.co2_per_view' => [
                'type' => 'text',
                'label' => 'CO2 per View',
                'default' => '0.2g',
                'name' => 'themes.my-quark.co2_per_view',
                'validation' => 'loose'
            ],
            'themes.my-quark.sustainability_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.sustainability_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.ai_augmentation_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.ai_augmentation_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.ai_augmentation_enabled' => [
                'type' => 'toggle',
                'label' => 'Enable AI Enhancements',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.ai_augmentation_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.ai_augmentation_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.ai_augmentation_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.advanced_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.advanced_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.advanced_haptics' => [
                'type' => 'toggle',
                'label' => 'Global Haptic Feedback',
                'default' => 0,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.advanced_haptics',
                'validation' => 'loose'
            ],
            'themes.my-quark.advanced_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.advanced_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.experience_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.experience_tabs',
                'validation' => 'loose'
            ],
            'themes.my-quark.experience_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.experience_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.configuration_info' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Technical settings for performance, privacy, and localization.',
                'name' => 'themes.my-quark.configuration_info',
                'validation' => 'loose'
            ],
            'themes.my-quark.performance_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.performance_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.performance_production_mode' => [
                'type' => 'toggle',
                'label' => 'Production Mode',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.performance_production_mode',
                'validation' => 'loose'
            ],
            'themes.my-quark.performance_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.performance_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.privacy_section' => [
                'type' => 'section',
                'underline' => true,
                'name' => 'themes.my-quark.privacy_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.privacy_shield_enabled' => [
                'type' => 'toggle',
                'label' => 'Privacy Shield',
                'default' => 1,
                'options' => [
                    1 => 'PLUGIN_ADMIN.ENABLED',
                    0 => 'PLUGIN_ADMIN.DISABLED'
                ],
                'name' => 'themes.my-quark.privacy_shield_enabled',
                'validation' => 'loose'
            ],
            'themes.my-quark.privacy_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.privacy_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.localization_section' => [
                'type' => 'section',
                'underline' => true,
                'text' => 'Override default UI text. Use language keys for multilingual support.',
                'name' => 'themes.my-quark.localization_section',
                'validation' => 'loose'
            ],
            'themes.my-quark.localization_newsletter_placeholder' => [
                'type' => 'text',
                'label' => 'Newsletter Email Placeholder',
                'default' => 'THEME_MY_QUARK.NEWSLETTER_PLACEHOLDER',
                'name' => 'themes.my-quark.localization_newsletter_placeholder',
                'validation' => 'loose'
            ],
            'themes.my-quark.localization_newsletter_button' => [
                'type' => 'text',
                'label' => 'Newsletter Button Text',
                'default' => 'THEME_MY_QUARK.NEWSLETTER_BUTTON',
                'name' => 'themes.my-quark.localization_newsletter_button',
                'validation' => 'loose'
            ],
            'themes.my-quark.localization_subtab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.localization_subtab',
                'validation' => 'loose'
            ],
            'themes.my-quark.configuration_tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.configuration_tabs',
                'validation' => 'loose'
            ],
            'themes.my-quark.configuration_tab' => [
                'type' => 'tab',
                'name' => 'themes.my-quark.configuration_tab',
                'validation' => 'loose'
            ],
            'themes.my-quark.tabs' => [
                'type' => 'tabs',
                'active' => 1,
                'name' => 'themes.my-quark.tabs',
                'validation' => 'loose'
            ]
        ],
        'rules' => [
            
        ],
        'nested' => [
            'backups' => [
                'history_title' => 'backups.history_title',
                'history' => 'backups.history',
                'config_title' => 'backups.config_title',
                'purge' => [
                    'trigger' => 'backups.purge.trigger',
                    'max_backups_count' => 'backups.purge.max_backups_count',
                    'max_backups_space' => 'backups.purge.max_backups_space',
                    'max_backups_time' => 'backups.purge.max_backups_time'
                ],
                'profiles_title' => 'backups.profiles_title',
                'profiles' => [
                    'name' => 'backups.profiles.name',
                    'root' => 'backups.profiles.root',
                    'exclude_paths' => 'backups.profiles.exclude_paths',
                    'exclude_files' => 'backups.profiles.exclude_files',
                    'schedule' => 'backups.profiles.schedule',
                    'schedule_at' => 'backups.profiles.schedule_at',
                    'schedule_environment' => 'backups.profiles.schedule_environment'
                ]
            ],
            'media' => 'media',
            'scheduler' => [
                'scheduler_tabs' => 'scheduler.scheduler_tabs',
                'status_tab' => 'scheduler.status_tab',
                'status_title' => 'scheduler.status_title',
                'status' => 'scheduler.status',
                'webhook_status_override' => 'scheduler.webhook_status_override',
                'status_enhanced' => 'scheduler.status_enhanced',
                'modern_health' => 'scheduler.modern_health',
                'trigger_methods' => 'scheduler.trigger_methods',
                'jobs_tab' => 'scheduler.jobs_tab',
                'jobs_title' => 'scheduler.jobs_title',
                'custom_jobs' => [
                    'id' => 'scheduler.custom_jobs.id',
                    'command' => 'scheduler.custom_jobs.command',
                    'args' => 'scheduler.custom_jobs.args',
                    'at' => 'scheduler.custom_jobs.at',
                    'output' => 'scheduler.custom_jobs.output',
                    'output_mode' => 'scheduler.custom_jobs.output_mode',
                    'email' => 'scheduler.custom_jobs.email'
                ],
                'modern_tab' => 'scheduler.modern_tab',
                'workers_section' => 'scheduler.workers_section',
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
                'retry_section' => 'scheduler.retry_section',
                'queue_section' => 'scheduler.queue_section',
                'history_section' => 'scheduler.history_section',
                'webhook_section' => 'scheduler.webhook_section',
                'webhook_plugin_status' => 'scheduler.webhook_plugin_status',
                'webhook_token_generate' => 'scheduler.webhook_token_generate',
                'health_section' => 'scheduler.health_section',
                'webhook_usage' => 'scheduler.webhook_usage',
                'webhook_examples' => 'scheduler.webhook_examples'
            ],
            'security' => [
                'xss_section' => 'security.xss_section',
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
                'uploads_section' => 'security.uploads_section',
                'uploads_dangerous_extensions' => 'security.uploads_dangerous_extensions',
                'sanitize_svg' => 'security.sanitize_svg'
            ],
            'site' => [
                'content' => 'site.content',
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
                'routes' => 'site.routes',
                'redirects' => 'site.redirects'
            ],
            'streams' => [
                'schemes' => [
                    'xxx' => 'streams.schemes.xxx'
                ]
            ],
            'system' => [
                'system_tabs' => 'system.system_tabs',
                'content' => 'system.content',
                'content_section' => 'system.content_section',
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
                'languages-section' => 'system.languages-section',
                'key' => 'system.key',
                'value' => 'system.value',
                'http_headers' => 'system.http_headers',
                'http_headers_section' => 'system.http_headers_section',
                'markdown' => 'system.markdown',
                'markdow_section' => 'system.markdow_section',
                'caching' => 'system.caching',
                'caching_section' => 'system.caching_section',
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
                'flex_caching' => 'system.flex_caching',
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
                'twig_section' => 'system.twig_section',
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
                'general_config_section' => 'system.general_config_section',
                'css_assets_section' => 'system.css_assets_section',
                'js_assets_section' => 'system.js_assets_section',
                'js_module_assets_section' => 'system.js_module_assets_section',
                'errors' => [
                    'display' => 'system.errors.display',
                    'log' => 'system.errors.log'
                ],
                'errors_section' => 'system.errors_section',
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
                'debugger_section' => 'system.debugger_section',
                'media' => [
                    'enable_media_timestamp' => 'system.media.enable_media_timestamp',
                    'auto_metadata_exif' => 'system.media.auto_metadata_exif',
                    'allowed_fallback_types' => 'system.media.allowed_fallback_types',
                    'unsupported_inline_types' => 'system.media.unsupported_inline_types'
                ],
                'media_section' => 'system.media_section',
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
                'section_images_cls' => 'system.section_images_cls',
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
                'session_section' => 'system.session_section',
                'advanced' => 'system.advanced',
                'advanced_section' => 'system.advanced_section',
                'gpm_section' => 'system.gpm_section',
                'gpm' => [
                    'releases' => 'system.gpm.releases',
                    'official_gpm_only' => 'system.gpm.official_gpm_only'
                ],
                'updates_section' => 'system.updates_section',
                'updates' => [
                    'safe_upgrade' => 'system.updates.safe_upgrade',
                    'safe_upgrade_snapshot_limit' => 'system.updates.safe_upgrade_snapshot_limit',
                    'recovery_mode' => 'system.updates.recovery_mode'
                ],
                'http_section' => 'system.http_section',
                'http' => [
                    'method' => 'system.http.method',
                    'enable_proxy' => 'system.http.enable_proxy',
                    'proxy_url' => 'system.http.proxy_url',
                    'proxy_cert_path' => 'system.http.proxy_cert_path',
                    'verify_peer' => 'system.http.verify_peer',
                    'verify_host' => 'system.http.verify_host',
                    'concurrent_connections' => 'system.http.concurrent_connections'
                ],
                'misc_section' => 'system.misc_section',
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
                ],
                'flex_accounts' => 'system.flex_accounts'
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
                    'general' => 'plugins.form.general',
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
                    'turnstile_captcha' => 'plugins.form.turnstile_captcha',
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
                    ],
                    'characters' => 'plugins.form.characters',
                    'math' => 'plugins.form.math'
                ],
                'flex-objects' => [
                    'enabled' => 'plugins.flex-objects.enabled',
                    'built_in_css' => 'plugins.flex-objects.built_in_css',
                    'extra_admin_twig_path' => 'plugins.flex-objects.extra_admin_twig_path',
                    'security_section' => 'plugins.flex-objects.security_section',
                    'security' => [
                        'restrict_page_frontmatter' => 'plugins.flex-objects.security.restrict_page_frontmatter'
                    ],
                    'directories' => 'plugins.flex-objects.directories'
                ],
                'relatedpages' => [
                    'enabled' => 'plugins.relatedpages.enabled',
                    'basics_title' => 'plugins.relatedpages.basics_title',
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
                    'taxonomy_title' => 'plugins.relatedpages.taxonomy_title',
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
                    'content_title' => 'plugins.relatedpages.content_title',
                    'content_match' => [
                        'process' => 'plugins.relatedpages.content_match.process'
                    ],
                    'advanced_title' => 'plugins.relatedpages.advanced_title'
                ],
                'simplesearch' => [
                    'enabled' => 'plugins.simplesearch.enabled',
                    'search_content' => 'plugins.simplesearch.search_content',
                    'built_in_css' => 'plugins.simplesearch.built_in_css',
                    'built_in_js' => 'plugins.simplesearch.built_in_js',
                    'display_button' => 'plugins.simplesearch.display_button',
                    'ignore_accented_characters' => 'plugins.simplesearch.ignore_accented_characters',
                    'min_query_length' => 'plugins.simplesearch.min_query_length',
                    'route' => 'plugins.simplesearch.route',
                    'searchable_types' => 'plugins.simplesearch.searchable_types',
                    'header_keys_ignored' => 'plugins.simplesearch.header_keys_ignored',
                    'template' => 'plugins.simplesearch.template',
                    'filters' => [
                        'category' => 'plugins.simplesearch.filters.category'
                    ],
                    'filter_combinator' => 'plugins.simplesearch.filter_combinator',
                    'order' => [
                        'by' => 'plugins.simplesearch.order.by',
                        'dir' => 'plugins.simplesearch.order.dir'
                    ]
                ],
                'admin' => [
                    'admin_tabs' => 'plugins.admin.admin_tabs',
                    'config_tab' => 'plugins.admin.config_tab',
                    'Basics' => 'plugins.admin.Basics',
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
                    'Dashboard' => 'plugins.admin.Dashboard',
                    'widgets_display' => 'plugins.admin.widgets_display',
                    'Notifications' => 'plugins.admin.Notifications',
                    'notifications' => [
                        'feed' => 'plugins.admin.notifications.feed',
                        'dashboard' => 'plugins.admin.notifications.dashboard',
                        'plugins' => 'plugins.admin.notifications.plugins',
                        'themes' => 'plugins.admin.notifications.themes'
                    ],
                    'customization_tab' => 'plugins.admin.customization_tab',
                    'whitelabel' => [
                        'logos' => 'plugins.admin.whitelabel.logos',
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
                    'codemirror_section' => 'plugins.admin.codemirror_section',
                    'customization_section' => 'plugins.admin.customization_section',
                    'themes-preview' => 'plugins.admin.themes-preview',
                    'colorschemes' => 'plugins.admin.colorschemes',
                    'extras_tab' => 'plugins.admin.extras_tab',
                    'Popularity' => 'plugins.admin.Popularity',
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
                    'MediaResize' => 'plugins.admin.MediaResize',
                    'MediaResizeNote' => 'plugins.admin.MediaResizeNote',
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
                    'news_section' => 'plugins.sitemap.news_section',
                    'include_news_tags' => 'plugins.sitemap.include_news_tags',
                    'standalone_sitemap_news' => 'plugins.sitemap.standalone_sitemap_news',
                    'sitemap_news_path' => 'plugins.sitemap.sitemap_news_path',
                    'news_max_age_days' => 'plugins.sitemap.news_max_age_days',
                    'news_enabled_paths' => 'plugins.sitemap.news_enabled_paths',
                    'data_section' => 'plugins.sitemap.data_section',
                    'date_type' => 'plugins.sitemap.date_type',
                    'include_changefreq' => 'plugins.sitemap.include_changefreq',
                    'changefreq' => 'plugins.sitemap.changefreq',
                    'include_priority' => 'plugins.sitemap.include_priority',
                    'priority' => 'plugins.sitemap.priority',
                    'advanced_section' => 'plugins.sitemap.advanced_section',
                    'additions' => [
                        'location' => 'plugins.sitemap.additions.location',
                        'lastmod' => 'plugins.sitemap.additions.lastmod',
                        'changefreq' => 'plugins.sitemap.additions.changefreq',
                        'priority' => 'plugins.sitemap.additions.priority'
                    ],
                    'urlset' => 'plugins.sitemap.urlset',
                    'urlimageset' => 'plugins.sitemap.urlimageset',
                    'urlnewsset' => 'plugins.sitemap.urlnewsset'
                ],
                'problems' => [
                    'enabled' => 'plugins.problems.enabled',
                    'built_in_css' => 'plugins.problems.built_in_css'
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
                'seo' => [
                    'plugin_section' => 'plugins.seo.plugin_section',
                    'enabled' => 'plugins.seo.enabled',
                    'facebookid' => 'plugins.seo.facebookid',
                    'twitterid' => 'plugins.seo.twitterid',
                    'twitter_default' => 'plugins.seo.twitter_default',
                    'facebook_default' => 'plugins.seo.facebook_default',
                    'microdata_section' => 'plugins.seo.microdata_section',
                    'md_columns' => 'plugins.seo.md_columns',
                    'mdcolumn1' => 'plugins.seo.mdcolumn1',
                    'article' => 'plugins.seo.article',
                    'event' => 'plugins.seo.event',
                    'restaurant' => 'plugins.seo.restaurant',
                    'musicevent' => 'plugins.seo.musicevent',
                    'customjson' => 'plugins.seo.customjson',
                    'mdcolumn2' => 'plugins.seo.mdcolumn2',
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
                    'tabs' => 'plugins.login.tabs',
                    'options' => 'plugins.login.options',
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
                    'routes' => 'plugins.login.routes',
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
                    'registration' => 'plugins.login.registration',
                    'registration_fields' => 'plugins.login.registration_fields',
                    'access_levels' => 'plugins.login.access_levels',
                    'Security' => 'plugins.login.Security',
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
                    'smtp_config' => 'plugins.email.smtp_config',
                    'sendmail_config' => 'plugins.email.sendmail_config',
                    'email_Defaults' => 'plugins.email.email_Defaults',
                    'content_type' => 'plugins.email.content_type',
                    'from' => 'plugins.email.from',
                    'to' => 'plugins.email.to',
                    'cc' => 'plugins.email.cc',
                    'bcc' => 'plugins.email.bcc',
                    'reply_to' => 'plugins.email.reply_to',
                    'body' => 'plugins.email.body',
                    'advanced_section' => 'plugins.email.advanced_section',
                    'debug' => 'plugins.email.debug'
                ]
            ],
            'themes' => [
                'ngo-theme' => [
                    'production-mode' => 'themes.ngo-theme.production-mode',
                    'grid-size' => 'themes.ngo-theme.grid-size',
                    'header_section' => 'themes.ngo-theme.header_section',
                    'custom_logo' => 'themes.ngo-theme.custom_logo',
                    'header-fixed' => 'themes.ngo-theme.header-fixed',
                    'header-animated' => 'themes.ngo-theme.header-animated',
                    'header-dark' => 'themes.ngo-theme.header-dark',
                    'header-transparent' => 'themes.ngo-theme.header-transparent',
                    'footer_section' => 'themes.ngo-theme.footer_section',
                    'sticky-footer' => 'themes.ngo-theme.sticky-footer',
                    'blog_section' => 'themes.ngo-theme.blog_section',
                    'blog-page' => 'themes.ngo-theme.blog-page',
                    'sustainability_section' => 'themes.ngo-theme.sustainability_section',
                    'sustainability_score' => 'themes.ngo-theme.sustainability_score',
                    'co2_per_view' => 'themes.ngo-theme.co2_per_view',
                    'agentic_section' => 'themes.ngo-theme.agentic_section',
                    'ai_disclosure' => 'themes.ngo-theme.ai_disclosure',
                    'ai_assistant' => 'themes.ngo-theme.ai_assistant',
                    'focus_mode' => 'themes.ngo-theme.focus_mode',
                    'doodle_engine' => 'themes.ngo-theme.doodle_engine',
                    'eco_mode' => 'themes.ngo-theme.eco_mode',
                    'ngo_section' => 'themes.ngo-theme.ngo_section',
                    'footer_about_title' => 'themes.ngo-theme.footer_about_title',
                    'footer_mission' => 'themes.ngo-theme.footer_mission',
                    'project_timeline_list' => [
                        'title' => 'themes.ngo-theme.project_timeline_list.title',
                        'description' => 'themes.ngo-theme.project_timeline_list.description',
                        'goal' => 'themes.ngo-theme.project_timeline_list.goal',
                        'raised' => 'themes.ngo-theme.project_timeline_list.raised',
                        'percent' => 'themes.ngo-theme.project_timeline_list.percent',
                        'status' => 'themes.ngo-theme.project_timeline_list.status'
                    ],
                    'utility_bar_section' => 'themes.ngo-theme.utility_bar_section',
                    'utility_hijri_toggle' => 'themes.ngo-theme.utility_hijri_toggle',
                    'utility_prayer_toggle' => 'themes.ngo-theme.utility_prayer_toggle',
                    'utility_prayer_city' => 'themes.ngo-theme.utility_prayer_city',
                    'utility_language_toggle' => 'themes.ngo-theme.utility_language_toggle',
                    'utility_accessibility_toggle' => 'themes.ngo-theme.utility_accessibility_toggle',
                    'mega_menu_section' => 'themes.ngo-theme.mega_menu_section',
                    'mega_menu_structure' => [
                        'title' => 'themes.ngo-theme.mega_menu_structure.title',
                        'links' => [
                            'text' => 'themes.ngo-theme.mega_menu_structure.links.text',
                            'url' => 'themes.ngo-theme.mega_menu_structure.links.url'
                        ]
                    ],
                    'hero_section' => 'themes.ngo-theme.hero_section',
                    'hero_video_url' => 'themes.ngo-theme.hero_video_url',
                    'hero_glass_opacity' => 'themes.ngo-theme.hero_glass_opacity',
                    'hero_primary_cta_text' => 'themes.ngo-theme.hero_primary_cta_text',
                    'hero_primary_cta_link' => 'themes.ngo-theme.hero_primary_cta_link',
                    'hero_secondary_cta_text' => 'themes.ngo-theme.hero_secondary_cta_text',
                    'hero_secondary_cta_link' => 'themes.ngo-theme.hero_secondary_cta_link',
                    'services_section' => 'themes.ngo-theme.services_section',
                    'services_list' => [
                        'icon' => 'themes.ngo-theme.services_list.icon',
                        'title' => 'themes.ngo-theme.services_list.title',
                        'description' => 'themes.ngo-theme.services_list.description',
                        'link' => 'themes.ngo-theme.services_list.link'
                    ],
                    'testimonials_section' => 'themes.ngo-theme.testimonials_section',
                    'testimonials_list' => [
                        'name' => 'themes.ngo-theme.testimonials_list.name',
                        'role' => 'themes.ngo-theme.testimonials_list.role',
                        'quote' => 'themes.ngo-theme.testimonials_list.quote',
                        'image' => 'themes.ngo-theme.testimonials_list.image',
                        'video_url' => 'themes.ngo-theme.testimonials_list.video_url'
                    ],
                    'khums_section' => 'themes.ngo-theme.khums_section',
                    'khums_rate' => 'themes.ngo-theme.khums_rate',
                    'khums_currency' => 'themes.ngo-theme.khums_currency',
                    'events_section' => 'themes.ngo-theme.events_section',
                    'events_list' => [
                        'title' => 'themes.ngo-theme.events_list.title',
                        'date' => 'themes.ngo-theme.events_list.date',
                        'location' => 'themes.ngo-theme.events_list.location',
                        'url' => 'themes.ngo-theme.events_list.url',
                        'type' => 'themes.ngo-theme.events_list.type'
                    ],
                    'inspiration_section' => 'themes.ngo-theme.inspiration_section',
                    'inspiration_text' => 'themes.ngo-theme.inspiration_text',
                    'inspiration_source' => 'themes.ngo-theme.inspiration_source',
                    'prayer_section' => 'themes.ngo-theme.prayer_section',
                    'prayer_times_enabled' => 'themes.ngo-theme.prayer_times_enabled',
                    'prayer_api_key' => 'themes.ngo-theme.prayer_api_key',
                    'hijri_adjustment' => 'themes.ngo-theme.hijri_adjustment',
                    'contact_section' => 'themes.ngo-theme.contact_section',
                    'contact_address' => 'themes.ngo-theme.contact_address',
                    'contact_email' => 'themes.ngo-theme.contact_email',
                    'contact_phone' => 'themes.ngo-theme.contact_phone',
                    'contact_whatsapp' => 'themes.ngo-theme.contact_whatsapp',
                    'social_section' => 'themes.ngo-theme.social_section',
                    'social_links' => [
                        'network' => 'themes.ngo-theme.social_links.network',
                        'url' => 'themes.ngo-theme.social_links.url'
                    ],
                    'footer_links_section' => 'themes.ngo-theme.footer_links_section',
                    'footer_links' => [
                        'text' => 'themes.ngo-theme.footer_links.text',
                        'url' => 'themes.ngo-theme.footer_links.url',
                        'icon' => 'themes.ngo-theme.footer_links.icon'
                    ],
                    'cta_section' => 'themes.ngo-theme.cta_section',
                    'cta_button' => 'themes.ngo-theme.cta_button',
                    'enabled' => 'themes.ngo-theme.enabled',
                    'text' => 'themes.ngo-theme.text',
                    'url' => 'themes.ngo-theme.url',
                    'icon' => 'themes.ngo-theme.icon',
                    'external' => 'themes.ngo-theme.external',
                    'newsletter_section' => 'themes.ngo-theme.newsletter_section',
                    'newsletter_enabled' => 'themes.ngo-theme.newsletter_enabled',
                    'newsletter_action' => 'themes.ngo-theme.newsletter_action',
                    'education_section' => 'themes.ngo-theme.education_section',
                    'student_login_title' => 'themes.ngo-theme.student_login_title',
                    'student_login_description' => 'themes.ngo-theme.student_login_description',
                    'student_login_button_text' => 'themes.ngo-theme.student_login_button_text',
                    'featured_courses_list' => [
                        'title' => 'themes.ngo-theme.featured_courses_list.title',
                        'instructor' => 'themes.ngo-theme.featured_courses_list.instructor',
                        'image' => 'themes.ngo-theme.featured_courses_list.image',
                        'url' => 'themes.ngo-theme.featured_courses_list.url'
                    ],
                    'products_section' => 'themes.ngo-theme.products_section',
                    'products_list' => [
                        'title' => 'themes.ngo-theme.products_list.title',
                        'price' => 'themes.ngo-theme.products_list.price',
                        'type' => 'themes.ngo-theme.products_list.type',
                        'image' => 'themes.ngo-theme.products_list.image',
                        'url' => 'themes.ngo-theme.products_list.url'
                    ],
                    'trust_signals_section' => 'themes.ngo-theme.trust_signals_section',
                    'trust_signals_images' => [
                        'name' => 'themes.ngo-theme.trust_signals_images.name',
                        'image' => 'themes.ngo-theme.trust_signals_images.image',
                        'url' => 'themes.ngo-theme.trust_signals_images.url'
                    ],
                    'faq_section' => 'themes.ngo-theme.faq_section',
                    'faq_list' => [
                        'q' => 'themes.ngo-theme.faq_list.q',
                        'a' => 'themes.ngo-theme.faq_list.a'
                    ],
                    'search_section' => 'themes.ngo-theme.search_section',
                    'search_enabled' => 'themes.ngo-theme.search_enabled'
                ],
                'quark' => [
                    'production-mode' => 'themes.quark.production-mode',
                    'grid-size' => 'themes.quark.grid-size',
                    'header_section' => 'themes.quark.header_section',
                    'custom_logo' => 'themes.quark.custom_logo',
                    'custom_logo_mobile' => 'themes.quark.custom_logo_mobile',
                    'header-fixed' => 'themes.quark.header-fixed',
                    'header-animated' => 'themes.quark.header-animated',
                    'header-dark' => 'themes.quark.header-dark',
                    'header-transparent' => 'themes.quark.header-transparent',
                    'footer_section' => 'themes.quark.footer_section',
                    'sticky-footer' => 'themes.quark.sticky-footer',
                    'blog_section' => 'themes.quark.blog_section',
                    'blog-page' => 'themes.quark.blog-page',
                    'spectre_section' => 'themes.quark.spectre_section',
                    'spectre' => [
                        'exp' => 'themes.quark.spectre.exp',
                        'icons' => 'themes.quark.spectre.icons'
                    ]
                ],
                'my-quark' => [
                    'tabs' => 'themes.my-quark.tabs',
                    'design_system_tab' => 'themes.my-quark.design_system_tab',
                    'design_system_info' => 'themes.my-quark.design_system_info',
                    'design_system_tabs' => 'themes.my-quark.design_system_tabs',
                    'colors_subtab' => 'themes.my-quark.colors_subtab',
                    'brand_colors_section' => 'themes.my-quark.brand_colors_section',
                    'color_primary' => 'themes.my-quark.color_primary',
                    'color_secondary' => 'themes.my-quark.color_secondary',
                    'color_accent' => 'themes.my-quark.color_accent',
                    'surface_colors_section' => 'themes.my-quark.surface_colors_section',
                    'color_background_body' => 'themes.my-quark.color_background_body',
                    'color_background_card' => 'themes.my-quark.color_background_card',
                    'text_colors_section' => 'themes.my-quark.text_colors_section',
                    'color_text_primary' => 'themes.my-quark.color_text_primary',
                    'color_text_secondary' => 'themes.my-quark.color_text_secondary',
                    'typography_subtab' => 'themes.my-quark.typography_subtab',
                    'font_families_section' => 'themes.my-quark.font_families_section',
                    'typography_font_body' => 'themes.my-quark.typography_font_body',
                    'typography_font_headings' => 'themes.my-quark.typography_font_headings',
                    'fluid_typography_section' => 'themes.my-quark.fluid_typography_section',
                    'typography_fluid_enabled' => 'themes.my-quark.typography_fluid_enabled',
                    'typography_size_min' => 'themes.my-quark.typography_size_min',
                    'typography_size_max' => 'themes.my-quark.typography_size_max',
                    'typography_scale_ratio' => 'themes.my-quark.typography_scale_ratio',
                    'line_heights_section' => 'themes.my-quark.line_heights_section',
                    'typography_line_height_body' => 'themes.my-quark.typography_line_height_body',
                    'typography_line_height_headings' => 'themes.my-quark.typography_line_height_headings',
                    'typography_letter_spacing_headings' => 'themes.my-quark.typography_letter_spacing_headings',
                    'typography_max_measure' => 'themes.my-quark.typography_max_measure',
                    'spacing_subtab' => 'themes.my-quark.spacing_subtab',
                    'layout_section' => 'themes.my-quark.layout_section',
                    'layout_container_width' => 'themes.my-quark.layout_container_width',
                    'layout_spacing_scale' => 'themes.my-quark.layout_spacing_scale',
                    'grid_section' => 'themes.my-quark.grid_section',
                    'layout_grid_size' => 'themes.my-quark.layout_grid_size',
                    'visual_effects_subtab' => 'themes.my-quark.visual_effects_subtab',
                    'shapes_section' => 'themes.my-quark.shapes_section',
                    'radius_corners' => 'themes.my-quark.radius_corners',
                    'shadows_section' => 'themes.my-quark.shadows_section',
                    'shadow_neomorphism_strength' => 'themes.my-quark.shadow_neomorphism_strength',
                    'shadow_neomorphism_light_source' => 'themes.my-quark.shadow_neomorphism_light_source',
                    'glass_effects_section' => 'themes.my-quark.glass_effects_section',
                    'glass_opacity' => 'themes.my-quark.glass_opacity',
                    'glass_blur' => 'themes.my-quark.glass_blur',
                    'atmospheric_effects_section' => 'themes.my-quark.atmospheric_effects_section',
                    'effect_vignette_enabled' => 'themes.my-quark.effect_vignette_enabled',
                    'brand_identity_tab' => 'themes.my-quark.brand_identity_tab',
                    'brand_identity_info' => 'themes.my-quark.brand_identity_info',
                    'logo_section' => 'themes.my-quark.logo_section',
                    'brand_logo' => 'themes.my-quark.brand_logo',
                    'brand_name' => 'themes.my-quark.brand_name',
                    'brand_show_text' => 'themes.my-quark.brand_show_text',
                    'contact_section' => 'themes.my-quark.contact_section',
                    'contact_address' => 'themes.my-quark.contact_address',
                    'contact_email' => 'themes.my-quark.contact_email',
                    'contact_phone' => 'themes.my-quark.contact_phone',
                    'social_section' => 'themes.my-quark.social_section',
                    'social_links' => [
                        'network' => 'themes.my-quark.social_links.network',
                        'url' => 'themes.my-quark.social_links.url'
                    ],
                    'homepage_tab' => 'themes.my-quark.homepage_tab',
                    'homepage_info' => 'themes.my-quark.homepage_info',
                    'home_enabled' => 'themes.my-quark.home_enabled',
                    'home_hero_section' => 'themes.my-quark.home_hero_section',
                    'home_hero_title' => 'themes.my-quark.home_hero_title',
                    'home_hero_description' => 'themes.my-quark.home_hero_description',
                    'home_hero_btn_text' => 'themes.my-quark.home_hero_btn_text',
                    'home_hero_btn_url' => 'themes.my-quark.home_hero_btn_url',
                    'home_services_section' => 'themes.my-quark.home_services_section',
                    'home_services_title' => 'themes.my-quark.home_services_title',
                    'home_services' => [
                        'icon' => 'themes.my-quark.home_services.icon',
                        'title' => 'themes.my-quark.home_services.title',
                        'description' => 'themes.my-quark.home_services.description',
                        'url' => 'themes.my-quark.home_services.url',
                        'btn_text' => 'themes.my-quark.home_services.btn_text'
                    ],
                    'home_quote_section' => 'themes.my-quark.home_quote_section',
                    'home_quote_title' => 'themes.my-quark.home_quote_title',
                    'home_quote_author' => 'themes.my-quark.home_quote_author',
                    'home_quote_arabic' => 'themes.my-quark.home_quote_arabic',
                    'home_quote_english' => 'themes.my-quark.home_quote_english',
                    'home_quote_btn_text' => 'themes.my-quark.home_quote_btn_text',
                    'home_quote_btn_url' => 'themes.my-quark.home_quote_btn_url',
                    'home_courses_section' => 'themes.my-quark.home_courses_section',
                    'home_courses_title' => 'themes.my-quark.home_courses_title',
                    'home_courses_subtitle' => 'themes.my-quark.home_courses_subtitle',
                    'home_courses' => [
                        'icon' => 'themes.my-quark.home_courses.icon',
                        'title' => 'themes.my-quark.home_courses.title',
                        'subtitle' => 'themes.my-quark.home_courses.subtitle',
                        'url' => 'themes.my-quark.home_courses.url'
                    ],
                    'hero_tab' => 'themes.my-quark.hero_tab',
                    'hero_info' => 'themes.my-quark.hero_info',
                    'hero_defaults_section' => 'themes.my-quark.hero_defaults_section',
                    'hero_default_style' => 'themes.my-quark.hero_default_style',
                    'hero_default_overlay' => 'themes.my-quark.hero_default_overlay',
                    'hero_default_button_style' => 'themes.my-quark.hero_default_button_style',
                    'hero_enable_animations' => 'themes.my-quark.hero_enable_animations',
                    'backgrounds_tab' => 'themes.my-quark.backgrounds_tab',
                    'backgrounds_info' => 'themes.my-quark.backgrounds_info',
                    'background_mode_section' => 'themes.my-quark.background_mode_section',
                    'background_mode' => 'themes.my-quark.background_mode',
                    'background_options_tabs' => 'themes.my-quark.background_options_tabs',
                    'solid_subtab' => 'themes.my-quark.solid_subtab',
                    'background_solid_color' => 'themes.my-quark.background_solid_color',
                    'gradient_subtab' => 'themes.my-quark.gradient_subtab',
                    'background_gradient_type' => 'themes.my-quark.background_gradient_type',
                    'background_gradient_angle' => 'themes.my-quark.background_gradient_angle',
                    'background_gradient_start' => 'themes.my-quark.background_gradient_start',
                    'background_gradient_end' => 'themes.my-quark.background_gradient_end',
                    'image_subtab' => 'themes.my-quark.image_subtab',
                    'background_image' => 'themes.my-quark.background_image',
                    'background_image_position' => 'themes.my-quark.background_image_position',
                    'background_image_size' => 'themes.my-quark.background_image_size',
                    'background_image_attachment' => 'themes.my-quark.background_image_attachment',
                    'background_image_overlay' => 'themes.my-quark.background_image_overlay',
                    'background_image_overlay_opacity' => 'themes.my-quark.background_image_overlay_opacity',
                    'mesh_subtab' => 'themes.my-quark.mesh_subtab',
                    'background_mesh_color1' => 'themes.my-quark.background_mesh_color1',
                    'background_mesh_color2' => 'themes.my-quark.background_mesh_color2',
                    'background_mesh_color3' => 'themes.my-quark.background_mesh_color3',
                    'background_mesh_speed' => 'themes.my-quark.background_mesh_speed',
                    'pattern_subtab' => 'themes.my-quark.pattern_subtab',
                    'background_pattern_type' => 'themes.my-quark.background_pattern_type',
                    'background_pattern_color' => 'themes.my-quark.background_pattern_color',
                    'background_pattern_opacity' => 'themes.my-quark.background_pattern_opacity',
                    'components_tab' => 'themes.my-quark.components_tab',
                    'components_info' => 'themes.my-quark.components_info',
                    'components_tabs' => 'themes.my-quark.components_tabs',
                    'buttons_subtab' => 'themes.my-quark.buttons_subtab',
                    'button_defaults_section' => 'themes.my-quark.button_defaults_section',
                    'button_default_variant' => 'themes.my-quark.button_default_variant',
                    'button_default_size' => 'themes.my-quark.button_default_size',
                    'button_haptic_enabled' => 'themes.my-quark.button_haptic_enabled',
                    'cards_subtab' => 'themes.my-quark.cards_subtab',
                    'card_defaults_section' => 'themes.my-quark.card_defaults_section',
                    'card_default_variant' => 'themes.my-quark.card_default_variant',
                    'card_shadow_enabled' => 'themes.my-quark.card_shadow_enabled',
                    'card_image_lazy_load' => 'themes.my-quark.card_image_lazy_load',
                    'forms_subtab' => 'themes.my-quark.forms_subtab',
                    'form_defaults_section' => 'themes.my-quark.form_defaults_section',
                    'form_required_symbol' => 'themes.my-quark.form_required_symbol',
                    'form_validation_style' => 'themes.my-quark.form_validation_style',
                    'form_focus_highlight' => 'themes.my-quark.form_focus_highlight',
                    'images_subtab' => 'themes.my-quark.images_subtab',
                    'image_defaults_section' => 'themes.my-quark.image_defaults_section',
                    'image_default_loading' => 'themes.my-quark.image_default_loading',
                    'image_default_quality' => 'themes.my-quark.image_default_quality',
                    'image_caption_enabled' => 'themes.my-quark.image_caption_enabled',
                    'image_responsive' => 'themes.my-quark.image_responsive',
                    'meta_subtab' => 'themes.my-quark.meta_subtab',
                    'meta_defaults_section' => 'themes.my-quark.meta_defaults_section',
                    'meta_show_author' => 'themes.my-quark.meta_show_author',
                    'meta_show_date' => 'themes.my-quark.meta_show_date',
                    'meta_date_format' => 'themes.my-quark.meta_date_format',
                    'meta_show_reading_time' => 'themes.my-quark.meta_show_reading_time',
                    'meta_separator' => 'themes.my-quark.meta_separator',
                    'experience_tab' => 'themes.my-quark.experience_tab',
                    'experience_info' => 'themes.my-quark.experience_info',
                    'experience_tabs' => 'themes.my-quark.experience_tabs',
                    'animations_subtab' => 'themes.my-quark.animations_subtab',
                    'animations_section' => 'themes.my-quark.animations_section',
                    'animations_enabled' => 'themes.my-quark.animations_enabled',
                    'animations_respect_reduced_motion' => 'themes.my-quark.animations_respect_reduced_motion',
                    'accessibility_subtab' => 'themes.my-quark.accessibility_subtab',
                    'accessibility_section' => 'themes.my-quark.accessibility_section',
                    'accessibility_skip_link_text' => 'themes.my-quark.accessibility_skip_link_text',
                    'accessibility_mobile_menu_label' => 'themes.my-quark.accessibility_mobile_menu_label',
                    'accessibility_focus_mode' => 'themes.my-quark.accessibility_focus_mode',
                    'sustainability_subtab' => 'themes.my-quark.sustainability_subtab',
                    'sustainability_section' => 'themes.my-quark.sustainability_section',
                    'sustainability_eco_mode' => 'themes.my-quark.sustainability_eco_mode',
                    'sustainability_score' => 'themes.my-quark.sustainability_score',
                    'co2_per_view' => 'themes.my-quark.co2_per_view',
                    'ai_augmentation_subtab' => 'themes.my-quark.ai_augmentation_subtab',
                    'ai_augmentation_section' => 'themes.my-quark.ai_augmentation_section',
                    'ai_augmentation_enabled' => 'themes.my-quark.ai_augmentation_enabled',
                    'advanced_subtab' => 'themes.my-quark.advanced_subtab',
                    'advanced_section' => 'themes.my-quark.advanced_section',
                    'advanced_haptics' => 'themes.my-quark.advanced_haptics',
                    'configuration_tab' => 'themes.my-quark.configuration_tab',
                    'configuration_info' => 'themes.my-quark.configuration_info',
                    'configuration_tabs' => 'themes.my-quark.configuration_tabs',
                    'performance_subtab' => 'themes.my-quark.performance_subtab',
                    'performance_section' => 'themes.my-quark.performance_section',
                    'performance_production_mode' => 'themes.my-quark.performance_production_mode',
                    'privacy_subtab' => 'themes.my-quark.privacy_subtab',
                    'privacy_section' => 'themes.my-quark.privacy_section',
                    'privacy_shield_enabled' => 'themes.my-quark.privacy_shield_enabled',
                    'localization_subtab' => 'themes.my-quark.localization_subtab',
                    'localization_section' => 'themes.my-quark.localization_section',
                    'localization_newsletter_placeholder' => 'themes.my-quark.localization_newsletter_placeholder',
                    'localization_newsletter_button' => 'themes.my-quark.localization_newsletter_button'
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
