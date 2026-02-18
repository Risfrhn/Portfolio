<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class experience extends Model
{
    protected $table = 'experiences';
    protected $fillable = [
        'posisi',
        'perusahaan',
        'tipe_pekerjaan',
        'tanggal_mulai',
        'tanggal_akhir',
        'deskripsi',
        'pencapaian',
        'teknologi', 
        'logo',
        'flyer',
        'gambar',
        'link_app',
        'link_website'
    ];

    protected $casts = [
        'gambar'=> 'array',
        'teknologi'=>'array'
    ];
}
