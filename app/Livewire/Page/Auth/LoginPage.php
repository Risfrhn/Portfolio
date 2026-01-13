<?php

namespace App\Livewire\Page\Auth;
use Livewire\Component;
use App\Service\Auth_Service;



class LoginPage extends Component
{
    public $email;
    public $password;
    protected $rules = [
        'email'    => 'required|email',
        'password' => 'required|min:6',
    ];
    
    public function login(Auth_Service $authService){
        $validate = $this->validate();
        $result = $authService->authSystem($validate);

        if($result['status'] == false){
            $this->addError($result['field'], $result['message']);
            return;
        }else{
            return redirect()->route('dashboard-admin')->with([
                'message' => $result['message']
            ]);
        }
    }
    public function render()
    {
        return view('livewire.page.auth.login_page', [
            'hideFooter' => true
        ])->layout('layouts.auth');
    }
}
