<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RankingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\NoCacheMiddleware;


Route::post('users/store', [UserController::class, 'store'])
    ->name('store');

Route::middleware(NoCacheMiddleware::class)
    ->get('users/{user_id}', [UserController::class, "show"])
    ->middleware('auth:sanctum')
    ->name('users.show');

//ランキング更新
Route::post('ranking/store', [RankingController::class, 'store'])
    ->middleware('auth:sanctum')
    ->name('store');

//ランキング表示
Route::get('ranking/show/{stage_id}', [RankingController::class, 'show'])
    ->name('ranking.show');
