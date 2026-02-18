<?php

namespace App\Repository;
use App\Models\experience;

class Experience_Repository
{
    public function getAllData($type = null, $keyword = null, $posisi = null, $paginate = false, $perPage = 5){
        $query = experience::query()
        ->when($type, fn($q) => $q->where('tipe_pekerjaan', $type))
        ->when($posisi, fn($q) => $q->where('posisi',$posisi))
        ->when($keyword, fn($q) => $q->where('perusahaan','like',"%$keyword%"));

        if($paginate){
            return $query->paginate($perPage);
        }
        return $query->get();
    }

    public function countExperience()
    {
        return experience::where('id')->count();
    }

    public function create($data){
        return experience::create($data);
    }

    public function edit($data, $id){
        return experience::where('id', $id)->update($data);
    }

    public function find($id){
        return experience::find($id);
    }


    public function delete($id){
        return experience::where('id', $id)->delete();
    }
}
