<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use App\Rules\ExactString;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class DashboardController extends Controller
{
    public function index()
    {
        return view('index', [
            "wishlists"=> auth()->user()->wishlists
        ]);
    }

    public function create()
    {
        return view('create-wishlist');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => ['required','min:3', new ExactString],
        ],[
            'title.required' => "Vyplňte prosím pole názvem wishlistu",
            'title.min' => "Nazev je moc kratky"
        ]);

        $wishlist = Wishlist::create([
            'title' => $validated['title'], // nebo $request->title
            'user_id' => $request->user()->id,
            'uuid' => Str::random(15),
        ]);
        
        return to_route('dashboard')->with('success', "Uspěšně uloženo");
    }
}
