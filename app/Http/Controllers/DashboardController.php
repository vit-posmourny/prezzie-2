<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
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
        $wishlist = Wishlist::create([
            'title' => $request->title,
            'user_id' => $request->user()->id,
            'uuid' => Str::random(15),
        ]);
        
        return to_route('dashboard')->with('success', "Uspěšně uloženo");
    }
}
