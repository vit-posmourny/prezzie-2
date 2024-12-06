<?php

namespace App\Providers;

use App\View\Components\LucidePlus;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //Blade::component('lucide-plus', LucidePlus::class);
    }
}