<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myproject extends Model
{
    protected $table = 'myprojects';

    protected $fillable = [
        'title',
        'image',
        'description',
        'url',
        'year_start',
        'year_end',
    ];
}
