<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mycertification extends Model
{
     protected $table = 'mycertification';

    protected $fillable = [
        'title',
        'image',
        'description',
        'url',
        'year_start',
        'year_end',
    ];
}
