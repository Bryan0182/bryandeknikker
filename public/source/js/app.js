$(document).ready(function () {
    // Initialiseer de slider met Slick Carousel
    $('.slider-images').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
    });

    // Thema-afbeeldingen wisselen
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

    // Initialiseer thema-afbeeldingen
    function initializeImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const currentSrc = img.getAttribute('src');
            if (!img.getAttribute('data-light-src')) img.setAttribute('data-light-src', currentSrc);
        });
    }

    // Thema-instellingen
    const themeSwitcher = document.getElementById('theme-switcher');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    function applyTheme(theme) {
        document.body.classList.toggle('dark-theme', theme === 'dark');
        iconSun.style.display = theme === 'dark' ? 'block' : 'none';
        iconMoon.style.display = theme === 'light' ? 'block' : 'none';

        // Wissel afbeeldingen op basis van het thema
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

    // Wissel thema bij klik
    themeSwitcher.addEventListener('click', () => {
        const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
        applyTheme(currentTheme);
        localStorage.setItem('theme', currentTheme);
    });

    // Detecteer verandering in voorkeursthema
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        applyTheme(event.matches ? 'dark' : 'light');
    });

    // Initialiseer afbeeldingen en thema
    initializeImages();
    initTheme();

    // Sticky header bij scrollen
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('is-sticky', window.scrollY > 0);
    });
});

$(document).ready(function () {
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.querySelector('.navbar-collapse');

    // Voeg de `collapsed` klasse toe bij het volledig sluiten van het menu
    navbarCollapse.addEventListener('hidden.bs.collapse', function () {
        navbarToggler.classList.add('collapsed');
    });

    // Verwijder de `collapsed` klasse bij het volledig openen van het menu
    navbarCollapse.addEventListener('shown.bs.collapse', function () {
        navbarToggler.classList.remove('collapsed');
    });

    // Zorg ervoor dat bij het laden van de pagina de juiste status wordt weergegeven
    function checkNavbarStatus() {
        if (navbarCollapse.classList.contains('show')) {
            // Menu is open, verwijder de `collapsed`-klasse
            navbarToggler.classList.remove('collapsed');
        } else {
            // Menu is gesloten, voeg de `collapsed`-klasse toe
            navbarToggler.classList.add('collapsed');
        }
    }

    // Controleer de status bij het laden van de pagina
    checkNavbarStatus();
});
