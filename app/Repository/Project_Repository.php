<?php

namespace App\Repository;
use App\Models\project;

class Project_Repository
{
    public function getAllData($type = null, $keyword = null){
        if ($type) {
            return project::where('tipe_projek', $type)->get();
        }
        if ($keyword) {
            return project::where('nama_projek', 'like', "%{$keyword}%")->get();
        }
        if($type != null && $keyword != null){
            return project::where('tipe_projek', $type)->where('nama_projek', 'like', "%{$keyword}%")->get();
        }
        return project::all();
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
        $cek = project::where('nama_projek', $nama)->get();
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
