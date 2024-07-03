<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CommunityController;

Route::get('/', [HomeController::class, 'index'])
    ->name('home.index');
Route::get('/dashboard', [HomeController::class, 'dashboard'])
    ->name('home.dashboard');
Route::get('/support', [HomeController::class, 'support'])
    ->name('home.support');
Route::get('/community', [CommunityController::class, 'index'])
    ->name('community.index');
Route::get('/community/create', [CommunityController::class, 'create'])
    ->name('community.create');
