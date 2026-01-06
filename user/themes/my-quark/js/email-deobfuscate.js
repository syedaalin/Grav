// Email Deobfuscation for anti-spam protection
document.addEventListener('DOMContentLoaded', function() {
    const emailElements = document.querySelectorAll('.email-obfuscated');
    
    emailElements.forEach(function(el) {
        const user = el.dataset.user.split('').reverse().join('');
        const domain = el.dataset.domain.split('').reverse().join('');
        const email = user + '@' + domain;
        
        const link = document.createElement('a');
        link.href = 'mailto:' + email;
        link.textContent = email;
        link.className = el.className.replace('email-obfuscated', '');
        
        el.parentNode.replaceChild(link, el);
    });
});
