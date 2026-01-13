<?php

use App\Http\Controllers\UserPageController;
use App\Livewire\Page\Auth\LoginPage;
use App\Livewire\Page\User\LandingPage;
use App\Livewire\Page\Admin\Dashboard;
use Illuminate\Support\Facades\Route;

Route::get('/', LandingPage::class);
Route::get('/login-page', LoginPage::class);
Route::get('/dashboard-admin', Dashboard::class)->name('dashboard-admin');
