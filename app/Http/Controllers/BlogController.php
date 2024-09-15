<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function create()
    {
        return view('pages.case_create');
    }

    public function store(Request $request)
    {
        // Valideer de formulierinvoer
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'intro_text' => 'required|string',
            'website_url' => 'required|url',
            'logo_image' => 'required|image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048',
            'fact1_title' => 'required|string|max:255',
            'fact1_description' => 'required|string',
            'fact2_title' => 'required|string|max:255',
            'fact2_description' => 'required|string',
            'fact3_title' => 'required|string|max:255',
            'fact3_description' => 'required|string',
            'challenge_title' => 'required|string|max:255',
            'challenge_description' => 'required|string',
            'approach_title' => 'required|string|max:255',
            'approach_description' => 'required|string',
            'slider_images.*' => 'nullable|image|mimes:jpg,png,jpeg,gif,webp,svg|max:2048',
            'results_title' => 'required|string|max:255',
            'results_description' => 'required|string',
        ]);

        if ($request->hasFile('logo_image')) {
            $logoImage = $request->file('logo_image');
            $logoImagePath = $logoImage->store('source/storage/logos', 'public');
        } else {
            $logoImagePath = null;
        }

        $sliderImagesPaths = [];
        if ($request->hasFile('slider_images')) {
            foreach ($request->file('slider_images') as $image) {
                $sliderImagePath = $image->store('source/storage/sliders', 'public');
                $sliderImagesPaths[] = $sliderImagePath;
            }
        }

        $blog = Blog::create([
            'title' => $validated['title'],
            'intro_text' => $validated['intro_text'],
            'website_url' => $validated['website_url'],
            'logo_image' => 'storage/' . $logoImagePath,
            'fact1_title' => $validated['fact1_title'],
            'fact1_description' => $validated['fact1_description'],
            'fact2_title' => $validated['fact2_title'],
            'fact2_description' => $validated['fact2_description'],
            'fact3_title' => $validated['fact3_title'],
            'fact3_description' => $validated['fact3_description'],
            'challenge_title' => $validated['challenge_title'],
            'challenge_description' => $validated['challenge_description'],
            'approach_title' => $validated['approach_title'],
            'approach_description' => $validated['approach_description'],
            'slider_images' => json_encode(array_map(function ($path) {
                return 'storage/' . $path;
            }, $sliderImagesPaths)),
            'results_title' => $validated['results_title'],
            'results_description' => $validated['results_description'],
        ]);

        return redirect()->route('pages.case_success')->with('success', 'Blog succesvol aangemaakt!');
    }

    public function success()
    {
        return view('pages.case_success');
    }

    public function showRecentBlogs()
    {
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        return view('pages.recent_cases', ['recentBlogs' => $recentBlogs]);
    }

    public function show($slug)
    {
        $blog = Blog::where('slug', $slug)->firstOrFail();
        $blog->slider_images = json_decode($blog->slider_images, true);

        return view('pages.case_detail', ['blog' => $blog]);
    }
}
