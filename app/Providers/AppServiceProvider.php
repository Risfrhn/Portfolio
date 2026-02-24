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
        $livewireHandler = $appUrl . '/livewire-handler';

        // 1. Set Asset URL ke handler khusus (Tanpa .js agar tidak diblokir server)
        // Hasil Script: https://rsfrhn.site/app-portfolio/livewire-handler
        // Hasil Update: https://rsfrhn.site/app-portfolio/livewire-handler/update
        config(['livewire.asset_url' => $livewireHandler]);

        // 2. Daftar Route Script (relatif terhadap app root)
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire-handler', $handle);
        });

        // 3. Daftar Route Update (relatif terhadap app root)
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire-handler/update', $handle);
        });
    }
}
