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
        return $this->project->getAllDataByType($type)->count();
    }
    
    public function getDataBytype($type)
    {
        $data = $this->project->getAllDataByType($type);
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
}
