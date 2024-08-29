<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    public function showRecentBlogs()
    {
        // Pad naar de blogs
        $path = resource_path('views/blogs');

        // Verkrijg alle bestanden in de blogs map
        $files = File::allFiles($path);

        // Debug de bestandsnamen
        dd($files);

        $blogs = [];
        foreach ($files as $file) {
            // Lees de inhoud van het bestand
            $content = File::get($file);

            // Debug de inhoud van het bestand
            // dd($content);

            // Haal de publicatiedatum op met regex
            preg_match('/Gepubliceerd op (\d{4}-\d{2}-\d{2})/', $content, $matches);

            // Als de datum gevonden is, voeg de blog toe aan de lijst
            if (isset($matches[1])) {
                $blogs[] = [
                    'path' => $file->getRelativePathname(),
                    'date' => $matches[1],
                ];
            }
        }

        // Debug de verzamelde blogs
        // dd($blogs);

        // Sorteer blogs op datum (meest recent eerst)
        usort($blogs, function($a, $b) {
            return strtotime($b['date']) - strtotime($a['date']);
        });

        // Neem de 3 recentste blogs
        $recentBlogs = array_slice($blogs, 0, 3);

        // Return de view met de recente blogs
        return view('components.recent_blogs', ['recentBlogs' => $recentBlogs]);
    }
}
