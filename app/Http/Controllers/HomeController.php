<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index()
    {
        // Haal de drie meest recente blogs op
        $recentBlogs = Blog::orderBy('created_at', 'desc')->limit(3)->get();

        // Haal alle skills op uit de database
        $skills = Skill::orderBy('name', 'asc')->get();

        // Verdeel de skills in frontend en backend categorieën
        $frontend = [
            'languages' => [],
            'frameworks' => [],
        ];

        $backend = [
            'languages' => [],
            'frameworks' => [],
        ];

        // Groepeer de skills op categorie en type
        foreach ($skills as $skill) {
            if ($skill->category === 'frontend') {
                if ($skill->type === 'language') {
                    $frontend['languages'][] = $skill;
                } elseif ($skill->type === 'framework') {
                    $frontend['frameworks'][] = $skill;
                }
            } elseif ($skill->category === 'backend') {
                if ($skill->type === 'language') {
                    $backend['languages'][] = $skill;
                } elseif ($skill->type === 'framework') {
                    $backend['frameworks'][] = $skill;
                }
            }
        }

        return view('pages.home', compact('recentBlogs', 'frontend', 'backend'));
    }
}
