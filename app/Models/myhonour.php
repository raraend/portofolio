<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myhonour extends Model
{
    protected $table = 'myhonours';

    protected $fillable = [
        'title',
        'image',
        'description',
        'url',
        'year_start',
        'year_end',
    ];
}
