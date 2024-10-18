<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Toon de algemene dienstenpagina.
     */
    public function showServices()
    {
        return view('pages.services');
    }

    /**
     * Toon de pagina voor 'Website laten maken'.
     */
    public function showWebsiteService()
    {
        return view('pages.services-web');
    }

    /**
     * Toon de pagina voor 'Applicatie laten maken'.
     */
    public function showAppService()
    {
        return view('pages.services-app');
    }

    /**
     * Toon de pagina voor 'Design diensten'.
     */
    public function showDesignService()
    {
        return view('pages.services-design');
    }

    /**
     * Toon de pagina voor 'SEO werkzaamheden'.
     */
    public function showSeoService()
    {
        return view('pages.services-seo');
    }

    /**
     * Toon de pagina voor 'Social Media werkzaamheden'.
     */
    public function showSocialService()
    {
        return view('pages.services-social');
    }
}
