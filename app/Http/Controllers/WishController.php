<?php

namespace App\Http\Controllers;

use App\Models\Wish;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishController extends Controller
{
    public function index(Wishlist $wishlist)
    {
        return view('wishes', ['wishlist' => $wishlist]);
    }

    public function create(Wishlist $wishlist)
    {
        return view('create-wish', ['wishlist' => $wishlist]);
    }

    public function store(Request $request)
    {
        Wish::create([
            'title' => $request->title,
            'url' => $request->url,
            'price' => $request->price,
            'wishlist_id' => $request->wishlist_id,
        ]);

        return to_route('wishes', ['wishlist' => $request->wishlist_id]);
    }
}
