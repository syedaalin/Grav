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
import { Logger } from './utils.js';

/**
 * Mobile Menu Module
 * Handles the off-canvas mobile menu toggle and overlay interactions.
 * Pure Vanilla JS (ES Modules)
 */
export default class MobileMenu {
    /**
     * Centralized DOM Selectors
     * @type {Object}
     */
    static #selectors = {
        toggle: '.mobile-toggle',
        closeBtn: '#mobile-close',
        // overlay: '#mobile-menu-wrapper', // REMOVED: Dynamic targeting used
        header: '#header',
        backdrop: '#mobile-backdrop',
        sidebar: '.mobile-sidebar'
    };

    /**
     * Initialize Mobile Menu interactions
     */
    constructor() {
        this.toggles = document.querySelectorAll(MobileMenu.#selectors.toggle);
        this.closeBtn = document.querySelector(MobileMenu.#selectors.closeBtn);
        // this.overlay = document.querySelector(MobileMenu.#selectors.overlay); // Removed
        this.body = document.body;
        this.header = document.querySelector(MobileMenu.#selectors.header);

        this.init();
    }

    /**
     * Setup event listeners
     * @private
     */
    init() {
        if (this.toggles.length > 0) {
            this.toggles.forEach(toggle => {
                toggle.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.toggleMenu(toggle);
                });
            });
            Logger.info(`MobileMenu: Initialized with ${this.toggles.length} toggles`);
        } else {
            Logger.warn('MobileMenu: No toggles found');
        }

        if (this.closeBtn) {
            // Global close button fallback
            this.closeBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.close();
            });
        }

        // Proper delegation for all close buttons
        const closeBtns = document.querySelectorAll('.mobile-close-btn');
        closeBtns.forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.stopPropagation();
                // Close the specific overlay this button sits inside
                const overlay = btn.closest('.mobile-menu-overlay');
                this.close(overlay);
            });
        });

        // Find ALL overlays
        const overlays = document.querySelectorAll('.mobile-menu-overlay');

        overlays.forEach(overlay => {
            // Close on backdrop click
            const backdrop = overlay.querySelector('.mobile-menu-backdrop');
            if (backdrop) {
                backdrop.addEventListener('click', (e) => {
                    e.stopPropagation();
                    this.close(overlay);
                });
            }

            // Auto-close on link click
            const links = overlay.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('click', () => {
                    setTimeout(() => {
                        this.close(overlay);
                    }, 150);
                });
            });
        });
    }

    /**
     * Check if menu is open
     * @returns {boolean}
     */
    isOpen(overlay = null) {
        if (overlay) return overlay.dataset.open === 'true';
        return this.currentOverlay && this.currentOverlay.dataset.open === 'true';
    }

    /**
     * Toggle menu state
     * @param {HTMLElement|null} trigger - The element that triggered the toggle
     */
    toggleMenu(trigger = null) {
        // Resolve the target overlay first
        let targetOverlay = null;
        if (trigger && trigger.getAttribute('aria-controls')) {
            targetOverlay = document.getElementById(trigger.getAttribute('aria-controls'));
        }

        if (!targetOverlay) {
            // Fallback for global toggles without aria-controls (assumes main menu)
            Logger.warn('MobileMenu: Toggle clicked but no aria-controls found. Falling back to default.');
            return;
        }

        const isOpen = targetOverlay.dataset.open === 'true';

        if (!isOpen) {
            this.open(trigger);
        } else {
            this.close(targetOverlay);
        }
    }

    /**
     * Open the menu
     * @param {HTMLElement|null} trigger - The element that triggered the open
     */
    open(trigger = null) {
        // [User Requirement] Independent Sidebars: Do NOT auto-close others.
        // Singleton enforcement block REMOVED.

        // Find specific overlay if trigger provides aria-controls
        let currentOverlay = null;
        if (trigger && trigger.getAttribute('aria-controls')) {
            const targetId = trigger.getAttribute('aria-controls');
            currentOverlay = document.getElementById(targetId);
        }

        if (!currentOverlay) {
            Logger.error('MobileMenu: Open called but no overlay found');
            return;
        }

        this.currentOverlay = currentOverlay; // Track most recent active

        // Determine Direction based on button position
        let direction = 'left'; // Default
        if (trigger) {
            const rect = trigger.getBoundingClientRect();
            if (rect.left > (window.innerWidth / 2)) {
                direction = 'right';
            }
        }

        // Set direction attribute on the OVERLAY (wrapper)
        currentOverlay.dataset.direction = direction;

        // ANIMATION FIX: Force instant reset of position to new side
        const sidebar = currentOverlay.querySelector(MobileMenu.#selectors.sidebar);
        if (sidebar) {
            sidebar.style.transition = 'none';
            void sidebar.offsetWidth; // Force reflow
            sidebar.style.transition = '';
        }

        // State Update
        currentOverlay.dataset.open = 'true';
        currentOverlay.classList.add('open');
        currentOverlay.classList.remove('invisible', 'pointer-events-none');
        currentOverlay.setAttribute('aria-hidden', 'false');

        // Only lock body if at least one menu is open
        this.body.style.overflow = 'hidden';

        // Update ARIA on all toggles
        this.toggles.forEach(t => t.setAttribute('aria-expanded', 'true'));

        Logger.info(`MobileMenu: Opened ${currentOverlay.id}`);
    }

    /**
     * Close the menu
     * @param {HTMLElement|null} overlay - Specific overlay to close. If null, closes generic/current.
     */
    close(overlay = null) {
        const overlayToClose = overlay || this.currentOverlay;

        if (!overlayToClose) {
            // Ultimate Fallback: Close ANY open overlay if we somehow lost track
            const anyOpen = document.querySelector('.mobile-menu-overlay.open');
            if (anyOpen) this.close(anyOpen);
            return;
        }

        overlayToClose.dataset.open = 'false';
        overlayToClose.classList.remove('open');
        overlayToClose.setAttribute('aria-hidden', 'true');

        // Check if ANY other menus are still open before unlocking body
        const remainingOpen = document.querySelector('.mobile-menu-overlay[data-open="true"]');
        if (!remainingOpen) {
            this.body.style.overflow = '';
        }

        // Update generic triggers (rough, but functional)
        if (this.toggles) {
            // Ideally we find the specific toggle for this overlay, but generic reset is safer for accessibility 
            // unless we track toggle<->overlay maps strictly.
            // For now, only reset toggles that point to this overlay.
            this.toggles.forEach(t => {
                if (t.getAttribute('aria-controls') === overlayToClose.id) {
                    t.setAttribute('aria-expanded', 'false');
                }
            });
        }

        Logger.info(`MobileMenu: Closed ${overlayToClose.id}`);

        if (this.currentOverlay === overlayToClose) {
            this.currentOverlay = remainingOpen || null; // Shift focus or clear
        }
    }
}
