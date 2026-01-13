<?php

namespace App\Repository;
use App\Models\User;

class User_Repository
{
    public function getUserByEmail($input){
        return User::where('email', $input)->first();
    }
}
