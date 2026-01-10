<?php

namespace App\Livewire\Page\User;

use Livewire\Component;

class LandingPage extends Component
{
    public function render()
    {
        return view('livewire.page.user.landing-page') ->layout('Base.basePageUser');;
    }
}
