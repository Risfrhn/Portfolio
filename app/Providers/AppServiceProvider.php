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

        // 1. Route harus relatif terhadap ROOT APLIKASI
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 2. Paksa Asset URL (TANPA akhiran slash)
        // Hasil tag: https://rsfrhn.site/app-portfolio/livewire/livewire.js
        config(['livewire.asset_url' => $appUrl . '/livewire']);
    }
}
