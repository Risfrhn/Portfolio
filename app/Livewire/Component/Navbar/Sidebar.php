<?php

namespace App\Livewire\Component\Navbar;

use Livewire\Component;
use Livewire\Attributes\On;

class Sidebar extends Component
{
    public $showModalLogOut = false;

    public function openModalConfirm()
    {
        $this->showModalLogOut = true;
    }

    #[On('close-modal-logout')]
    public function closeModalConfirm()
    {
        $this->showModalLogOut = false;
    }

    #[On('logout')]
    public function logout(Auth_Service $auth){
        $auth->logout();
        return redirect()->route('landing-page');
    }

    public function render()
    {
        return view('livewire.component.navbar.sidebar');
    }
}
