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
        if (config('app.url')) {
            URL::forceRootUrl(config('app.url'));
        }

        $appUrl = rtrim(config('app.url'), '/');

        // 1. Paksa URL script langsung ke file livewire.js (Full URL)
        config(['livewire.asset_url' => $appUrl . '/livewire/livewire.js']);

        // 2. Daftarkan route dengan prefix subfolder eksplisit
        // Ini memastikan data-update-uri di HTML adalah "/app-portfolio/livewire/update"
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/app-portfolio/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/app-portfolio/livewire/livewire.js', $handle);
        });
    }
}
