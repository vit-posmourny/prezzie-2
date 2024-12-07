<?php

namespace App\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public $wishlists = [];


    public function mount()
    {
        $this->wishlists = auth()->user()->wishlists;
    }


    public function delete()
    {
        dd('nasrat');
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}
