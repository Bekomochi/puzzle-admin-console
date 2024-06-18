<?php

use app\Http\Controllers\AccountController;
use app\Http\Controllers\AdminController;
use app\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

/* Route::post('○○/□□'～);の['○○/□□']はurl
 * formのurl関数に記入する
 */

//ルーティング

//パラメータ付きルーティング
//Route::get('accounts/index/{account_id}', [AccountController::class, 'index']);

//条件指定も全て表示も対応させる
Route::get('auth/index/{account_name?}', [AccountController::class, 'index']);

Route::get('/', function () {
    return view('welcome');
});

//ログイン画面
Route::get('/', [AuthController::class, 'index']);

//ログイン処理
Route::post('auth/dologin', [AuthController::class, 'dologin']);
Route::get('auth/login', [AuthController::class, 'login']);

//ログアウト処理
Route::post('auth/dologout', [AuthController::class, 'dologout']);
Route::get('auth/logout', [AuthController::class, 'logout']);

Route::get('Admin/item', [AdminController::class, 'item']);
Route::get('Admin/player', [AdminController::class, 'player']);
Route::get('Admin/having', [AdminController::class, 'having']);
