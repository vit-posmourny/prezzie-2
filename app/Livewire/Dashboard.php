<?php

namespace App\Livewire;

use App\Models\Wishlist;
use Livewire\Component;

class Dashboard extends Component
{

    public function delete($id)
    {
        $wishlist =  Wishlist::find($id);
        $wishlist->delete();
        
        return true;
    }
    
    public function render()
    {
        $wishlists = auth()->user()->wishlists;

        return view('livewire.dashboard', ['wishlists' => $wishlists]);
    }
}
