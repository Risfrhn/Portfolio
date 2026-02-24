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

        // 1. Daftarkan route relatif (Laravel otomatis handle subfolder dari APP_URL)
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 2. Paksa Asset URL ke folder /livewire/ (WAJIB berakhiran slash)
        // Ini memastikan script tag dpt path lengkap & absolute
        config(['livewire.asset_url' => $appUrl . '/livewire/']);
    }
}
