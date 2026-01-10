
// UI Module (Sticky Header, Mobile Menu, Parallax)
var isTouch = window.DocumentTouch && document instanceof DocumentTouch;

// Mobile menu logic
const mobileToggle = document.getElementById('mobile-toggle');
const mobileClose = document.getElementById('mobile-close');
const mobileOverlay = document.getElementById('mobile-overlay');
const bodyEl = document.body;

function toggleMenu() {
    if (!mobileOverlay) return;
    
    // Use data attribute for explicit state tracking
    const isOpen = mobileOverlay.dataset.open === 'true';
    
    if (!isOpen) {
        // Open menu
        mobileOverlay.dataset.open = 'true';
        mobileOverlay.classList.remove('-translate-x-full');
        mobileOverlay.classList.remove('pointer-events-none');
        mobileOverlay.setAttribute('aria-hidden', 'false');
        bodyEl.style.overflow = 'hidden';
        if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'true');
    } else {
        // Close menu
        mobileOverlay.dataset.open = 'false';
        mobileOverlay.classList.add('-translate-x-full');
        mobileOverlay.classList.add('pointer-events-none');
        mobileOverlay.setAttribute('aria-hidden', 'true');
        bodyEl.style.overflow = '';
        if (mobileToggle) mobileToggle.setAttribute('aria-expanded', 'false');
    }
}

if (mobileToggle) {
    mobileToggle.addEventListener('click', function(e) {
        e.stopPropagation(); // Stop bubbling
        toggleMenu();
    });
}

if (mobileClose) {
    mobileClose.addEventListener('click', function(e) {
        e.stopPropagation();
        toggleMenu();
    });
}

// Prevent clicks on the overlay background from closing it unintentionally
if (mobileOverlay) {
    mobileOverlay.addEventListener('click', function(e) {
        e.stopPropagation();
    });
}

// Smart Sticky Header
let lastScrollTop = 0;
const header = document.getElementById('header');
const scrollThreshold = 100;

function scrollHeader() {
    // Check if header exists before accessing style
    if (!header) return;

    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
        // Scrolling Down
        header.style.transform = 'translateY(-100%)';
        header.classList.remove('shadow-sm'); 
    } else {
        // Scrolling Up
        header.style.transform = 'translateY(0)';
        if (scrollTop > 0) {
            header.classList.add('shadow-sm', 'bg-white/95');
            header.classList.remove('bg-white/80');
        } else {
            header.classList.remove('shadow-sm', 'bg-white/95');
            header.classList.add('bg-white/80');
        }
    }
    lastScrollTop = scrollTop;
}

// Initialize
jQuery(document).ready(function($){
    if (!isTouch){
        $(window).scroll(function() { 
            scrollHeader();
            if (typeof parallaxBackground === 'function') parallaxBackground();
        });
    } else {
        $(window).on('touchmove', function() {
           scrollHeader();
        });
        $(window).scroll(function() {
            scrollHeader();
        });
    }
});
