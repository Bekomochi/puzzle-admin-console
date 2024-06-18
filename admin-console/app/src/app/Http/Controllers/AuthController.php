<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('accounts/loginview'); //viewに変数を渡す
    }

    public function dologin(Request $request) //$requestの中に名前とパスワードの情報が入っている
    {
        if ($request['name'] === 'Bekomochi' && $request['password'] === 'Kashiwamochi') { //nameが'jobi',passwordが'jobi'だったら
            $request->session()->put('login', true);
            return redirect('accounts/index'); //accounts/indexにリダイレクト
        } else {
            return view('accounts/loginview');//不一致だったらログイン画面を表示
        }
    }

    public function logout(Request $request)
    {
        return view('accounts/loginview');
    }

    public function dologout(Request $request)
    {
        $request->session()->flush();
        $request->session()->forget('login');
        return redirect('accounts/login');
    }
}
