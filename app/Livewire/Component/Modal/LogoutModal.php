<?php

namespace App\Livewire\Component\Modal;
use App\Service\Auth_Service;
use Livewire\Component;

class LogoutModal extends Component
{

    public function close()
    {
        $this->dispatch('close-modal-logout');
    }

    public function logout(Auth_Service $auth){
        $auth->logout();
        return redirect()->route('landing-page');
    }

    public function render()
    {
        return view('livewire.component.modal.logout-modal');
    }
}
