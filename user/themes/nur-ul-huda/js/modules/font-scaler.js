
// Font Scaler Module
// Handles resizing root font size for accessibility.

jQuery(document).ready(function($){
    let fontSize = parseInt(localStorage.getItem('font-size-offset')) || 0;
    
    const applyFontSize = () => {
        $('html').css('font-size', (100 + fontSize) + '%');
        localStorage.setItem('font-size-offset', fontSize);
    };

    const increaseBtn = $('button[title="Larger Text"]');
    const decreaseBtn = $('button[title="Smaller Text"]');

    if (increaseBtn.length) {
        increaseBtn.on('click', function() {
            if (fontSize < 30) {
                fontSize += 5;
                applyFontSize();
            }
        });
    }

    if (decreaseBtn.length) {
        decreaseBtn.on('click', function() {
            if (fontSize > -10) {
                fontSize -= 5;
                applyFontSize();
            }
        });
    }
    
    // Initial apply
    if (fontSize !== 0) applyFontSize();
});
