<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
use Livewire\Livewire;

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
        $appUrl = 'https://rsfrhn.site/app-portfolio';
        URL::forceRootUrl($appUrl);

        // 1. Script (GET)
        config(['livewire.asset_url' => $appUrl . '/livewire/livewire.js']);

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 2. Update (POST)
        // Middleware akan memastikan data-update-uri di HTML menunjuk ke sini dengan benar
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });
    }
}
