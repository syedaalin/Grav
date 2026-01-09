/**
 * SPATIAL MODULE
 * Device orientation-based parallax effects
 * 
 * Features:
 * - Magic Window effect (gyroscope-based)
 * - Multi-layer parallax depth
 * - Performance optimized with RAF
 * - Hardware detection
 * 
 * 2026 Standard: Rule 2.1 - Spatial Native Integration
 */

export const Spatial = {
    active: false,
    layers: [],
    
    /**
     * Initialize spatial module
     */
    init() {
        if (!this.isSupported()) {
            console.log('Gravity: Spatial features not supported on this device');
            return;
        }
        
        this.active = true;
        this.layers = document.querySelectorAll('.spatial-layer');
        
        if (this.layers.length === 0) {
            console.log('Gravity: No spatial layers found');
            return;
        }
        
        document.body.classList.add('spatial-ready');
        this.bindOrientation();
        
        console.log('Gravity: Spatial Hardware Detected');
    },
    
    /**
     * Check if device supports orientation
     */
    isSupported() {
        return window.DeviceOrientationEvent && 'ontouchstart' in window;
    },
    
    /**
     * Bind device orientation events
     */
    bindOrientation() {
        window.addEventListener('deviceorientation', (event) => {
            this.handleOrientation(event);
        });
    },
    
    /**
     * Handle orientation change
     * @param {DeviceOrientationEvent} event
     */
    handleOrientation(event) {
        try {
            const tiltX = event.gamma; // Left/Right tilt (-90 to 90)
            const tiltY = event.beta;  // Front/Back tilt (-180 to 180)
            
            // Apply to each layer with depth factor
            this.layers.forEach(layer => {
                const depth = parseFloat(layer.getAttribute('data-depth')) || 0.05;
                const x = tiltX * depth;
                const y = tiltY * depth;
                
                // Use RAF for smooth animation
                requestAnimationFrame(() => {
                    layer.style.transform = `translate(${x}px, ${y}px)`;
                });
            });
        } catch (e) {
            console.warn('Gravity: Spatial orientation error:', e);
        }
    },
    
    /**
     * Add a new spatial layer dynamically
     * @param {HTMLElement} element
     * @param {number} depth - Parallax depth factor
     */
    addLayer(element, depth = 0.05) {
        element.classList.add('spatial-layer');
        element.setAttribute('data-depth', depth);
        this.layers = document.querySelectorAll('.spatial-layer');
    }
};
