<?php

namespace App\Livewire\Component\Alert;

use App\Service\Auth_Service;
use Livewire\Component;

class AlertKonfirmasi extends Component
{
    public $head;
    public $desk;
    public $action;
    public $closeEvent = '';

    public function confirm(Auth_Service $auth)
    {
        if ($this->action === 'logout') {
            $this->dispatch('logout');
        }elseif($this->action === 'delete-project'){
            $this->dispatch('delete-project');
        }elseif($this->action === 'delete-experience'){
            $this->dispatch('delete-experience');
        }
    }

    public function tutupModalDelete()
    {
        $this->dispatch('close-modal-delete');
    }

    public function tutupModalDeleteExperience()
    {
        $this->dispatch('close-modal-delete-experience');
    }



    public function render()
    {
        return view('livewire.component.alert.alert-konfirmasi');
    }
}
