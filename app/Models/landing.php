<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class landing extends Model
{
    protected $table = 'landing_info';
    protected $fillable = [
        'deskripsi_header',
        'skill_header',
        'CV',
        'deskripsi_tentang',
    ];

    protected $casts = [
        'skill_header'=>'array'
    ];
}
