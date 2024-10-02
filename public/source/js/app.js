$(document).ready(function () {
    // Initialiseer de slider met Slick Carousel
    $('.slider-images').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
    });

    // Thema-instellingen op basis van opgeslagen voorkeuren
    const themeSwitcher = document.getElementById('theme-switcher');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    const applyTheme = (theme) => {
        document.body.classList.toggle('dark-theme', theme === 'dark');
        document.body.classList.toggle('light-theme', theme === 'light');
        iconSun.style.display = theme === 'dark' ? 'block' : 'none';
        iconMoon.style.display = theme === 'light' ? 'block' : 'none';
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
        if (query.length > 0) { // Voorkom onnodige verzoeken bij een lege zoekopdracht
            $.ajax({
                url: searchUrl,
                type: 'GET',
                data: { search: query },
                success: function (data) {
                    $('#case-results').html(data);
                }
            });
        } else {
            $('#case-results').empty(); // Leeg de resultaten bij een lege zoekopdracht
        }
    });

    // Verwerking van het nieuwsbriefformulier met AJAX
    $('#newsletterForm').on('submit', function (e) {
        e.preventDefault();

        const messageContainer = $('#newsletter-message');
        messageContainer.html('');  // Leeg de container bij elke nieuwe poging

        $.ajax({
            url: $(this).attr('action'),
            method: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                // Toon een succesbericht
                messageContainer.html('<div class="alert alert-success">Je bent succesvol ingeschreven voor de nieuwsbrief!</div>');
                $('#newsletter1').val('');  // Leeg het inputveld

                // Verberg het bericht na 5 seconden
                setTimeout(function () {
                    messageContainer.fadeOut();
                }, 5000);
            },
            error: function () {
                // Toon een foutmelding
                messageContainer.html('<div class="alert alert-danger">Er is een fout opgetreden. Probeer het opnieuw.</div>');

                // Verberg het bericht na 5 seconden
                setTimeout(function () {
                    messageContainer.fadeOut();
                }, 5000);
            }
        });
    });
});
