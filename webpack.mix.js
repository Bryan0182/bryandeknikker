const mix = require('laravel-mix');

// Compileer en minify SCSS-bestanden vanuit de public map
mix.sass('public/source/sass/app.scss', 'public/output/css/app.min.css')
    .options({
        processCssUrls: false
    });

// Minify JS-bestanden
mix.scripts([
    'public/source/js/app.js',
    // Voeg hier meer JS-bestanden toe als je die wilt combineren en minify'en
], 'public/output/js/all.min.js');

// Kopieer de fonts van de bron naar de doelmap
mix.copyDirectory('public/source/fonts', 'public/output/fonts');

// Kopieer de afbeeldingen van de bron naar de doelmap
mix.copyDirectory('public/source/images', 'public/output/images');

// Kopieer de storage-map van de bron naar de doelmap
mix.copyDirectory('public/source/storage', 'public/output/storage');
