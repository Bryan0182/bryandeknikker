<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;

class SkillsController extends Controller
{
    // Methode om het formulier weer te geven
    public function create()
    {
        return view('pages.skill_create');
    }

    public function store(Request $request)
    {
        // Validatie van de invoer
        $request->validate([
            'name' => 'required|string|max:255',
            'icon_image' => 'nullable|file|mimes:jpeg,png,svg|max:2048', // Validatie voor het bestand
            'description' => 'nullable|string',
            'usage_count' => 'nullable|string|max:255',
            'proficiency' => 'nullable|string|max:255',
            'eager_to_learn' => 'nullable|string|max:255',
            'category' => 'required|in:frontend,backend', // Categorie moet een van deze twee zijn
            'type' => 'required|in:language,framework',   // Type moet een van deze twee zijn
        ]);

        // Sla het logo op in de 'public/output/storage/icons' map
        if ($request->hasFile('icon_image')) {
            $iconImage = $request->file('icon_image');
            $iconImagePath = $iconImage->store('output/storage/icons', 'public');
        } else {
            $iconImagePath = null;
        }

        // Gegevens opslaan in de database
        Skill::create([
            'name' => $request->name,
            'icon' => $iconImagePath, // Sla het pad op in de 'icon' kolom
            'description' => $request->description,
            'usage_count' => $request->usage_count,
            'proficiency' => $request->proficiency,
            'eager_to_learn' => $request->eager_to_learn,
            'category' => $request->category,
            'type' => $request->type,
        ]);

        return redirect()->route('skill_success')->with('success', 'Skill succesvol toegevoegd.');
    }

    public function success()
    {
        return view('pages.skill_success');
    }

    public function showSkills()
    {
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

        return view('pages.skills', compact('frontend', 'backend'));
    }

    public function index()
    {
        return $this->showSkills();
    }
}
