$(document).ready(function () {
    // Initialiseer de slider
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
        if (theme === 'dark') {
            document.body.classList.add('dark-theme');
            document.body.classList.remove('light-theme');
            iconSun.style.display = 'block';
            iconMoon.style.display = 'none';
        } else {
            document.body.classList.add('light-theme');
            document.body.classList.remove('dark-theme');
            iconSun.style.display = 'none';
            iconMoon.style.display = 'block';
        }
    };

    const savedTheme = localStorage.getItem('theme');
    if (savedTheme) {
        applyTheme(savedTheme);
    } else if (window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches) {
        applyTheme('dark');
    } else {
        applyTheme('light');
    }

    // Schakel tussen thema's en sla de voorkeur op
    themeSwitcher.addEventListener('click', function () {
        if (document.body.classList.contains('dark-theme')) {
            applyTheme('light');
            localStorage.setItem('theme', 'light');
        } else {
            applyTheme('dark');
            localStorage.setItem('theme', 'dark');
        }
    });

    // Luister naar veranderingen in systeemvoorkeuren
    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', event => {
        if (event.matches) {
            applyTheme('dark');
        } else {
            applyTheme('light');
        }
    });

    // Sticky header bij scrollen
    window.addEventListener('scroll', function () {
        const header = document.querySelector('.header');
        if (window.scrollY > 0) {
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }
    });

    // Wissel de toggler-status van de navbar
    document.querySelector('.navbar-toggler').addEventListener('click', function () {
        this.classList.toggle('collapsed');
    });

    $(document).ready(function() {
        $('#search').on('keyup', function() {
            var query = $(this).val();
            console.log(searchUrl);
            $.ajax({
                url: searchUrl,
                type: "GET",
                data: {'search': query},
                success: function(data) {
                    $('#case-results').html(data);
                }
            });
        });
    });
});
