<?php

use App\Http\Controllers\UserPageController;
use App\Livewire\Page\Auth\LoginPage;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserPageController::class, 'index'])->name('landing-user');
Route::get('/login-page', LoginPage::class);
