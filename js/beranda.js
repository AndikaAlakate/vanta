// JavaScript untuk Dark Mode Toggle
const darkModeToggle = document.getElementById('darkModeToggle');
const emoji = darkModeToggle.querySelector('.desktop-emoji');
const body = document.body;
const footer = document.querySelector('.footer');
const footerElements = document.querySelectorAll('.footer h5, .footer p, .footer a');

// Waktu transisi untuk pergantian warna (dalam milidetik)
const colorTransitionDuration = 500; // Ganti sesuai keinginan Anda

// Fungsi untuk mengaktifkan atau menonaktifkan dark mode
function enableDarkMode() {
    body.classList.add('dark-mode');
    localStorage.setItem('dark-mode', 'enabled');
    emoji.innerText = '☀'; // Ganti emoji ke matahari saat dark mode diaktifkan
    emoji.style.color = '#f39c12'; // Ganti warna emoji saat dark mode diaktifkan
    footer.style.backgroundColor = '#111'; // Ganti warna latar footer saat dark mode diaktifkan
    footerElements.forEach(element => {
        element.style.color = '#fff'; // Ganti warna elemen footer saat dark mode diaktifkan
    });
}

function disableDarkMode() {
    body.classList.remove('dark-mode');
    localStorage.setItem('dark-mode', 'disabled');
    emoji.innerText = '🌙'; // Ganti emoji ke bulan saat dark mode dinonaktifkan
    emoji.style.color = '#fff'; // Ganti warna emoji saat dark mode dinonaktifkan
    footer.style.backgroundColor = ''; // Kembalikan warna latar footer saat dark mode dinonaktifkan
    footerElements.forEach(element => {
        element.style.color = ''; // Kembalikan warna elemen footer saat dark mode dinonaktifkan
    });
}

// Cek apakah dark mode telah diaktifkan atau tidak
const darkModeStatus = localStorage.getItem('dark-mode');
if (darkModeStatus === 'enabled') {
    enableDarkMode();
    darkModeToggle.classList.add('active');
}

// Tambahkan event listener untuk dark mode toggle
darkModeToggle.addEventListener('click', () => {
    if (darkModeToggle.classList.contains('active')) {
        disableDarkMode();
        darkModeToggle.classList.remove('active');
    } else {
        enableDarkMode();
        darkModeToggle.classList.add('active');
    }
});

const backToTopButton = document.getElementById('backToTopButton');

backToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

window.addEventListener('scroll', () => {
    if (window.scrollY > 0) {
        backToTopButton.style.opacity = '1';
        backToTopButton.style.transform = 'translateY(0)';
    } else {
        backToTopButton.style.opacity = '0';
        backToTopButton.style.transform = 'translateY(100%)';
    }
})

// Initialize the book slider carousel
var bookSlider = new bootstrap.Carousel(document.getElementById('bookSlider'), {
    interval: false // Disable automatic sliding
});
