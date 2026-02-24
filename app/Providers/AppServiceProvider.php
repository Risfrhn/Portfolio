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

        // 1. Set Asset URL ke folder khusus (Livewire akan otomatis tambah /livewire.js dan /update)
        // Hasil: https://rsfrhn.site/app-portfolio/livewire-app/livewire.js
        config(['livewire.asset_url' => $appUrl . '/livewire-app']);

        // 2. Daftar Route Script
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire-app/livewire.js', $handle);
        });

        // 3. Daftar Route Update (PENTING: Tanpa .js di tengah agar POST aman)
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire-app/update', $handle);
        });
    }
}
