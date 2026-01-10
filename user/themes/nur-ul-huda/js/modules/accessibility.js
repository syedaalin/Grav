
// Accessibility Module (High Contrast & Font Scaling)
jQuery(document).ready(function($){
    // 1. High Contrast Toggle
    const hcToggle = $('button[title="High Contrast"]');
    hcToggle.on('click', function() {
        $('body').toggleClass('high-contrast');
        localStorage.setItem('high-contrast', $('body').hasClass('high-contrast'));
    });

    if (localStorage.getItem('high-contrast') === 'true') {
        $('body').addClass('high-contrast');
    }

    // 2. Font Scaling
    let fontSize = parseInt(localStorage.getItem('font-size-offset')) || 0;
    const applyFontSize = () => {
        $('html').css('font-size', (100 + fontSize) + '%');
        localStorage.setItem('font-size-offset', fontSize);
    };

    $('button[title="Larger Text"]').on('click', function() {
        if (fontSize < 30) {
            fontSize += 5;
            applyFontSize();
        }
    });

    $('button[title="Smaller Text"]').on('click', function() {
        if (fontSize > -10) {
            fontSize -= 5;
            applyFontSize();
        }
    });
    
    // Initial apply
    if (fontSize !== 0) applyFontSize();
});
