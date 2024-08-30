<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    protected $fillable = [
        'title', 'intro_text', 'website_url', 'logo_image', 'fact1_title', 'fact1_description',
        'fact2_title', 'fact2_description', 'fact3_title', 'fact3_description', 'challenge_title',
        'challenge_description', 'approach_title', 'approach_description', 'slider_images', 'results_title',
        'results_description', 'slug'
    ];

    // Mutator for the slug
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
