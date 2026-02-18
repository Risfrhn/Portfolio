<?php

namespace App\Repository;
use App\Models\project;

class Project_Repository
{
    public function getAllData($type = null, $keyword = null){
        return project::query()
        ->when($type, fn($q) => $q->where('tipe_projek', $type))
        ->when($keyword, fn($q) => 
            $q->where('nama_projek', 'like', "%{$keyword}%")
        )
        ->latest()
        ->get();
    }

    public function countByType($type)
    {
        return project::where('tipe_projek', $type)->count();
    }

    public function create($data){
        return project::create($data);
    }

    public function edit($data, $id){
        return project::where('id', $id)->update($data);
    }

    public function find($id){
        return project::find($id);
    }
    
    public function getDataByName($nama){
        $cek = project::where('nama_projek', $nama)->exists();
        if($cek){
            return true;
        }else{
            return false;
        }
    }

    public function delete($id){
        return project::where('id', $id)->delete();
    }
}
