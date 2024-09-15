<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalBlogs = Blog::count();

        $blogs = Blog::orderBy('created_at', 'desc')->get();

        $totalVisitors = Visitor::count();

        $recentVisitors = Visitor::orderBy('created_at', 'desc')->limit(10)->get();

        return view('pages.dashboard', compact('totalBlogs', 'blogs', 'totalVisitors', 'recentVisitors'));
    }
}
