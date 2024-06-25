<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        return view('accounts/index');
    }

    public function store(Request $request)
    {
        //レコードを追加(insert intoで追加)
        Account::create(['name' => 'cucumber', 'password' => 'kyuri']);
        return redirect()->route('accounts.index');//第一引数でrouteのnameを指定
    }
}

