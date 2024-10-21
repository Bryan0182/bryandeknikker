<?php

namespace App\Http\Controllers;

use App\Models\Blog;

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
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.services-web', compact('recentBlogs'));
    }

    /**
     * Toon de pagina voor 'Applicatie laten maken'.
     */
    public function showAppService()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.services-app', compact('recentBlogs'));
    }

    /**
     * Toon de pagina voor 'Design diensten'.
     */
    public function showDesignService()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.services-design', compact('recentBlogs'));
    }

    /**
     * Toon de pagina voor 'SEO werkzaamheden'.
     */
    public function showSeoService()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.services-seo', compact('recentBlogs'));
    }

    /**
     * Toon de pagina voor 'Social Media werkzaamheden'.
     */
    public function showSocialService()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.services-social', compact('recentBlogs'));
    }
}
