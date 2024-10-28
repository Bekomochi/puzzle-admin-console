<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RankingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\NoCacheMiddleware;

Route::middleware(NoCacheMiddleware::class)
    ->get('users/{user_id}', [UserController::class, "show"])
    ->name('users.show');

Route::post('users/store', [UserController::class, 'store'])
    ->name('store');

//ランキング更新
Route::post('ranking/store', [RankingController::class, 'store'])
    ->name('store');

//ランキング表示
Route::get('ranking/show/{stage_id}', [RankingController::class, 'show'])
    ->name('ranking.show');
