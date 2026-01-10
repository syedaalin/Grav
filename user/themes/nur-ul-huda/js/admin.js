var AdminUtils = (function() {
    // Defaults
    const DEFAULTS = {
        'glass_blur': 25,
        'glass_opacity': 0.12,
        'glass_border_opacity': 0.15,
        'glass_thickness': 1,
        'glass_shadow_intensity': 0.10
    };

    function initGlassReset() {
        const btn = document.getElementById('btn-reset-glass');
        if (!btn) return;

        const inputs = {};
        Object.keys(DEFAULTS).forEach(key => {
            inputs[key] = document.querySelector(`input[name="data[${key}]"]`);
        });

        const checkState = () => {
            let isDefault = true;
            Object.keys(DEFAULTS).forEach(key => {
                const input = inputs[key];
                if (input && parseFloat(input.value) !== DEFAULTS[key]) {
                    isDefault = false;
                }
            });

            if (isDefault) {
                btn.classList.add('disabled');
                btn.style.opacity = '0.5';
                btn.style.cursor = 'not-allowed';
                btn.setAttribute('disabled', 'disabled');
                btn.innerHTML = '<i class="fa fa-check"></i> Defaults Active';
            } else {
                btn.classList.remove('disabled');
                btn.style.opacity = '1';
                btn.style.cursor = 'pointer';
                btn.removeAttribute('disabled');
                btn.innerHTML = '<i class="fa fa-undo"></i> Reset Defaults';
            }
        };

        // Listen for changes
        Object.values(inputs).forEach(input => {
            if (input) {
                input.addEventListener('input', checkState);
                input.addEventListener('change', checkState);
            }
        });

        // Initial check
        checkState();

        btn.addEventListener('click', function(e) {
            e.preventDefault();
            if (btn.hasAttribute('disabled')) return;
            
            // Helper to set value and trigger change
            const setVal = (name, val) => {
                const input = inputs[name];
                if (input) {
                    input.value = val;
                    // Trigger events for Grav/Range sliders to update visual state
                    input.dispatchEvent(new Event('input', { bubbles: true }));
                    input.dispatchEvent(new Event('change', { bubbles: true }));
                }
            };

            // Set Premium Defaults
            Object.entries(DEFAULTS).forEach(([key, val]) => setVal(key, val));
            
            // Re-check state immediately
            checkState();
        });
    }

    return {
        init: function() {
            document.addEventListener('DOMContentLoaded', initGlassReset);
            // Also run on window load in case DOMContentLoaded fired early
            window.addEventListener('load', initGlassReset);
        }
    };
})();

AdminUtils.init();
