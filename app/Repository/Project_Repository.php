<?php

namespace App\Repository;
use App\Models\project;

class Project_Repository
{
    public function getAllDataByType($type = null){
        if ($type) {
            return project::where('tipe_projek', $type)->get();
        }
        return project::all();
    }

    public function create($data){
        return project::create($data);
    }
}
