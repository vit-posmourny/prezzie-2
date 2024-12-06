<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wish;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Wishlist;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
     /**
      * Seed the application's database.
      */
     public function run(): void
     {
          User::factory(100)->create()->each(function ($user) {

               Wishlist::factory(2)->create(['user_id' => $user->id])->each(function ($wishlist) {

                    $wishlist->uuid = Str::random(15);
                    $wishlist->save();

                    $wish = Wish::factory(10)->create(['wishlist_id' => $wishlist->id]);
               });
          });
     }
}
