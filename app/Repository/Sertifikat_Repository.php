<?php

namespace App\Repository;
use App\Models\sertifikat;

class Sertifikat_Repository
{
    public function getAllData($keyword = null, $paginate = false, $perPage = 5){
        $query = sertifikat::query()
        ->when($keyword, fn($q) => $q->where('judul', 'like', "%{$keyword}%"))
        ->latest();

        if($paginate){
            return $query->paginate($perPage);
        }
        return $query->get();
    }

    public function create($input){
        return sertifikat::create($input);
    }

    public function edit($input, $id){
        return sertifikat::find($id)->update($input);
    }

    public function find($id){
        return sertifikat::find($id);
    }

    public function findBySlug($slug){
        return sertifikat::where('slug', $slug)->first();
    }

    public function delete($id){
        return sertifikat::find($id)->delete();
    }
}
