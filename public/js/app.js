$(document).ready(function(){
    $('.slider-images').slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        arrows: true,
    });
});

document.addEventListener("DOMContentLoaded", function() {
    const themeSwitcher = document.getElementById('theme-switcher');
    const iconSun = document.getElementById('icon-sun');
    const iconMoon = document.getElementById('icon-moon');

    if (localStorage.getItem('theme') === 'dark') {
        document.body.classList.add('dark-theme');
        iconSun.style.display = 'block';
        iconMoon.style.display = 'none';
    } else {
        iconSun.style.display = 'none';
        iconMoon.style.display = 'block';
    }

    themeSwitcher.addEventListener('click', function() {
        document.body.classList.toggle('dark-theme');

        if (document.body.classList.contains('dark-theme')) {
            localStorage.setItem('theme', 'dark');
            iconSun.style.display = 'block';
            iconMoon.style.display = 'none';
        } else {
            localStorage.setItem('theme', 'light');
            iconSun.style.display = 'none';
            iconMoon.style.display = 'block';
        }
    });
});
