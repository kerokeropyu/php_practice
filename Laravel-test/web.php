<?php

use App\Http\Controllers\ApiController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\JomotyPostController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::controller(JomotyPostController::class)->name('jomoty_posts.')->group(function () {
//     Route::get('/{title?}/{gender?}/{prefecture?}', 'index')->name('search');
//     Route::get('/', 'index')->name('index');
// });

// APIエンドポイント
Route::get('/api/data', [ApiController::class, 'getData']);

// 画面表示用ルート
Route::get('/cities', [ApiController::class, 'showPage']);