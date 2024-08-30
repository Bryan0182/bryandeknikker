<?php

namespace App\Http\Controllers;

use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        // Verkrijg de 3 meest recente blogs
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.home', ['recentBlogs' => $recentBlogs]);
    }
}
