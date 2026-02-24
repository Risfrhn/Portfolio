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

        $prefix = config('livewire.asset_url', '');

        // Paksa Livewire untuk menggunakan route subfolder
        Livewire::setUpdateRoute(function ($handle) use ($prefix) {
            return Route::post($prefix . '/livewire/update', $handle);
        });

        Livewire::setScriptRoute(function ($handle) use ($prefix) {
            return Route::get($prefix . '/livewire/livewire.js', $handle);
        });
    }
}
