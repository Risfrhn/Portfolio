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

        if (config('app.url')) {
            URL::forceRootUrl(config('app.url'));
        }

        // 1. Daftarkan route secara relatif (Laravel otomatis tambah prefix subfolder)
        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 2. Set asset_url ke null agar Livewire menggunakan helper asset()
        // Helper asset() akan otomatis menggunakan APP_URL (https://rsfrhn.site/app-portfolio)
        config(['livewire.asset_url' => null]);
    }
}
