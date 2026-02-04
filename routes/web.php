<?php

use App\Http\Controllers\UserPageController;
use App\Livewire\Page\Auth\LoginPage;
use App\Livewire\Page\User\LandingPage;
use App\Livewire\Page\Admin\Dashboard;
use App\Livewire\Page\Admin\Project;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class)->name('landing-page');
Route::get('/login-page', LoginPage::class);
Route::get('/dashboard-admin', Dashboard::class)->name('dashboard-admin');
Route::get('/project-admin', Project::class)->name('dashboard-admin');
