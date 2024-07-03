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
Route::post('/support/confirm', [HomeController::class, 'confirm'])
    ->name('home.confirm');
Route::post('/support/register', [HomeController::class, 'register'])
    ->name('home.support.register');
Route::get('/community', [CommunityController::class, 'index'])
    ->name('community.index');
Route::get('/community/create', [CommunityController::class, 'create'])
    ->name('community.create');
