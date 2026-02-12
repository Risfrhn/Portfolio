<?php

namespace App\Service;
use App\Repository\Project_Repository;

class Project_Service
{
    public Project_Repository $project;
    public function __construct(Project_Repository $project)
    {
        $this->project = $project; 
    }

    public function countDataByType($type) : int
    {
        return $this->project->getAllData($type)->count();
    }
    
    public function getData($type = null, $keyword = null)
    {
        $data = $this->project->getAllData($type, $keyword);
        if($data){
            return[
                'data'=>$data,
                'message'=>'berhasil mendapatkan data',
                'status'=>true
            ];
        }
        return[
            'data'=> [],
            'message'=>'Data tidak tersedia',
            'status'=> false
        ];
    }
    
    public function create($input){
        $data = $this->project->create($input);
        return [
            'data'=>$data
        ];
    }

    public function edit($input, $id){
        $data = $this->project->edit($input, $id);
        return [
            'data'=>$data
        ];
    }

    public function delete($id){
        $data = $this->project->delete($id);
        if($data){
            return[
                'data'=>$data,
                'message'=>'Data berhasil dihapus',
                'status'=>true
            ];
        }
        return[
            'data'=> [],
            'message'=>'Data gagal dihapus',
            'status'=> false
        ];
    }
}
