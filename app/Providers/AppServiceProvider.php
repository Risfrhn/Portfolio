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

        // Gunakan logika 'if' (pemisahan) agar POST tidak terganggu ekstensi .js
        // Script akan terload dari /livewire-js
        // Update akan terkirim ke /livewire-js/update
        config(['livewire.asset_url' => $appUrl . '/livewire-js']);

        Livewire::setScriptRoute(function ($handle) {
            return Route::get('/livewire-js', $handle);
        });

        Livewire::setUpdateRoute(function ($handle) {
            return Route::post('/livewire-js/update', $handle);
        });
    }
}
