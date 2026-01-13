<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    protected $tabel = 'project';
    protected $fillable = [
        'logo_projek',
        'gambar_flyer',
        'gambar',
        'nama_projek',
        'perusahaan',
        'tanggal_mulai',
        'tanggal_akhir',
        'posisi', 
        'deskripsi_projek',
        'tipe_projek',
        'kategori', 
        'alat',
        'fitur',
        'harga', 15, 2,
        'link_website',
        'link_app',
        'link_github',
    ];

    protected $casts = [
        'gambar'=> 'array',
        'alat'=>'array'
    ];
}
