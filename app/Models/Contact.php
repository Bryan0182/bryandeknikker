<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'naam',
        'emailadres',
        'telefoonnummer',
        'reden_van_contact',
        'onderwerp',
        'bericht',
    ];
}
