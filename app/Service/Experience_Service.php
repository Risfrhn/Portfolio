<?php

namespace App\Service;
use App\Repository\Experience_Repository;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class Experience_Service
{
    public Experience_Repository $experience;
    public function __construct(Experience_Repository $experience)
    {
        $this->experience = $experience; 
    }
    
    public function getData($type = null, $keyword = null, $posisi = null, $paginate = false, $perPage = 5)
    {
        $data = $this->experience->getAllData($type, $keyword, $posisi, $paginate, $perPage);
        if($data){
            return[
                'data'=>$data,
                'message'=>'berhasil mendapatkan data',
                'status'=>true
            ];
        }
        return[
            'message'=>'Data tidak tersedia',
            'status'=> false
        ];
    }
    
    public function findBySlug($slug)
    {
        return $this->experience->findBySlug($slug);
    }

    public function find($id)
    {
        return $this->experience->find($id);
    }
    
    public function create($input){
        $path1 = null;
        $path2 = null;
        
        $input['slug'] = Str::slug($input['posisi'] . '-' . $input['perusahaan'] . '-' . time());

        $input['logo'] = $this->manageGambar($input['logo'], null, 'experience/'. $input['perusahaan']. '/logo');
        $input['flyer'] = $this->manageGambar($input['flyer'], null, 'experience/'. $input['perusahaan']. '/flyer');
        $input['gambar'] = $this->manageGambarMultiple($input['gambar'], 'experience/'. $input['perusahaan']. '/gambar');
        $data = $this->experience->create($input);
        return [
            'data'=>$data,
            'message'=>'Data berhasil ditambahkan',
            'status'=>true
        ];
    }

    public function edit($input, $id){
        $cek = $this->experience->find($id);
        if(!$cek){
            return[
                'data' => [],
                'status' => $cek,
                'message' => "Data tidak ditemukan"
            ];
        }

        if($cek->perusahaan != $input['perusahaan'] || $cek->posisi != $input['posisi']){
            $input['slug'] = Str::slug($input['posisi'] . '-' . $input['perusahaan'] . '-' . $id);
        }

        if($cek->perusahaan != $input['perusahaan']){
            $path_old = 'experience/'. $cek->perusahaan;
            $path_new = 'experience/'. $input['perusahaan'];
            if(Storage::disk('public')->exists($path_old)){
                Storage::disk('public')->move($path_old, $path_new);
                Storage::disk('public')->deleteDirectory($path_old);
            }
        }

        $input['logo'] = $this->manageGambar($input['logo'], $cek->logo, 'experience/'. $input['perusahaan']. '/logo');
        $input['flyer'] = $this->manageGambar($input['flyer'], $cek->flyer, 'experience/'. $input['perusahaan']. '/flyer');
        $input['gambar'] = $this->manageGambarMultiple($input['gambar'], 'experience/'. $input['perusahaan']. '/gambar');

        $input['flyer'] = $input['flyer'] ?? $cek->flyer;
        $input['logo'] = $input['logo'] ?? $cek->logo;
        $input['gambar'] = $input['gambar'] ?? $cek->gambar;
        $input['perusahaan'] = $input['perusahaan'] ?? $cek->perusahaan;
        $input['deskripsi'] = $input['deskripsi'] ?? $cek->deskripsi;
        $input['tanggal_mulai'] = $input['tanggal_mulai'] ?? $cek->tanggal_mulai;
        $input['tanggal_akhir'] = $input['tanggal_akhir'] ?? $cek->tanggal_akhir;
        $input['posisi'] = $input['posisi'] ?? $cek->posisi;
        $input['tipe_pekerjaan'] = $input['tipe_pekerjaan'] ?? $cek->tipe_pekerjaan;
        $input['teknologi'] = $input['teknologi'] ?? $cek->teknologi;
        $input['pencapaian'] = $input['pencapaian'] ?? $cek->pencapaian;
        $input['link_website'] = $input['link_website'] ?? $cek->link_website;
        $input['link_app'] = $input['link_app'] ?? $cek->link_app;
        $data = $this->experience->edit($input, $id);
        return [
            'data'=>$data
        ];
    }

    public function delete($id){
        $cek = $this->experience->find($id);
        if($cek){
            $fullpath1 = $cek->logo ? Storage::disk('public')->path($cek->logo) : null;
            if($fullpath1 && file_exists($fullpath1)){
                Storage::disk('public')->delete($fullpath1);
            }
            $fullpath2 = $cek->flyer ? Storage::disk('public')->path($cek->flyer) : null;
            if($fullpath2 && file_exists($fullpath2)){
                Storage::disk('public')->delete($fullpath2);
            }
            $path = 'experience/'. $cek->perusahaan;
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->deleteDirectory($path);
            }
        }
        $data = $this->experience->delete($id);
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
            $nama = 'experience-'.time().$input->getClientOriginalName();
            $path_save = $input->storeAs($path, $nama, 'public');
            return $path_save;
        }
    }

    private function manageGambarMultiple(&$input, $path){
        if(isset($input) && is_array($input)){
            $path_save = [];
            foreach($input as $index => $file){
                if(is_object($file)) {
                    $nama = 'experience-'.time().'-'.$index.'-'.$file->getClientOriginalName();
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
