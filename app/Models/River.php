<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class River extends Model
{
    protected $casts = [
        'categories' => 'array'
    ];

    protected $table = 'rivers';
    protected $fillable = ['station', 'r_name', 'r_loc', 'categories'];
}
