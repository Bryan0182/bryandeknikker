<?php

return [
    /*
     * The generators for the sitemap.
     * Only generators inside this array will be registered.
     */
    'generators' => [
        \Spatie\Sitemap\Tags\Url::class,
        \Spatie\Sitemap\Tags\Sitemap::class,
    ],

    /*
     * Here you can specify a custom class that should be used to fetch
     * the urls that should be in the sitemap.
     */
    'model' => Spatie\Sitemap\Tags\Url::class,

    /*
     * When enabled, a sitemap will be pinged to search engines automatically after sitemap generation.
     */
    'ping' => true,

    /*
     * Add sitemap files to this array which should be generated
     * Array values should be 'filename' => 'url'
     */
    'add' => [
        public_path('sitemap.xml') => env('APP_URL') . '/sitemap.xml',
    ],

    /*
     * The maximum amount of urls in a sitemap.
     * If this limit is reached a new sitemap will be created.
     */
    'maxUrls' => 50000,

    /*
     * The maximum amount of sitemaps.
     * If this limit is reached a new sitemap index file will be created.
     */
    'maxSitemaps' => 50,
];
