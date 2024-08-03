<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});
use App\Http\Controllers\TikTokController;

Route::get('/tiktok/search', [TikTokController::class, 'search'])->name('tiktok.search');
Route::get('/scrap-username', [TikTokController::class, 'scrapTikTokUsername'])->name('tiktok.scrap.username');
Route::get('/load/scrap-username', [TikTokController::class, 'loadScrapTikTokUsername'])->name('tiktok.load.scrap.username');
Route::get('/update/scrap-username', [TikTokController::class, 'updateScrapTikTokUsername'])->name('tiktok.update.scrap.username');
Route::get('/tiktok/detail/{id}', [TikTokController::class, 'detail'])->name('tiktok.detail');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
