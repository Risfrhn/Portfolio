<?php

namespace App\Service;
use App\Repository\User_Repository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class Auth_Service
{
    private User_Repository $user;
    public function __construct(User_Repository $user)
    {
        $this->user = $user;
    }

    public function authSystem($input){
        $userCek = $this->user->getUserByEmail($input['email']);
        if(!$userCek){
            return [
                'message' => 'Email tidak ditemukan',
                'field' => 'email',
                'status' => false
            ];
        }

        if(!Hash::check($input['password'], $userCek->password)){
            return [
                'message' => 'Password salah',
                'field' => 'password',
                'status' => false
            ];
        }

        Auth::login($userCek);
        request()->session()->regenerate();
        return [
            'message' => 'Berhasil login system',
            'field' => null,
            'status' => true
        ];
    } 
}
