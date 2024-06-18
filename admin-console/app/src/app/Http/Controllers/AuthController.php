<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        return view('accounts/loginview'); //viewに変数を渡す
    }

    public function dologin(Request $request) //$requestの中に名前とパスワードの情報が入っている
    {
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') { //nameが'jobi',passwordが'jobi'だったら
            $request->session()->put('auth/login', true);
            return redirect('auth/index'); //auth/indexにリダイレクト
        } else {
            return view('auth/loginview');//不一致だったらログイン画面を表示
        }
    }

    public function logout(Request $request)
    {
        return view('auth/loginview');
    }

    public function dologout(Request $request)
    {
        $request->session()->flush();
        $request->session()->forget('login');
        return redirect('auth/login');
    }
}
