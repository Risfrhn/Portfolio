<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class sertifikat extends Model
{
    protected $table = 'sertifikat';
    protected $fillable = [
        'nomor_sertifikat',
        'judul',
        'nama_institusi',
        'tanggal_terbit',
        'tanggal_berlaku',
        'gambar_sertifikat',
        'file_sertifikat',
    ];

    protected $casts = [
        'tanggal_terbit' => 'date',
        'tanggal_berlaku' => 'date',
    ];
}
