/**
 * SECURE JAZZCASH PAYMENT MODULE
 * ------------------------------
 * Handles the payment flow securely by requesting a signature from the server
 * instead of calculating it in the browser (which would expose the Salt).
 */
import { Logger } from '../utils.js';

export default class PaymentHandler {
    static #selectors = {
        form: '#payment-form',
        submit: '#btn-payment-submit',
        secureHash: 'input[name="pp_SecureHash"]'
    };

    constructor() {
        this.form = document.querySelector(PaymentHandler.#selectors.form);
        this.submitBtn = document.querySelector(PaymentHandler.#selectors.submit);

        if (this.form && this.submitBtn) {
            this.init();
        }
    }

    init() {
        this.form.addEventListener('submit', async (e) => {
            e.preventDefault();
            await this.processPayment();
        });
        Logger.info('PaymentHandler: Initialized');
    }

    /**
     * securely signs the request and submits the form
     */
    async processPayment() {
        this.setLoading(true);

        try {
            // 1. Gather Form Data
            const formData = new FormData(this.form);
            const data = Object.fromEntries(formData.entries());

            // 2. Request Signature from Backend
            const signature = await this.signRequest(data);

            // 3. Inject Signature
            let hashInput = this.form.querySelector(PaymentHandler.#selectors.secureHash);
            if (!hashInput) {
                hashInput = document.createElement('input');
                hashInput.type = 'hidden';
                hashInput.name = 'pp_SecureHash';
                this.form.appendChild(hashInput);
            }
            hashInput.value = signature;

            // 4. Submit Form to Gateway
            this.form.submit();

        } catch (error) {
            Logger.error('Payment Error:', error);
            this.showError('Secure payment initialization failed. Please try again.');
            this.setLoading(false);
        }
    }

    /**
     * Call the server to sign the payload
     */
    async signRequest(payload) {
        const response = await fetch('/payment/sign-request', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify(payload)
        });

        if (!response.ok) {
            throw new Error(`Server signing failed: ${response.status}`);
        }

        const result = await response.json();
        return result.pp_SecureHash;
    }

    setLoading(state) {
        if (state) {
            this.submitBtn.disabled = true;
            this.submitBtn.dataset.originalText = this.submitBtn.textContent;
            this.submitBtn.textContent = 'Securing Payment...';
        } else {
            this.submitBtn.disabled = false;
            this.submitBtn.textContent = this.submitBtn.dataset.originalText || 'Pay Now';
        }
    }

    showError(msg) {
        alert(msg); // Placeholder for a better UI notification
    }
}
