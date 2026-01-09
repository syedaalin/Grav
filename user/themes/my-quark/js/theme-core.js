/* My-Quark | Theme Core JS (2026 Standards) */

const ThemeCore = {
    init: function() {
        this.initHaptics();
        this.initSpatial();
        this.initAgentic();
        this.initPredictive();
        this.initBionicReading();
    },

    initSpatial: function() {
        // "The Hardware Handshake" - Rule 2.1
        // Detect device orientation support for "Magic Window" effect
        try {
            if (window.DeviceOrientationEvent && 'ontouchstart' in window) {
                document.body.classList.add('spatial-ready');
                console.log('Gravity: Spatial Hardware Detected');
                
                // Simple parallax for the background (if enabled)
                window.addEventListener('deviceorientation', (event) => {
                    try {
                        const tiltX = event.gamma; // Left/Right tilt
                        const tiltY = event.beta;  // Front/Back tilt
                        
                        // Apply subtle shift to elements with .spatial-layer class
                        const layers = document.querySelectorAll('.spatial-layer');
                        layers.forEach(layer => {
                            const depth = layer.getAttribute('data-depth') || 0.05;
                            layer.style.transform = `translate(${tiltX * depth}px, ${tiltY * depth}px)`;
                        });
                    } catch (e) {
                        console.warn('Gravity: Spatial orientation error:', e);
                    }
                });
            }
        } catch (e) {
            console.warn('Gravity: Spatial initialization failed:', e);
        }
    },

    initHaptics: function() {
        // Haptic Feedback (Vibration API)
        if (!navigator.vibrate) return;

        const hapticEnabled = document.body.dataset.haptics === 'true';
        
        // Helper to trigger vibration with error handling
        const vibrate = (pattern = 10) => {
            try { 
                navigator.vibrate(pattern); 
            } catch(e) {
                console.warn('Gravity: Haptic vibration failed:', e);
            }
        };

        // 1. Global Interactive Elements (if enabled in config)
        if (hapticEnabled) {
            try {
                const vibratingElements = document.querySelectorAll('a, button, .btn, .social-btn');
                vibratingElements.forEach(el => {
                    // Avoid double-binding if element also has data-haptic
                    if (!el.hasAttribute('data-haptic')) {
                        el.addEventListener('click', () => vibrate(10));
                    }
                });
            } catch (e) {
                console.warn('Gravity: Global haptics initialization failed:', e);
            }
        }

        // 2. Explicit Haptic Elements (from Builder/Templates)
        // These might be on elements not covered by global selector, or exist even if global haptics is off
        try {
            const explicitHapticElements = document.querySelectorAll('[data-haptic="true"]');
            explicitHapticElements.forEach(el => {
                el.addEventListener('click', (e) => {
                    // Determine pattern (could be customizable in future)
                    vibrate(15);
                });
            });

            if (hapticEnabled || explicitHapticElements.length > 0) {
                console.log('Gravity: Haptic Feedback Active');
            }
        } catch (e) {
            console.warn('Gravity: Explicit haptics initialization failed:', e);
        }
    },

    initAgentic: function() {
        // Future-proofing for Agentic Browsing
        const agentActions = document.querySelectorAll('[data-agent-action]');
        if (agentActions.length > 0) {
            console.log(`Gravity: Found ${agentActions.length} agentic actions.`);
        }
    },

    initPredictive: function() {
        // Rule 3.1: Speculation Rules API (2026 Standard)
        // Replaces basic prefetch with true pre-rendering
        
        try {
            // Check browser support
            if (HTMLScriptElement.supports && HTMLScriptElement.supports('speculationrules')) {
                // Create speculation rules for same-origin navigation
                const speculationRules = {
                    "prerender": [
                        {
                            "where": {
                                "and": [
                                    {"href_matches": "/*"},
                                    {"not": {"href_matches": "/admin/*"}},
                                    {"not": {"selector_matches": "a[target='_blank']"}}
                                ]
                            },
                            "eagerness": "moderate"
                        }
                    ],
                    "prefetch": [
                        {
                            "where": {"href_matches": "/*"},
                            "eagerness": "conservative"
                        }
                    ]
                };

                const script = document.createElement('script');
                script.type = 'speculationrules';
                script.textContent = JSON.stringify(speculationRules);
                document.head.appendChild(script);
                
                console.log('Gravity: Speculation Rules API Active (Next Paint < 50ms)');
            } else {
                // Fallback to basic link prefetch for older browsers
                this.initBasicPrefetch();
            }
        } catch (e) {
            console.warn('Gravity: Speculation Rules API failed, using fallback:', e);
            this.initBasicPrefetch();
        }
    },

    initBionicReading: function() {
        // Rule 3.2: Bionic Reading for neurodivergent users
        // Highlights the first half of words to improve reading speed and comprehension
        
        try {
            // Check if bionic reading is enabled (either globally or via focus mode)
            const bionicEnabled = document.body.dataset.bionicReading === 'true';
            const focusMode = document.body.classList.contains('focus-mode');
            
            if (!bionicEnabled && !focusMode) return;
            
            // Function to apply bionic reading to text nodes
            const makeBionic = (text) => {
                // Split by words, preserve spaces
                return text.replace(/\b(\w{3,})\b/g, (match) => {
                    const splitPoint = Math.ceil(match.length / 2);
                    const bold = match.slice(0, splitPoint);
                    const normal = match.slice(splitPoint);
                    return `<strong class="bionic-bold">${bold}</strong>${normal}`;
                });
            };
            
            // Apply to paragraph and list content
            const textContainers = document.querySelectorAll('p, li, blockquote, .article-content');
            
            textContainers.forEach(container => {
                // Skip if already processed
                if (container.dataset.bionicProcessed) return;
                
                // Process text nodes only (preserve HTML structure)
                const walker = document.createTreeWalker(
                    container,
                    NodeFilter.SHOW_TEXT,
                    null,
                    false
                );
                
                const textNodes = [];
                let node;
                while (node = walker.nextNode()) {
                    // Only process text nodes with substantial content
                    if (node.textContent.trim().length > 3) {
                        textNodes.push(node);
                    }
                }
                
                // Process each text node
                textNodes.forEach(textNode => {
                    const span = document.createElement('span');
                    span.innerHTML = makeBionic(textNode.textContent);
                    textNode.parentNode.replaceChild(span, textNode);
                });
                
                container.dataset.bionicProcessed = 'true';
            });
            
            console.log('Gravity: Bionic Reading Active');
            
        } catch (e) {
            console.warn('Gravity: Bionic Reading initialization failed:', e);
        }
    },

    initBasicPrefetch: function() {
        // Fallback prefetch for browsers without Speculation Rules support
        try {
            const links = document.querySelectorAll('a:not([target="_blank"]):not([href^="#"])');
            
            links.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    try {
                        const url = link.href;
                        if (!url || url.includes('/admin/')) return;
                        
                        if (!document.querySelector(`link[rel="prefetch"][href="${url}"]`)) {
                            const prefetch = document.createElement('link');
                            prefetch.rel = 'prefetch';
                            prefetch.href = url;
                            document.head.appendChild(prefetch);
                        }
                    } catch (e) {
                        // Silently fail for individual link prefetch
                    }
                });
            });
            
            console.log('Gravity: Basic Prefetch Active (Fallback)');
        } catch (e) {
            console.warn('Gravity: Basic prefetch initialization failed:', e);
        }
    }
};

document.addEventListener('DOMContentLoaded', () => {
    try {
        ThemeCore.init();
    } catch (e) {
        console.error('Gravity: Theme initialization failed:', e);
    }
});
