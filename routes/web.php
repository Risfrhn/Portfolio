<?php

use App\Http\Controllers\UserPageController;
use App\Livewire\Page\Auth\LoginPage;
use App\Livewire\Page\User\LandingPage;
use App\Livewire\Page\Admin\Dashboard;
use App\Livewire\Page\Admin\Project;
use App\Livewire\Page\Admin\Experience;
use App\Livewire\Page\Admin\Sertifikat;
use App\Livewire\Page\Admin\Setting;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing-page');
Route::get('/project', App\Livewire\Page\User\Project::class)->name('user.project');
Route::get('/experience', App\Livewire\Page\User\Experience::class)->name('user.experience');
Route::get('/sertifikat', App\Livewire\Page\User\Sertifikat::class)->name('user.sertifikat');

// Detail Pages
Route::get('/project/{id}', App\Livewire\Page\User\ProjectDetail::class)->name('user.project.detail');
Route::get('/experience/{id}', App\Livewire\Page\User\ExperienceDetail::class)->name('user.experience.detail');
Route::get('/sertifikat/{id}', App\Livewire\Page\User\SertifikatDetail::class)->name('user.sertifikat.detail');

// admin
Route::get('/login-page', LoginPage::class)->name('login');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-admin', Dashboard::class)->name('dashboard-admin');
    Route::get('/project-admin', Project::class)->name('project-admin');
    Route::get('/experience-admin', Experience::class)->name('experience-admin');
    Route::get('/sertifikat-admin', Sertifikat::class)->name('sertifikat-admin');
    Route::get('/setting-admin', Setting::class)->name('setting-admin');
});

// Route untuk clear cache di hosting
Route::get('/clear-cache', function() {
    \Illuminate\Support\Facades\Artisan::call('config:clear');
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
    \Illuminate\Support\Facades\Artisan::call('view:clear');
    \Illuminate\Support\Facades\Artisan::call('route:clear');
    return "Cache is cleared";
});

