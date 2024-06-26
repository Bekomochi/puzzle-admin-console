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
        //テーブルの全てのレコードを取得
        $accounts = Account::all();
        //dd($accounts);
        return view('accounts/index', ['accounts' => $accounts]);//プレイヤー一覧を表示);
    }

    /*public function store(Request $request)
    {
        //レコードを追加(insert intoで追加)
        Account::create(['name' => '', 'password' => '']);
        return redirect()->route('accounts.index');//第一引数でrouteのnameを指定
    }*/

    public function delete(Request $request)
    {
        //ログアウト状態だったらログイン画面へ遷移
        if (!$request->session()->exists('login')) {
            return redirect('auth/login');
        }
        return view('accounts.delete');
    }

    //データベースアクセス・削除
    public function destroy(Request $request)
    {
        //idで検索した後にレコードを削除
        $accounts = Account::findOfFail('id');
        $accounts->delete();
    }
}

