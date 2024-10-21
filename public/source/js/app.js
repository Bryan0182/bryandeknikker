$(document).ready(function () {
    // Initialiseer de slider met Slick Carousel
    $('.slider-images').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
    });

    function switchToDarkImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const darkSrc = img.getAttribute('data-dark-src');
            if (darkSrc) img.setAttribute('src', darkSrc);
        });
    }

    function switchToLightImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const lightSrc = img.getAttribute('data-light-src');
            if (lightSrc) img.setAttribute('src', lightSrc);
        });
    }

    function initializeImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const currentSrc = img.getAttribute('src');
            if (!img.getAttribute('data-light-src')) img.setAttribute('data-light-src', currentSrc);
        });
    }

    const themeSwitcher = document.getElementById('theme-switcher');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    function applyTheme(theme) {
        document.body.classList.toggle('dark-theme', theme === 'dark');
        iconSun.style.display = theme === 'dark' ? 'block' : 'none';
        iconMoon.style.display = theme === 'light' ? 'block' : 'none';
        theme === 'dark' ? switchToDarkImages() : switchToLightImages();
    }

    function initTheme() {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            applyTheme(savedTheme);
        } else {
            const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDarkScheme ? 'dark' : 'light');
        }
    }

    themeSwitcher.addEventListener('click', () => {
        const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
        applyTheme(currentTheme);
        localStorage.setItem('theme', currentTheme);
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        applyTheme(event.matches ? 'dark' : 'light');
    });

    initializeImages();
    initTheme();

    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('is-sticky', window.scrollY > 0);
    });

    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        navbarToggler.classList.add('collapsed');
    });

    navbarCollapse.addEventListener('shown.bs.collapse', function () {
        navbarToggler.classList.remove('collapsed');
    });

    function checkNavbarStatus() {
        if (navbarCollapse.classList.contains('show')) {
            navbarToggler.classList.remove('collapsed');
        } else {
            navbarToggler.classList.add('collapsed');
        }
    }

    checkNavbarStatus();
});
