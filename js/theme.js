document.addEventListener('DOMContentLoaded', () => {
    console.log('Theme loaded');
    
    // Add subtle parallax effect to background if desired
    document.addEventListener('mousemove', (e) => {
        const x = e.clientX / window.innerWidth;
        const y = e.clientY / window.innerHeight;
        
        document.body.style.backgroundPosition = `${x * 20}px ${y * 20}px`;
    });
});
