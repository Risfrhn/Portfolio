<?php

namespace App\Repository;
use App\Models\project;

class Project_Repository
{
    public function getAllData($type = null, $keyword = null, $kategori = null, $posisi = null, $paginate = false, $perPage = 5){
        $query = project::query()
        ->when($type, fn($q) => $q->where('tipe_projek', $type))
        ->when($kategori, fn($q) => $q->where('kategori', $kategori))
        ->when($posisi, fn($q) => $q->where('posisi', $posisi))
        ->when($keyword, fn($q) => 
            $q->where(function($query) use ($keyword){
                $query->where('nama_projek', 'like', "%{$keyword}%")
                      ->orWhere('perusahaan', 'like', "%{$keyword}%");
            })
        )
        ->latest();

        if($paginate){
            return $query->paginate($perPage);
        }
        return $query->get();
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

    public function findBySlug($slug){
        return project::where('slug', $slug)->first();
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
