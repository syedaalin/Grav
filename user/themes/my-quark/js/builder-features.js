/**
 * 2026 Builder Enhancements Script
 * Handles: Haptics, Scroll Animations, Focus Mode
 */
document.addEventListener('DOMContentLoaded', () => {
    
    // 1. HAPTIC FEEDBACK
    // Handled centrally in theme-core.js to avoid duplicate listeners.


    // 2. SEMANTIC MOTION (Intersection Observer for Animations)
    // We use a simple observer to toggle 'aos-animate' class
    const animatedElements = document.querySelectorAll('[data-aos]');
    
    const observerOptions = {
        threshold: 0.1, // Trigger when 10% visible
        rootMargin: '0px 0px -50px 0px' // Slightly offset from bottom
    };
    
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('aos-animate');
                // Optional: Stop observing once animated (run once)
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);
    
    animatedElements.forEach(el => observer.observe(el));
    
});
