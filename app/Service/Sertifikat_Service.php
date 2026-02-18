<?php

namespace App\Service;
use App\Repository\Sertifikat_Repository;
use Illuminate\Support\Facades\Storage;

class Sertifikat_Service
{
    public Sertifikat_Repository $sertifikat;
    public function __construct(Sertifikat_Repository $sertifikat)
    {
        $this->sertifikat = $sertifikat; 
    }
    
    public function getData($keyword = null)
    {
        $data = $this->sertifikat->getAllData($keyword);
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
        $input['gambar_sertifikat'] = $this->manageGambar($input['gambar_sertifikat'], null, 'sertifikat/'. $input['judul']. '/gambar');
        $input['file_sertifikat'] = $this->manageGambar($input['file_sertifikat'], null, 'sertifikat/'. $input['judul']. '/file');
        $data = $this->sertifikat->create($input);
        return [
            'data'=>$data,
            'message'=>'Data berhasil ditambahkan',
            'status'=>true
        ];
    }

    public function delete($id){
        $cek = $this->sertifikat->find($id);
        if($cek){
            $fullpath1 = $cek->gambar_sertifikat ? Storage::disk('public')->path($cek->gambar_sertifikat) : null;
            if($fullpath1 && file_exists($fullpath1)){
                Storage::disk('public')->delete($fullpath1);
            }
            $fullpath2 = $cek->file_sertifikat ? Storage::disk('public')->path($cek->file_sertifikat) : null;
            if($fullpath2 && file_exists($fullpath2)){
                Storage::disk('public')->delete($fullpath2);
            }
            $path = 'sertifikat/'. $cek->judul;
            if(Storage::disk('public')->exists($path)){
                Storage::disk('public')->deleteDirectory($path);
            }
        }
        $data = $this->sertifikat->delete($id);
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

    public function edit($input, $id){
        $cek = $this->sertifikat->find($id);
        if(!$cek){
            return[
                'data' => [],
                'status' => $cek,
                'message' => "Data tidak ditemukan"
            ];
        }

        if($cek->judul != $input['judul']){
            $path_old = 'sertifikat/'. $cek->judul;
            $path_new = 'sertifikat/'. $input['judul'];
            if(Storage::disk('public')->exists($path_old)){
                Storage::disk('public')->move($path_old, $path_new);
                Storage::disk('public')->deleteDirectory($path_old);
            }
        }
        $input['gambar_sertifikat'] = $this->manageGambar($input['gambar_sertifikat'], $cek->gambar_sertifikat, 'sertifikat/'. $input['judul']. '/gambar');
        $input['file_sertifikat'] = $this->manageGambar($input['file_sertifikat'], $cek->file_sertifikat, 'sertifikat/'. $input['judul']. '/file');

        $input['file_sertifikat'] = $input['file_sertifikat'] ?? $cek->file_sertifikat;
        $input['gambar_sertifikat'] = $input['gambar_sertifikat'] ?? $cek->gambar_sertifikat;
        $input['judul'] = $input['judul'] ?? $cek->judul;
        $input['nama_institusi'] = $input['nama_institusi'] ?? $cek->nama_institusi;
        $input['tanggal_terbit'] = $input['tanggal_terbit'] ?? $cek->tanggal_terbit;
        $input['tanggal_berlaku'] = $input['tanggal_berlaku'] ?? $cek->tanggal_berlaku;
        $input['nomor_sertifikat'] = $input['nomor_sertifikat'] ?? $cek->nomor_sertifikat;
        $data = $this->sertifikat->edit($input, $id);
        return [
            'data'=>$data
        ];
    }

    private function manageGambar(&$input, $cek = null, $path){
        $path_save = null;
        $fullpath = null;
        if(isset($input)){
            $fullpath1 = $cek ? Storage::disk('public')->path($cek) : null;

            if($fullpath1 && file_exists($fullpath1)){
                unlink($fullpath1);
            }
            $nama = 'sertifikat-'.time().$input->getClientOriginalName();
            $path_save = $input->storeAs($path, $nama, 'public');
            return $path_save;
        }
    }
}
