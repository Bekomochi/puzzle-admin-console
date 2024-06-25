<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthMiddleware;
use Illuminate\Support\Facades\Route;

/* Route::post('○○/□□'～);の['○○/□□']はurl
 * formのurl関数に記入する */

//ルーティング

//ログイン画面、ログイン処理
Route::get('auth/login', [AuthController::class, 'login']);//ログイン画面
Route::post('auth/dologin', [AuthController::class, 'dologin']);//ログイン処理

//ログアウト処理
Route::get('auth/logout', [AuthController::class, 'logout']);//ログアウト
Route::post('auth/dologout', [AuthController::class, 'dologout']);//ログアウト処理

//ルートのグループ化
Route::prefix('accounts')->name('accounts')->controller(AccountController::class)
    ->middleware(AuthMiddleware::class)->group(function () {
        //通常時表示画面
        Route::get('/', [AuthController::class, 'login']);

        //一覧表示画面
        Route::get('accounts/index', [AccountController::class, 'index'])->name('accounts.index');

        //新規登録画面、登録処理
        Route::get('accounts/create', [AccountController::class, 'create'])->name('accounts.create');//登録画面
        Route::post('accounts/store', [AccountController::class, 'store'])->name('accounts.store');//登録処理

        //個別記事
        Route::get('admin/item', [AdminController::class, 'item']);//アイテム
        Route::get('admin/user', [AdminController::class, 'user']);//ユーザー
        Route::get('admin/having', [AdminController::class, 'having']);//アイテム所持
    });
