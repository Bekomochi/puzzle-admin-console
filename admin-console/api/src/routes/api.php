<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\NoCacheMiddleware;

Route::middleware(NoCacheMiddleware::class)

    ->get('users/{user_id}',[UserController::class,"show"])
    ->name('users.show');

Route::post('users/store',[UserController::class,'store'])
->name('store');
