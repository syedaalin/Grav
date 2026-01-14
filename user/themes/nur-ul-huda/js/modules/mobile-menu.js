/**
 * Mobile Menu Module
 * Handles the off-canvas mobile menu toggle and overlay interactions.
 * Pure Vanilla JS (ES Modules)
 */

/**
 * NUR-UL-HUDA FRONTEND LOGIC
 * -------------------------
 * Blueprint: [frontend-logic.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/frontend-logic.blueprint.md)
 */
export default class MobileMenu {
    constructor() {
        this.toggle = document.getElementById('mobile-toggle');
        this.closeBtn = document.getElementById('mobile-close');
        this.overlay = document.getElementById('mobile-menu-wrapper');
        this.body = document.body;
        this.header = document.getElementById('header');
        
        this.init();
    }

    init() {
        console.log('MobileMenu: Init called', { 
            toggle: this.toggle, 
            overlay: this.overlay,
            closeBtn: this.closeBtn 
        });

        if (this.toggle) {
            console.log('MobileMenu: Toggle listener attached');
            this.toggle.addEventListener('click', (e) => {
                console.log('MobileMenu: Toggle clicked');
                e.stopPropagation();
                this.toggleMenu();
            });
        } else {
            console.error('MobileMenu: Toggle button #mobile-toggle not found!');
        }

        if (this.closeBtn) {
            this.closeBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggleMenu();
            });
        }

        // Close on backdrop click (Close when clicking outside)
        const backdrop = document.getElementById('mobile-backdrop');
        if (backdrop) {
            backdrop.addEventListener('click', (e) => {
                e.stopPropagation();
                if (this.isOpen()) this.close();
            });
        }
        
        // Auto-close on link click (Added in previous step)
        if (this.overlay) {
             const links = this.overlay.querySelectorAll('a');
             links.forEach(link => {
                 link.addEventListener('click', () => {
                     // small delay to allow UI feedback
                     setTimeout(() => {
                        if (this.isOpen()) this.close();
                     }, 150);
                 });
             });
        }
    }

    isOpen() {
        return this.overlay && this.overlay.dataset.open === 'true';
    }

    toggleMenu() {
        if (!this.overlay) {
             console.error('MobileMenu: Overlay missing, cannot toggle');
             return;
        }
        
        const isOpen = this.isOpen();
        console.log(`MobileMenu: Toggle called. Currently Open: ${isOpen}`);
        
        if (!isOpen) {
            this.open();
        } else {
            this.close();
        }
    }

    open() {
        console.log('MobileMenu: OPENING');
        // Calculate Top Offset

        // Determine Direction based on button position
        const rect = this.toggle ? this.toggle.getBoundingClientRect() : { left: 0 };
        const isRight = rect.left > (window.innerWidth / 2);
        const direction = isRight ? 'right' : 'left';

        // Set direction attribute on the OVERLAY (wrapper)
        this.overlay.dataset.direction = direction;

        // Force reflow for transform consistency check (optional but safe)
        // void this.overlay.offsetWidth; 

        // State Update
        this.overlay.dataset.open = 'true';
        this.overlay.classList.add('open');
        this.overlay.classList.remove('invisible', 'pointer-events-none');
        this.overlay.setAttribute('aria-hidden', 'false');
        this.body.style.overflow = 'hidden';
        
        if (this.toggle) this.toggle.setAttribute('aria-expanded', 'true');
        console.log('MobileMenu: Opened. Classes:', this.overlay.className);
    }

    close() {
        console.log('MobileMenu: CLOSING');
        this.overlay.dataset.open = 'false';
        this.overlay.classList.remove('open');
        this.overlay.classList.add('invisible', 'pointer-events-none');
        this.overlay.setAttribute('aria-hidden', 'true');
        this.body.style.overflow = '';
        
        if (this.toggle) {
            this.toggle.setAttribute('aria-expanded', 'false');
            this.toggle.focus();
        }
    }
}

