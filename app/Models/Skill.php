<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'icon',
        'description',
        'usage_count',
        'proficiency',
        'eager_to_learn',
        'category',
        'type',
    ];
}
