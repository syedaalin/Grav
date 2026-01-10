/* Nur-e-Hidayat: Khums & Sadaqah Calculator Logic */

class KhumsCalculator {
    constructor() {
        this.rate = parseFloat(document.body.dataset.khumsRate || 0.20);
        this.form = document.getElementById('khums-calculator-form');
        if (this.form) this.init();
    }

    init() {
        this.form.addEventListener('input', () => this.calculate());
        
        const payBtn = document.getElementById('pay-khums-btn');
        if (payBtn) {
            payBtn.addEventListener('click', () => this.addToCart());
        }
    }

    calculate() {
        const savings = parseFloat(document.getElementById('khums-savings').value) || 0;
        const gold = parseFloat(document.getElementById('khums-gold').value) || 0;
        const inventory = parseFloat(document.getElementById('khums-inventory').value) || 0;
        const debts = parseFloat(document.getElementById('khums-debts').value) || 0;

        this.surplus = Math.max(0, (savings + gold + inventory) - debts);
        this.khumsTotal = this.surplus * this.rate;

        // Split donation display
        document.getElementById('khums-total-display').textContent = this.khumsTotal.toLocaleString();
        document.getElementById('sehme-imam-display').textContent = (this.khumsTotal / 2).toLocaleString();
        document.getElementById('sehme-sadaat-display').textContent = (this.khumsTotal / 2).toLocaleString();
    }

    addToCart() {
        if (!this.khumsTotal || this.khumsTotal <= 0) return;

        Snipcart.api.cart.items.add({
            id: 'khums-donation',
            name: 'Khums Donation',
            price: this.khumsTotal.toFixed(2),
            url: window.location.href,
            description: 'Religious obligation: General Khums',
            metadata: {
                sehme_imam: (this.khumsTotal / 2).toFixed(2),
                sehme_sadaat: (this.khumsTotal / 2).toFixed(2),
                type: 'khums'
            }
        });
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new KhumsCalculator();
});
