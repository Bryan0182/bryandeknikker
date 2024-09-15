const mix = require('laravel-mix');

mix.sass('public/source/sass/app.scss', 'public/output/css/app.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/hero.scss', 'public/output/css/hero.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/header.scss', 'public/output/css/header.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/footer.scss', 'public/output/css/footer.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/slider.scss', 'public/output/css/slider.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/cta.scss', 'public/output/css/cta.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/fact.scss', 'public/output/css/fact.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/recent_cases.scss', 'public/output/css/recent_cases.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/skills.scss', 'public/output/css/skills.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/text.scss', 'public/output/css/text.min.css')
    .options({
        processCssUrls: false
    });

mix.sass('public/source/sass/login_form.scss', 'public/output/css/login_form.min.css')
    .options({
        processCssUrls: false
    });

mix.js('public/source/js/app.js', 'public/output/js/app.min.js');

mix.copyDirectory('public/source/fonts', 'public/output/fonts');

mix.copyDirectory('public/source/images', 'public/output/images');

mix.copyDirectory('public/source/storage', 'public/output/storage');
