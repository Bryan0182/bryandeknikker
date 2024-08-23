const lazyImages = document.querySelectorAll('.lazy-load');

const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0.5
};

const handleIntersection = (entries, observer) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('animate');
            observer.unobserve(entry.target);
        }
    });
};

const observer = new IntersectionObserver(handleIntersection, options);

lazyImages.forEach(image => {
    observer.observe(image);
});

lightbox.option({
    'resizeDuration': 200,
    'wrapAround': true,
    'disableScrolling': true // Hierdoor kan de pagina niet worden gescrold terwijl de afbeelding wordt weergegeven
});

$('.revealedBox').each(function(i){

    var childrenSpan = $(this).children('span').length;

    $(this).addClass('childrenSpan-' + childrenSpan);

    if($(window).scrollTop() + $(window).height() > $(this).offset().top + $(this).outerHeight() ){
        $(this).addClass('revealedBox-in');
    }

});

// JavaScript-code om het schuifeffect toe te voegen aan de ervaringsblokken tijdens het scrollen
window.addEventListener('scroll', function() {
    var experienceBlocks = document.querySelectorAll('.experience-block');

    experienceBlocks.forEach(function(block) {
        var blockPosition = block.getBoundingClientRect().top;
        var windowHeight = window.innerHeight;

        if (blockPosition < windowHeight * 0.75) { // Pas de waarde (0.75) aan als je een andere scrollpositie wilt
            block.classList.add('slide-in');
        } else {
            block.classList.remove('slide-in');
        }
    });
});

