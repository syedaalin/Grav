/* My-Quark | Theme Core JS (2026 Standards) - Refactored */

import { Haptics } from './modules/core/haptics.js';
import { Spatial } from './modules/core/spatial.js';
import { Predictive } from './modules/core/predictive.js';
import { Agentic } from './modules/core/agentic.js';

/**
 * THEME CORE - Main Orchestrator
 * Initializes all theme modules
 * 
 * Architecture:
 * - Modular design (each feature is independent)
 * - Error isolation (one module failure doesn't break others)
 * - Graceful degradation
 * - Browser compatibility checks
 */

const ThemeCore = {
    /**
     * Initialize all modules
     */
    init() {
        try {
            // Get haptics setting from body data attribute
            const hapticEnabled = document.body.dataset.haptics === 'true';
            
            // Initialize core modules
            Haptics.init(hapticEnabled);
            Spatial.init();
            Predictive.init();
            Agentic.init();
            
            console.log('Gravity: Theme Core initialized successfully');
        } catch (e) {
            console.error('Gravity: Theme initialization failed:', e);
        }
    },
    
    /**
     * Expose modules for external access
     */
    modules: {
        haptics: Haptics,
        spatial: Spatial,
        predictive: Predictive,
        agentic: Agentic
    }
};

// Initialize on DOM ready
document.addEventListener('DOMContentLoaded', () => {
    ThemeCore.init();
});

// Export for use in other scripts
window.ThemeCore = ThemeCore;

export default ThemeCore;
