<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/* Route::post('○○/□□'～);の['○○/□□']はurl
 * formのurl関数に記入する
 */

/*ルーティング

//パラメータ付きルーティング
//Route::get('accounts/index/{account_id}', [AccountController::class, 'index']);

//条件指定も全て表示も対応させる
//Route::get('auth/index/{account_name?}', [AccountController::class, 'index']);*/

Route::get('/', [AuthController::class, 'login']);

Route::get('auth/login', [AuthController::class, 'login']);
Route::post('auth/dologin', [AuthController::class, 'dologin']);

Route::get('accounts/index', [AccountController::class, 'index']);

Route::get('auth/logout', [AuthController::class, 'logout']);
Route::post('auth/dologout', [AuthController::class, 'dologout']);

Route::get('admin/item', [AdminController::class, 'item']);
Route::get('admin/user', [AdminController::class, 'user']);
Route::get('admin/having', [AdminController::class, 'having']);
