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
        if($cekProject){
            return[
                'data' => [],
                'status' => $cekProject,
                'message' => "Data sudah ada"
            ];
        }else{
            $input['logo_projek'] = $this->manageGambar($input['logo_projek'], null, 'project/'. $input['nama_projek']. '/logo');
            $input['gambar_flyer'] = $this->manageGambar($input['gambar_flyer'], null, 'project/'. $input['nama_projek']. '/flyer');
            $input['gambar'] = $this->manageGambarMultiple($input['gambar'], null, 'project/'. $input['nama_projek']. '/gambar');
            $data = $this->project->create($input);
            return [
                'data'=>$data
            ];   
        }
    }

    public function edit($input, $id){
        $cek = $this->project->find($id);
        if(!$cek){
            return[
                'data' => [],
                'status' => $cek,
                'message' => "Data tidak ditemukan"
            ];
        }

        if($cek->nama_projek != $input['nama_projek']){
            $path_old = 'project/'. $cek->nama_projek;
            $path_new = 'project/'. $input['nama_projek'];
            if(Storage::disk('public')->exists($path_old)){
                Storage::disk('public')->move($path_old, $path_new);
                Storage::disk('public')->deleteDirectory($path_old);
            }
        }

        $input['logo_projek'] = $this->manageGambar($input['logo_projek'], $cek->logo_projek, 'project/'. $input['nama_projek']. '/logo');
        $input['gambar_flyer'] = $this->manageGambar($input['gambar_flyer'], $cek->gambar_flyer, 'project/'. $input['nama_projek']. '/flyer');
        $input['gambar'] = $this->manageGambarMultiple($input['gambar'], 'project/'. $input['nama_projek']. '/gambar');

        $input['gambar_flyer'] = $input['gambar_flyer'] ?? $cek->gambar_flyer;
        $input['logo_projek'] = $input['logo_projek'] ?? $cek->logo_projek;
        $input['gambar'] = $input['gambar'] ?? $cek->gambar;
        $input['nama_projek'] = $input['nama_projek'] ?? $cek->nama_projek;
        $input['deskripsi_projek'] = $input['deskripsi_projek'] ?? $cek->deskripsi_projek;
        $input['perusahaan'] = $input['perusahaan'] ?? $cek->perusahaan;
        $input['tanggal_mulai'] = $input['tanggal_mulai'] ?? $cek->tanggal_mulai;
        $input['tanggal_akhir'] = $input['tanggal_akhir'] ?? $cek->tanggal_akhir;
        $input['posisi'] = $input['posisi'] ?? $cek->posisi;
        $input['tipe_projek'] = $input['tipe_projek'] ?? $cek->tipe_projek;
        $input['kategori'] = $input['kategori'] ?? $cek->kategori;
        $input['alat'] = $input['alat'] ?? $cek->alat;
        $input['fitur'] = $input['fitur'] ?? $cek->fitur;
        $input['harga'] = $input['harga'] ?? $cek->harga;
        $input['link_website'] = $input['link_website'] ?? $cek->link_website;
        $input['link_app'] = $input['link_app'] ?? $cek->link_app;
        $input['link_github'] = $input['link_github'] ?? $cek->link_github;
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
                Storage::disk('public')->delete($fullpath1);
            }
            $fullpath2 = $cek->gambar_flyer ? Storage::disk('public')->path($cek->gambar_flyer) : null;
            if($fullpath2 && file_exists($fullpath2)){
                Storage::disk('public')->delete($fullpath2);
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




    // Private function
    private function manageGambar(&$input, $cek = null, $path){
        $path_save = null;
        $fullpath = null;
        if(isset($input)){
            $fullpath1 = $cek ? Storage::disk('public')->path($cek) : null;
            if($fullpath1 && file_exists($fullpath1)){
                unlink($fullpath1);
            }
            $nama = 'project-'.time().$input->getClientOriginalName();
            $path_save = $input->storeAs($path, $nama, 'public');
            return $path_save;
        }
    }

    private function manageGambarMultiple(&$input, $path){
        if(isset($input) && is_array($input)){
            $path_save = [];
            foreach($input as $index => $file){
                if(is_object($file)) {
                    $nama = 'project-'.time().'-'.$index.'-'.$file->getClientOriginalName();
                    $path_save[] = $file->storeAs($path, $nama, 'public');
                } else {
                    $path_save[] = $file;
                }
            }
            $input = json_encode($path_save);
            $files = Storage::disk('public')->files($path);
            $array_gambar = json_decode($input, true) ?? [];
            foreach($files as $cekData){
                if(!in_array($cekData, $array_gambar)){
                    Storage::disk('public')->delete($cekData);
                }
            }
            return $input;
        }
    }
}
