$(document).ready(function () {
    // Initialiseer de slider met Slick Carousel
    $('.slider-images').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
    });

    // Functie om te schakelen naar de donkere afbeeldingen
    function switchToDarkImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const darkSrc = img.getAttribute('data-dark-src');
            if (darkSrc) {
                img.setAttribute('src', darkSrc);
            }
        });
    }

    // Functie om terug te schakelen naar de lichte afbeeldingen
    function switchToLightImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const lightSrc = img.getAttribute('data-light-src');
            if (lightSrc) {
                img.setAttribute('src', lightSrc);
            }
        });
    }

    // Initialiseer thema afbeeldingen door `data-light-src` op te slaan
    function initializeImages() {
        document.querySelectorAll('.theme-image').forEach(function (img) {
            const currentSrc = img.getAttribute('src');
            if (!img.getAttribute('data-light-src')) {
                img.setAttribute('data-light-src', currentSrc);
            }
        });
    }

    // Thema-instellingen op basis van opgeslagen voorkeuren
    const themeSwitcher = document.getElementById('theme-switcher');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    const applyTheme = (theme) => {
        document.body.classList.toggle('dark-theme', theme === 'dark');
        document.body.classList.toggle('light-theme', theme === 'light');
        iconSun.style.display = theme === 'dark' ? 'block' : 'none';
        iconMoon.style.display = theme === 'light' ? 'block' : 'none';

        // Wissel de afbeeldingen op basis van het actieve thema
        if (theme === 'dark') {
            switchToDarkImages();
        } else {
            switchToLightImages();
        }
    };

    const initTheme = () => {
        const savedTheme = localStorage.getItem('theme');
        if (savedTheme) {
            applyTheme(savedTheme);
        } else {
            const prefersDarkScheme = window.matchMedia('(prefers-color-scheme: dark)').matches;
            applyTheme(prefersDarkScheme ? 'dark' : 'light');
        }
    };

    themeSwitcher.addEventListener('click', () => {
        const currentTheme = document.body.classList.contains('dark-theme') ? 'light' : 'dark';
        applyTheme(currentTheme);
        localStorage.setItem('theme', currentTheme);
    });

    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', (event) => {
        applyTheme(event.matches ? 'dark' : 'light');
    });

    // Initialiseer de lichte afbeeldingen bij het laden van de pagina
    initializeImages();
    initTheme();

    // Sticky header bij scrollen
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        header.classList.toggle('is-sticky', window.scrollY > 0);
    });

    // Wissel de toggler-status van de navbar
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        this.classList.toggle('collapsed');
    });

    // Zoekfunctionaliteit met AJAX
    $('#search').on('keyup', function () {
        const query = $(this).val();
        if (query.length > 0) {
            $.ajax({
                url: searchUrl,
                type: 'GET',
                data: { search: query },
                success: function (data) {
                    $('#case-results').html(data);
                }
            });
        } else {
            $('#case-results').empty();
        }
    });

    // Verwerking van het nieuwsbriefformulier met AJAX
    $('#newsletterForm').on('submit', function (e) {
        e.preventDefault();

        const messageContainer = $('#newsletter-message');
        messageContainer.html('');

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                messageContainer.html('<div class="alert alert-success">Je bent succesvol ingeschreven voor de nieuwsbrief!</div>');
                $('#newsletter1').val('');

                setTimeout(function () {
                    messageContainer.fadeOut();
                }, 5000);
            },
            error: function () {
                messageContainer.html('<div class="alert alert-danger">Er is een fout opgetreden. Probeer het opnieuw.</div>');

                setTimeout(function () {
                    messageContainer.fadeOut();
                }, 5000);
            }
        });
    });

    // Dropdown functionaliteit voor mobiel
    const dropdownSwitch = document.querySelector('.dropdown-switch');
    const dropdownMenu = document.querySelector('.dropdown-menu');

    dropdownSwitch.addEventListener('click', function (e) {
        const isMobile = window.innerWidth <= 991;
        const isOpen = dropdownMenu.classList.contains('show');

        if (isMobile) {
            e.preventDefault();
            dropdownMenu.classList.toggle('show');
        } else if (isOpen) {
            window.location.href = this.getAttribute('href');
        }
    });

    // Sluit het dropdown-menu als je buiten het menu klikt
    document.addEventListener('click', function (event) {
        if (!dropdownSwitch.contains(event.target) && !dropdownMenu.contains(event.target)) {
            dropdownMenu.classList.remove('show');
        }
    });
});
