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
            'website_url' => 'nullable|url',
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

        // Sla het logo op in de 'public/output/storage/logos' map
        if ($request->hasFile('logo_image')) {
            $logoImage = $request->file('logo_image');
            $logoImagePath = $logoImage->store('output/storage/logos', 'public');
        } else {
            $logoImagePath = null;
        }

        // Sla slider afbeeldingen op in 'public/output/storage/sliders'
        $sliderImagesPaths = [];
        if ($request->hasFile('slider_images')) {
            foreach ($request->file('slider_images') as $image) {
                $sliderImagePath = $image->store('output/storage/sliders', 'public');
                $sliderImagesPaths[] = $sliderImagePath;
            }
        }

        // Maak een nieuwe blog aan met de correcte paden
        $blog = Blog::create([
            'title' => $validated['title'],
            'intro_text' => $validated['intro_text'],
            'website_url' => $validated['website_url'],
            'logo_image' => $logoImagePath ? '/' . $logoImagePath : null,
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
                return '/' . $path;
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

    /**
     * Toon een overzicht van alle cases (blogs).
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $blogs = Blog::orderBy('created_at', 'desc')->get();

        return view('pages.cases', compact('blogs'));
    }

    public function search(Request $request)
    {
        if ($request->ajax()) {
            $query = $request->get('search');

            $cases = Blog::where('title', 'LIKE', "%{$query}%")
                ->orWhere('intro_text', 'LIKE', "%{$query}%")
                ->get();

            $output = view('components.cases', ['blogs' => $cases])->render();

            return response()->json($output);
        }
    }

    public function edit($case_id)
    {
        // Logica om de specifieke blog op te halen met het gegeven ID
        $blog = Blog::find($case_id);

        if (!$blog) {
            // Afhandelen als de blog niet gevonden wordt
            return redirect()->route('pages.case_overview')->with('error', 'Blog niet gevonden.');
        }

        // Toon de bewerkpagina voor de blog
        return view('pages.case_edit', compact('blog'));
    }

    public function destroy($case_id)
    {
        // Haal de blog op met het gegeven ID
        $blog = Blog::find($case_id);

        if (!$blog) {
            // Als de blog niet gevonden wordt, een foutmelding terugsturen
            return redirect()->route('dashboard')->with('error', 'Blog niet gevonden.');
        }

        // Verwijder de blog
        $blog->delete();

        // Redirect terug naar de blogoverzichtspagina met een succesbericht
        return redirect()->route('dashboard')->with('success', 'Blog succesvol verwijderd.');
    }

    public function update(Request $request, Blog $blog)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'intro_text' => 'required|string',
            'website_url' => 'nullable|url',
            'logo_image' => 'nullable|image',
            'fact1_title' => 'required|string',
            'fact1_description' => 'required|string',
            'fact2_title' => 'required|string',
            'fact2_description' => 'required|string',
            'fact3_title' => 'required|string',
            'fact3_description' => 'required|string',
            'challenge_title' => 'required|string',
            'challenge_description' => 'required|string',
            'approach_title' => 'required|string',
            'approach_description' => 'required|string',
            'results_title' => 'required|string',
            'results_description' => 'required|string',
        ]);

        // Update blog data
        $blog->update($validatedData);

        // Opslaan van logo als er een nieuw logo wordt geüpload
        if ($request->hasFile('logo_image')) {
            $logoPath = $request->file('logo_image')->store('logos', 'public');
            $blog->logo_image = $logoPath;
        }

        // Opslaan van slider-afbeeldingen als er nieuwe worden geüpload
        if ($request->hasFile('slider_images')) {
            $sliderImagesPaths = [];
            foreach ($request->file('slider_images') as $image) {
                $sliderImagePath = $image->store('output/storage/sliders', 'public');
                $sliderImagesPaths[] = $sliderImagePath;
            }
            $blog->slider_images = json_encode($sliderImagesPaths);
        }

        // Sla de wijzigingen op
        $blog->save();

        // Redirect met succesbericht
        return redirect()->route('dashboard')->with('success', 'Blog succesvol bijgewerkt.');
    }
}
