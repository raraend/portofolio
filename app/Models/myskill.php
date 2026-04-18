<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myskill extends Model
{
     protected $table = 'myskills';

    protected $fillable = [
        'name',
        'image',
    ];
}
