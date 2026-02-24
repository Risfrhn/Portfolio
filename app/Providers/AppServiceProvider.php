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
        $appUrl   = config('app.url');
        $subfolder = rtrim(parse_url($appUrl, PHP_URL_PATH) ?? '', '/');

        if (!empty($subfolder)) {
            // Production (subfolder detected): force correct root URL
            URL::forceRootUrl($appUrl);
            config(['livewire.asset_url' => $appUrl . '/livewire/livewire.js']);
        }

        // Register Livewire routes (selalu, agar bisa diakses baik lokal maupun production)
        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire/update', $handle)->middleware('web');
        });
    }
}
