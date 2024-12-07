<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{

    public function delete()
    {
        dd('nasrat');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
