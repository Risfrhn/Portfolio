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

        // 1. Paksa Asset URL ke file JS lengkap dengan prefix subfolder
        // Hasil di HTML: src="/app-portfolio/livewire/livewire.js?id=..."
        config(['livewire.asset_url' => '/app-portfolio/livewire/livewire.js']);

        // 2. Daftarkan route Script (relatif terhadap Laravel root)
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 3. Daftarkan route Update (mengikuti cara Livewire menyusun URL dari asset_url)
        // Hasil di HTML: data-update-uri="/app-portfolio/livewire/livewire.js/update"
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/livewire.js/update', $handle);
        });
    }
}
