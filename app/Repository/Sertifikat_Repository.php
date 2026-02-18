<?php

namespace App\Repository;
use App\Models\sertifikat;

class Sertifikat_Repository
{
    public function getAllData($keyword = null){
        return sertifikat::query()
        ->when($keyword, fn($q) => $q
            ->where('judul', 'like', "%{$keyword}%")
            ->orWhere('nama_institusi', 'like', "%{$keyword}%")
        )
        ->latest()
        ->get();
    }

    public function countByType($type)
    {
        return sertifikat::where('tipe_projek', $type)->count();
    }

    public function create($data){
        return sertifikat::create($data);
    }

    public function edit($data, $id){
        return sertifikat::where('id', $id)->update($data);
    }

    public function find($id){
        return sertifikat::find($id);
    }

    public function delete($id){
        return sertifikat::where('id', $id)->delete();
    }
}
