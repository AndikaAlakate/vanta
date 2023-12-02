const backToTopButton = document.getElementById('backToTopButton');

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        backToTopButton.style.opacity = '1';
        backToTopButton.style.transform = 'translateY(0)';
        backToTopButton.style.cursor = 'pointer';
    } else {
        backToTopButton.style.opacity = '0';
        backToTopButton.style.transform = 'translateY(100%)';
        backToTopButton.style.cursor = 'default';
    }
});
