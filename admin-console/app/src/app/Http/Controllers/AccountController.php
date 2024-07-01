<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        //テーブルの全てのレコードを取得
        $accounts = Account::all();
        //dd($accounts);
        return view('accounts/index', ['accounts' => $accounts]);//アカウント一覧を表示;
    }

    //新規登録画面へ遷移
    public function create(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        return view('accounts.create');
    }

    //新規登録処理
    public function store(Request $request)
    {
        //レコードを追加(insert intoで追加)
        Account::create(['name' => $request['name'], 'password' => Hash::make($request['password'])]);
        return redirect()->route('accounts.create_cmp');
    }

    public function create_cmp(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        return redirect()->route('accounts.index');
    }

    //削除確認画面へ遷移
    public function delete(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        return view('accounts.delete');
    }

}

