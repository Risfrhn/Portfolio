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
        if(isset($input['gambar']) && is_array($input['gambar'])){
            $paths = [];
            foreach($input['gambar'] as $index => $file){
                if(is_object($file)) {
                    $nama = 'project-'.time().'-'.$index.'-'.$file->getClientOriginalName();
                    $paths[] = $file->storeAs(
                        'project/'.$input['nama_projek'].'/gambar',
                        $nama,
                        'public'
                    );
                } else {
                    $paths[] = $file;
                }
            }
            $input['gambar'] = json_encode($paths);
        }
        $input['gambar_flyer'] = $path2;
        $input['logo_projek'] = $path1;
        $data = $this->project->create($input);
        return [
            'data'=>$data
        ];
    }

    public function edit($input, $id){
        $cek = $this->project->find($id);
        $path1 = null;
        $path2 = null;
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
            if(isset($input['gambar']) && is_array($input['gambar'])){
                $paths = [];
                foreach($input['gambar'] as $index => $file){
                    if(is_object($file)) {
                        $nama = 'project-'.time().'-'.$index.'-'.$file->getClientOriginalName();
                        $paths[] = $file->storeAs(
                            'project/'.$input['nama_projek'].'/gambar',
                            $nama,
                            'public'
                        );
                    } else {
                        $paths[] = $file;
                    }
                }
                $input['gambar'] = json_encode($paths);
            }
        }

        // Delete gambar yang tidak ada di array
        $files = Storage::disk('public')->files('project/'.$input['nama_projek'].'/gambar');
        $array_gambar = json_decode($input['gambar'], true) ?? [];
        foreach($files as $cekData){
            if(!in_array($cekData, $array_gambar)){
                Storage::disk('public')->delete($cekData);
            }
        }
        $input['gambar_flyer'] = $path2 ?? $cek->gambar_flyer;
        $input['logo_projek'] = $path1 ?? $cek->logo_projek;
        $input['gambar'] = $paths ?? $cek->gambar;
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
