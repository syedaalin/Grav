/**
 * Khums & Sadaqah Calculator - Full Controller
 * Blueprint: [interactive-components.blueprint.md](file:///Users/syedaalin/Documents/Grav/user/themes/nur-ul-huda/blueprints/docs/interactive-components.blueprint.md)
 * Handles UI interactions, calculations, and checkout integration.
 */
import { Logger } from './utils.js';

export default class KhumsCalculator {
    /**
     * Centralized DOM Selectors
     */
    static #selectors = {
        inputs: {
            savings: 'khums-savings',
            gold: 'khums-gold',
            business: 'khums-business',
            other: 'khums-other',
            debts: 'khums-debts',
            sadaqah: 'sadaqah-amount'
        },
        display: {
            net: 'khums-net-display',
            khums: 'khums-calc-display',
            sadaqah: 'sadaqah-display',
            total: 'khums-total-display'
        },
        controls: {
            calcBtn: 'khums-calc-trigger',
            checkoutBtn: 'khums-checkout-btn',
            currencyConfig: 'khums-currency-config'
        }
    };

    constructor() {
        this.els = {};
        this.rate = 0.20; // 20%
        this.init();
    }

    /**
     * Initialize Calculator
     */
    init() {
        if (!this.#cacheElements()) {
            return; // Not on calculator page
        }

        this.currencySymbol = this.els.currencyConfig ? this.els.currencyConfig.dataset.currency : '$';

        this.bindListeners();
        this.updateCalculation();
        Logger.info('KhumsCalculator: Initialized');
    }

    /**
     * Cache DOM elements
     * @returns {boolean} True if critical elements found
     */
    #cacheElements() {
        const s = KhumsCalculator.#selectors;

        // Inputs
        for (const [key, id] of Object.entries(s.inputs)) {
            this.els[key] = document.getElementById(id);
        }

        // Validate at least one input exists to confirm we are on the right page
        if (!this.els.savings) return false;

        // Displays
        for (const [key, id] of Object.entries(s.display)) {
            this.els[`display${key.charAt(0).toUpperCase() + key.slice(1)}`] = document.getElementById(id);
        }

        // Controls
        this.els.calcBtn = document.getElementById(s.controls.calcBtn);
        this.els.checkoutBtn = document.getElementById(s.controls.checkoutBtn);
        this.els.currencyConfig = document.getElementById(s.controls.currencyConfig);

        return true;
    }

    // Helper to get float val
    val(el) {
        return el ? (parseFloat(el.value) || 0) : 0;
    }

    // helper format
    format(num) {
        return this.currencySymbol + ' ' + num.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });
    }

    updateCalculation() {
        // 1. Calculate Assets
        const assets = this.val(this.els.savings) + this.val(this.els.gold) + this.val(this.els.business) + this.val(this.els.other);

        // 2. Calculate Deductions
        const deductions = this.val(this.els.debts);

        // 3. Net Surplus (Max 0)
        const netSurplus = Math.max(0, assets - deductions);

        // 4. Khums Amount
        const khumsAmount = netSurplus * this.rate;

        // 5. Sadaqah Amount
        const sadaqahAmount = this.val(this.els.sadaqah);

        // 6. Total Payable
        const totalPayable = khumsAmount + sadaqahAmount;

        // Updated Displays
        if (this.els.displayNet) this.els.displayNet.textContent = this.format(netSurplus);

        if (this.els.displayKhums) this.els.displayKhums.textContent = this.format(khumsAmount);
        if (this.els.displaySadaqah) this.els.displaySadaqah.textContent = this.format(sadaqahAmount);

        if (this.els.displayTotal) this.els.displayTotal.textContent = this.format(totalPayable);

        // Update Checkout Button Data
        if (this.els.checkoutBtn) {
            this.els.checkoutBtn.dataset.itemPrice = totalPayable.toFixed(2);

            // Update custom fields for Snipcart/Checkout
            this.els.checkoutBtn.dataset.itemCustom2Value = khumsAmount.toFixed(2);
            this.els.checkoutBtn.dataset.itemCustom3Value = sadaqahAmount.toFixed(2);

            // Optional: Disable if 0
            if (totalPayable <= 0) {
                this.els.checkoutBtn.classList.add('opacity-50', 'pointer-events-none');
            } else {
                this.els.checkoutBtn.classList.remove('opacity-50', 'pointer-events-none');
            }
        }
    }

    bindListeners() {
        const inputs = [this.els.savings, this.els.gold, this.els.business, this.els.other, this.els.debts, this.els.sadaqah];
        inputs.forEach(input => {
            if (input) {
                input.addEventListener('input', () => this.updateCalculation());
                // Also select all on focus for easier editing
                input.addEventListener('focus', function () { this.select(); });
            }
        });

        // Explicit Calculate Button
        if (this.els.calcBtn) {
            this.els.calcBtn.addEventListener('click', (e) => {
                e.preventDefault();
                this.updateCalculation();
                // Scroll to summary on mobile
                if (this.els.displayTotal) {
                    this.els.displayTotal.closest('.card-glass').scrollIntoView({ behavior: 'smooth', block: 'center' });
                }
            });
        }
    }
}

// Auto-initialize if module is loaded
new KhumsCalculator();
