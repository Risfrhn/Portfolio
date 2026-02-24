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

        // 1. Script (GET) - Paksa ke file .js
        config(['livewire.asset_url' => $appUrl . '/livewire/livewire.js']);

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire/livewire.js', $handle);
        });

        // 2. Update (POST) - Paksa rute POST agar helper route() mengembalikan path lengkap
        // Ini menjawab pertanyaan Anda: POST akan otomatis ke /livewire/update karena kita daftarkan begini
        Livewire::setUpdateRoute(function ($handle) use ($appUrl) {
            return Route::post($appUrl . '/livewire/update', $handle);
        });
    }
}
