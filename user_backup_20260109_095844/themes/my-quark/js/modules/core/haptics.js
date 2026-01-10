/**
 * HAPTICS MODULE
 * Vibration feedback system for interactive elements
 * 
 * Features:
 * - Global haptic feedback for buttons/links
 * - Explicit element control via data-haptic
 * - Pattern customization
 * - Error handling and graceful degradation
 * 
 * 2026 Standard: Rule 3.2 - Haptic Design System
 */

export const Haptics = {
    enabled: false,
    
    /**
     * Initialize haptics module
     * @param {boolean} globalEnabled - Enable global haptics on all interactive elements
     */
    init(globalEnabled = false) {
        if (!navigator.vibrate) {
            console.warn('Gravity: Vibration API not supported');
            return;
        }
        
        this.enabled = globalEnabled;
        this.bindGlobalElements();
        this.bindExplicitElements();
        
        console.log('Gravity: Haptic Feedback Active');
    },
    
    /**
     * Trigger vibration
     * @param {number|array} pattern - Vibration pattern in ms
     */
    vibrate(pattern = 10) {
        try {
            navigator.vibrate(pattern);
        } catch (e) {
            console.warn('Gravity: Haptic vibration failed:', e);
        }
    },
    
    /**
     * Bind global interactive elements (if enabled)
     */
    bindGlobalElements() {
        if (!this.enabled) return;
        
        try {
            const elements = document.querySelectorAll('a, button, .btn, .social-btn');
            elements.forEach(el => {
                if (!el.hasAttribute('data-haptic')) {
                    el.addEventListener('click', () => this.vibrate(10));
                }
            });
        } catch (e) {
            console.warn('Gravity: Global haptics initialization failed:', e);
        }
    },
    
    /**
     * Bind explicit haptic elements (data-haptic="true")
     */
    bindExplicitElements() {
        try {
            const elements = document.querySelectorAll('[data-haptic="true"]');
            elements.forEach(el => {
                el.addEventListener('click', () => {
                    const pattern = el.dataset.hapticPattern 
                        ? JSON.parse(el.dataset.hapticPattern) 
                        : 15;
                    this.vibrate(pattern);
                });
            });
        } catch (e) {
            console.warn('Gravity: Explicit haptics initialization failed:', e);
        }
    },
    
    /**
     * Preset vibration patterns
     */
    patterns: {
        gentle: 10,
        normal: 15,
        strong: 25,
        double: [10, 50, 10],
        success: [10, 30, 10, 30, 20],
        error: [50, 50, 50]
    }
};
