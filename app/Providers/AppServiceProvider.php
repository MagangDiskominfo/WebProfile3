<?php

namespace App\Providers;

use App\Models\Home;
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
        // $home = Home::first();
        // view()->share('home', $home);
    }
}
