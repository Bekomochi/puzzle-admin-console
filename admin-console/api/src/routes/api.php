<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\NoCacheMiddleware;

Route::middleware(NoCacheMiddleware::class)
    ->get('users/{user_id}', [UserController::class, "show"])
    ->name('users.show');

Route::post('users/store', [UserController::class, 'store'])
    ->name('store');

/*Route::post('users/store', [UserController::class, 'store'])
    ->middleware('auth:sanctum')->name('store');*/

###

/*Route::middleware(NoCacheMiddleware::class)
    ->get('items/{items_id}', [ItemController::class, "show"])
    ->name('item.show');*/
