document.addEventListener('mousemove', (e) => {
    // Update custom cursor position
    document.body.style.setProperty('--cursorX', `${e.clientX}px`);
    document.body.style.setProperty('--cursorY', `${e.clientY}px`);
});

