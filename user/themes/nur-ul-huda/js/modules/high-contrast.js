
// High Contrast Module
// Handles toggling high contrast mode for accessibility.

jQuery(document).ready(function($){
    const hcToggle = $('button[title="High Contrast"]');
    
    if (hcToggle.length) {
        hcToggle.on('click', function() {
            $('body').toggleClass('high-contrast');
            localStorage.setItem('high-contrast', $('body').hasClass('high-contrast'));
        });

        if (localStorage.getItem('high-contrast') === 'true') {
            $('body').addClass('high-contrast');
        }
    }
});
