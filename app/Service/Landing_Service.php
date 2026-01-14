<?php

namespace App\Service;
use App\Repository\Landing_Repository;

use function Livewire\store;

class Landing_Service
{
    public Landing_Repository $data; 
    public function __construct(Landing_Repository $data)
    {
        $this->data = $data;
    }

    public function updateLanding($request){
        $getData = $this->data->getDataLanding();
        $getData->deskripsi_header = $request['header'] ?? $getData->deskripsi_header;
        $getData->deskripsi_tentang = $request['tentang'] ?? $getData->deskripsi_tentang;
        $getData->skill = $request['skill'] ?? $getData->skill;
        if(isset($request['CV'])){
            $fullpath = $getData->CV ? storage_path('app/public/landing'.$getData->CV) : null;
            if($getData->CV && file_exists($fullpath)){
                unlink($fullpath);
            }
            $nama = 'CV-Muhammad Risky Farhan' . $request['cv']->getClientOriginalName();
            $path = $request['cv']->storeAs('landing/', $nama, 'public');
        }
        $getData->CV = $path ?? $getData->CV;
        $getData->save();
        return[
            'data'=>$getData,
            'message'=>"berhasil mengubah data",
            'status'=>true
        ];
    }
}
