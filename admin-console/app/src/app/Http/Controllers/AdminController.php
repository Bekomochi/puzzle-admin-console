<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function item(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }

        return view('Admin/itemView');//アイテム一覧を表示
    }

    public function user(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }

        return view('Admin/userView');//プレイヤー一覧を表示
    }

    public function having(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }

        return view('Admin/havingView');//所持プレイヤーを表示
    }
}
