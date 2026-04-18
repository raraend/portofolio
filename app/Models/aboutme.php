<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class aboutme extends Model
{
     protected $table = 'aboutmes';

    protected $fillable = [
        'name',
        'title',
        'description',
        'photo',
        'email',
        'phone',
        'location',
        'github_url',
        'linkedin_url',
    ];
}
