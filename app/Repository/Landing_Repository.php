<?php

namespace App\Repository;
use App\Models\landing;

class Landing_Repository
{
    public function getDataLanding(){
        return landing::first() ?? landing::create([]);
    }    
}
