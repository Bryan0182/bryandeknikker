<?php

namespace App\Http\Controllers;

use Spatie\Sitemap\SitemapGenerator;

class SitemapController extends Controller
{
    public function generate()
    {
        SitemapGenerator::create(config('app.url'))
            ->writeToFile(public_path('sitemap.xml'));

        return response()->view('pages.sitemap');
    }
}
