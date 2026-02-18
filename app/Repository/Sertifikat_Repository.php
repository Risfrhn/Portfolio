<?php

namespace App\Repository;
use App\Models\sertifikat;

class Sertifikat_Repository
{
    public function getAllData($keyword = null, $paginate = false, $perPage = 5){
        $query = sertifikat::query()
        ->when($keyword, fn($q) => $q
            ->where('judul', 'like', "%{$keyword}%")
            ->orWhere('nama_institusi', 'like', "%{$keyword}%")
        )
        ->latest();

        if($paginate){
            return $query->paginate($perPage);
        }
        return $query->get();
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
