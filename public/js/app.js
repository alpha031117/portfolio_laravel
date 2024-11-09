document.addEventListener('mousemove', (e) => {
    // Update custom cursor position
    document.body.style.setProperty('--cursorX', `${e.clientX}px`);
    document.body.style.setProperty('--cursorY', `${e.clientY}px`);
});

document.addEventListener('DOMContentLoaded', function() {
    // Get the buttons
    const toAlphaBtn = document.getElementById('to-alpha');
    const toAlanBtn = document.getElementById('to-alan');

    // Add smooth scrolling behavior
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });

    // Show/hide buttons based on scroll position
    window.addEventListener('scroll', function() {
        const alphaSection = document.getElementById('alpha-section');
        const alanSection = document.getElementById('alan-section');
        const scrollPosition = window.scrollY + window.innerHeight / 2;

        if (scrollPosition >= alanSection.offsetTop) {
            toAlphaBtn.style.display = 'block';
            toAlanBtn.style.display = 'none';
        } else {
            toAlphaBtn.style.display = 'none';
            toAlanBtn.style.display = 'block';
        }
    });
});
