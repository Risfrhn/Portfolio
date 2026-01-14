<?php

namespace App\Service;
use App\Repository\User_Repository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Repository\Landing_Repository;

class Auth_Service
{
    private User_Repository $user;
    public Landing_Repository $landing; 
    public function __construct(User_Repository $user, Landing_Repository $landing)
    {
        $this->user = $user;
        $this->landing = $landing;
    }

    public function authSystem($input){
        $this->landing->getDataLanding();
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
