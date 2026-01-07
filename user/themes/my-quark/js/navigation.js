/**
 * Navigation Builder 2026 - Core Logic
 * Handles Intent-Aware Visibility, Battery/Network Adaptation, and Omni-Search
 */

(function() {
    'use strict';

    // =========================================================================
    // 0. ARIA ACCESSIBILITY MANAGEMENT
    // =========================================================================
    const mobileToggle = document.getElementById('toggle');
    const mobileOverlay = document.getElementById('overlay');
    
    if (mobileToggle && mobileOverlay) {
        mobileToggle.addEventListener('click', function() {
            const isExpanded = this.getAttribute('aria-expanded') === 'true';
            this.setAttribute('aria-expanded', !isExpanded);
        });
        
        // Also handle ESC key to close menu
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape' && mobileToggle.getAttribute('aria-expanded') === 'true') {
                mobileToggle.setAttribute('aria-expanded', 'false');
                mobileToggle.click(); // Trigger existing toggle logic
            }
        });
    }

    // =========================================================================
    // 1. INTENT-AWARE VISIBILITY (Cursor Velocity)
    // =========================================================================
    const header = document.getElementById('header');
    let lastY = 0;
    let speedY = 0;
    
    document.addEventListener('mousemove', (e) => {
        speedY = e.clientY - lastY;
        lastY = e.clientY;

        // If user is scrolling up rapidly (negative speed) or cursor moves up near top
        if (e.clientY < 150 && speedY < -10) {
            header.classList.add('intent-reveal');
            header.classList.remove('intent-hide');
        } else if (window.scrollY > 100 && e.clientY > 200) {
             // Optional: hide if deep in page and not interacting
             // header.classList.add('intent-hide');
        }
    });

    // =========================================================================
    // 2. BATTERY & NETWORK ADAPTATION (Eco-Mode)
    // =========================================================================
    async function checkEnergyStatus() {
        // Battery Status API
        if ('getBattery' in navigator) {
            try {
                const battery = await navigator.getBattery();
                const updateBatteryStatus = () => {
                    if (battery.level < 0.2 && !battery.charging) {
                        document.body.classList.add('eco-mode');
                        console.log('Low Battery: Eco-Mode Activated');
                    } else {
                        document.body.classList.remove('eco-mode');
                    }
                };
                
                updateBatteryStatus();
                battery.addEventListener('levelchange', updateBatteryStatus);
                battery.addEventListener('chargingchange', updateBatteryStatus);
            } catch (e) {
                console.warn('Battery API error:', e);
            }
        }

        // Network Information API
        if ('connection' in navigator) {
            const connection = navigator.connection || navigator.mozConnection || navigator.webkitConnection;
            if (connection) {
                const updateConnectionStatus = () => {
                    if (connection.saveData || connection.effectiveType.includes('2g')) {
                        document.body.classList.add('low-bandwidth');
                        console.log('Low Bandwidth: Optimized Assets');
                    } else {
                        document.body.classList.remove('low-bandwidth');
                    }
                };
                updateConnectionStatus();
                connection.addEventListener('change', updateConnectionStatus);
            }
        }
    }

    checkEnergyStatus();

    // =========================================================================
    // 3. FOLDABLE SUPPORT (Span Detection Spying)
    // =========================================================================
    // CSS media queries handle layout, this just adds debug/utility classes
    if (window.matchMedia('(horizontal-viewport-segments: 2)').matches) {
        document.body.classList.add('device-foldable-book');
    }

    // =========================================================================
    // 4. BIOMETRIC AUTH UI MOCKUP
    // =========================================================================
    const loginBtn = document.querySelector('.btn-login-action');
    if (loginBtn && window.PublicKeyCredential) {
        PublicKeyCredential.isUserVerifyingPlatformAuthenticatorAvailable()
            .then((available) => {
                if (available) {
                    loginBtn.innerHTML = '<i class="fa fa-fingerprint"></i> Sign in with Passkey';
                    loginBtn.classList.add('btn-biometric');
                }
            })
            .catch((err) => console.error('Biometric check failed', err));
    }
    
    // =========================================================================
    // 5. OMNI-SEARCH (Voice & Visual Triggers)
    // =========================================================================
    const voiceTrigger = document.querySelector('.omni-search-voice');
    if (voiceTrigger && ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window)) {
        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
        const recognition = new SpeechRecognition();
        
        voiceTrigger.addEventListener('click', () => {
            voiceTrigger.classList.add('listening');
            recognition.start();
        });

        recognition.onresult = (event) => {
            const transcript = event.results[0][0].transcript;
            const searchInput = document.querySelector('.omni-search-input');
            if (searchInput) {
                searchInput.value = transcript;
                // auto-submit or trigger search
                console.log('Voice Search:', transcript);
            }
            voiceTrigger.classList.remove('listening');
        };

        recognition.onerror = () => {
            voiceTrigger.classList.remove('listening');
        };
    }

})();
