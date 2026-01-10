/**
 * PREDICTIVE MODULE
 * Speculation Rules API for instant navigation
 * 
 * Features:
 * - Pre-rendering for same-origin links
 * - Prefetching with eagerness control
 * - Fallback to basic prefetch for older browsers
 * - Smart exclusions (admin, external links)
 * 
 * 2026 Standard: Rule 3.1 - Predictive Prefetching
 */

export const Predictive = {
    /**
     * Initialize predictive module
     */
    init() {
        if (this.supportsSpeculationRules()) {
            this.initSpeculationRules();
        } else {
            this.initBasicPrefetch();
        }
    },
    
    /**
     * Check if browser supports Speculation Rules API
     */
    supportsSpeculationRules() {
        return HTMLScriptElement.supports && HTMLScriptElement.supports('speculationrules');
    },
    
    /**
     * Initialize Speculation Rules API (Modern browsers)
     */
    initSpeculationRules() {
        try {
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
        } catch (e) {
            console.warn('Gravity: Speculation Rules API failed:', e);
            this.initBasicPrefetch();
        }
    },
    
    /**
     * Fallback: Basic link prefetch (Older browsers)
     */
    initBasicPrefetch() {
        try {
            const links = document.querySelectorAll('a:not([target="_blank"]):not([href^="#"])');
            const prefetched = new Set();
            
            links.forEach(link => {
                link.addEventListener('mouseenter', () => {
                    const url = link.href;
                    
                    // Skip if already prefetched, is admin, or invalid
                    if (!url || url.includes('/admin/') || prefetched.has(url)) {
                        return;
                    }
                    
                    // Create prefetch link
                    const prefetch = document.createElement('link');
                    prefetch.rel = 'prefetch';
                    prefetch.href = url;
                    document.head.appendChild(prefetch);
                    
                    prefetched.add(url);
                });
            });
            
            console.log('Gravity: Basic Prefetch Active (Fallback)');
        } catch (e) {
            console.warn('Gravity: Basic prefetch initialization failed:', e);
        }
    },
    
    /**
     * Manually trigger prefetch for a URL
     * @param {string} url - URL to prefetch
     */
    prefetch(url) {
        const link = document.createElement('link');
        link.rel = 'prefetch';
        link.href = url;
        document.head.appendChild(link);
    },
    
    /**
     * Manually trigger prerender for a URL (if supported)
     * @param {string} url - URL to prerender
     */
    prerender(url) {
        if (!this.supportsSpeculationRules()) {
            this.prefetch(url);
            return;
        }
        
        const script = document.createElement('script');
        script.type = 'speculationrules';
        script.textContent = JSON.stringify({
            "prerender": [{"urls": [url]}]
        });
        document.head.appendChild(script);
    }
};
