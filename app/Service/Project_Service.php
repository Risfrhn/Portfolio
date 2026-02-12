<?php

namespace App\Service;
use App\Repository\Project_Repository;
use Illuminate\Support\Facades\Storage;

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
        $path1 = null;
        $path2 = null;
        $cekProject = $this->project->getDataByName($input['nama_projek']);
        if(!$cekProject){
            return[
                'data' => [],
                'status' => $cekProject,
                'message' => "Data sudah ada"
            ];
        }
        if(isset($input['logo_projek'])){
            $nama = 'project-'.time().$input['logo_projek']->getClientOriginalName();
            $path1 = $input['logo_projek']->storeAs('project/'. $input['nama_projek']. '/logo', $nama, 'public');
        }
        if(isset($input['gambar_flyer'])){
            $nama = 'project-'.time().$input['gambar_flyer']->getClientOriginalName();
            $path2 = $input['gambar_flyer']->storeAs('project/'. $input['nama_projek']. '/flyer', $nama, 'public');
        }
        $input['gambar_flyer'] = $path1;
        $input['logo_projek'] = $path2;
        $data = $this->project->create($input);
        return [
            'data'=>$data
        ];
    }

    public function edit($input, $id){
        $cek = $this->project->find($id);
        if($cek){
            if(isset($input['logo_projek'])){
                $fullpath1 = $cek->logo_projek ? Storage::disk('public')->path($cek->logo_projek) : null;
                if($fullpath1 && file_exists($fullpath1)){
                    unlink($fullpath1);
                }
                $nama = 'project-'.time().$input['logo_projek']->getClientOriginalName();
                $path1 = $input['logo_projek']->storeAs('project/'. $input['nama_projek']. '/logo', $nama, 'public');
            }
            if(isset($input['gambar_flyer'])){
                $fullpath2 = $cek->gambar_flyer ? Storage::disk('public')->path($cek->gambar_flyer) : null;
                if($fullpath2 && file_exists($fullpath2)){
                    unlink($fullpath2);
                }
                $nama = 'project-'.time().$input['gambar_flyer']->getClientOriginalName();
                $path2 = $input['gambar_flyer']->storeAs('project/'. $input['nama_projek']. '/flyer', $nama, 'public');
            }
        }
        $input['gambar_flyer'] = $path1;
        $input['logo_projek'] = $path2;
        $data = $this->project->edit($input, $id);
        return [
            'data'=>$data
        ];
    }

    public function delete($id){
        $cek = $this->project->find($id);
        if($cek){
            $fullpath1 = $cek->logo_projek ? Storage::disk('public')->path($cek->logo_projek) : null;
            if($fullpath1 && file_exists($fullpath1)){
                unlink($fullpath1);
            }
            $fullpath2 = $cek->gambar_flyer ? Storage::disk('public')->path($cek->gambar_flyer) : null;
            if($fullpath2 && file_exists($fullpath2)){
                unlink($fullpath2);
            }
            $path = 'project/'. $cek->nama_projek;
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->deleteDirectory($path);
            }
        }
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
