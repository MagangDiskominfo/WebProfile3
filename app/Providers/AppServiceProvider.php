<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Home;

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
        // Ambil logo dari database
        $home = Home::first(); // Atau sesuai dengan ID tertentu
        
        // Share logo ke semua view
        view()->share('home', $home);
    }
}
