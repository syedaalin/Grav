
// Khums Calculator Module
// Handles client-side Khums calculations and Snipcart metadata updates.

document.addEventListener('DOMContentLoaded', () => {
    // Only run if the calculator exists on the page
    if (!document.querySelector('.modular-khums-calculator')) return;

    const config = {
        currency: document.getElementById('khums-currency-config')?.dataset.currency || '$',
        rate: parseFloat(document.getElementById('khums-rate-config')?.dataset.rate || 20) / 100
    };

    const inputs = document.querySelectorAll('.active-assets');
    const netDisplay = document.getElementById('khums-net-display');
    const totalDisplay = document.getElementById('khums-total-display');
    const checkoutBtn = document.getElementById('khums-checkout-btn');
    const splitToggle = document.getElementById('khums-split-toggle');

    if (!checkoutBtn || !totalDisplay) return;

    const updateSnipcartData = (total) => {
        const isSplit = splitToggle ? splitToggle.checked : false;
        const imamAmount = isSplit ? (total / 2).toFixed(2) : total.toFixed(2);
        const sadaatAmount = isSplit ? (total / 2).toFixed(2) : "0.00";

        checkoutBtn.setAttribute('data-item-price', total.toFixed(2));
        checkoutBtn.setAttribute('data-item-custom1-value', isSplit ? 'Split 50/50' : 'Full Amount');
        checkoutBtn.setAttribute('data-item-custom2-value', imamAmount);
        checkoutBtn.setAttribute('data-item-custom3-value', sadaatAmount);
    };

    function calculate() {
        const savings = parseFloat(document.getElementById('khums-savings')?.value) || 0;
        const gold = parseFloat(document.getElementById('khums-gold')?.value) || 0;
        const business = parseFloat(document.getElementById('khums-business')?.value) || 0;
        const other = parseFloat(document.getElementById('khums-other')?.value) || 0;
        const debts = parseFloat(document.getElementById('khums-debts')?.value) || 0;

        const net = Math.max(0, (savings + gold + business + other) - debts);
        const khums = net * config.rate;

        if (netDisplay) netDisplay.textContent = `${config.currency} ${net.toLocaleString(undefined, {minimumFractionDigits: 2})}`;
        if (totalDisplay) totalDisplay.textContent = `${config.currency} ${khums.toLocaleString(undefined, {minimumFractionDigits: 2})}`;
        
        return khums;
    }

    // Event Listeners
    inputs.forEach(input => {
        input.addEventListener('input', () => {
            const total = calculate();
            updateSnipcartData(total);
        });
    });

    if (splitToggle) {
        splitToggle.addEventListener('change', () => {
            const total = calculate();
            updateSnipcartData(total);
        });
    }

    checkoutBtn.addEventListener('click', (e) => {
        const totalText = totalDisplay.textContent.replace(/[^0-9.-]+/g,"");
        const total = parseFloat(totalText);
        if (total <= 0) {
            e.preventDefault();
            e.stopPropagation();
            alert("Please enter your surplus assets to calculate Khums.");
        }
    });

    // Initial calculation
    const initialTotal = calculate();
    updateSnipcartData(initialTotal);
});
