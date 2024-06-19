<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /*public function index(Request $request)
    {
        $title = 'title';
        /*DebugBar::info('abcdefg');
        DebugBar::error('エラー');

        //セッションに指定のキーで値を保存
        $request->session()->put('name', 'jobi');
        $request->session()->put('password', 'jobi');

        //セッションから指定のキーを取得
        $value = $request->session()->get('name', 'password');

        //指定したデータをセッションから削除
        //$request->session()->forget('name');

        //セッションの全てのデータを削除
        //$request->session()->flush();

        return view('accounts/index', ['title' => $title]); //viewに変数を渡す
    }*/

    public function login(Request $request)
    {
        return view('auth/loginview'); //viewに変数を渡す
    }

    public function dologin(Request $request) //$requestの中に名前とパスワードの情報が入っている
    {
        if ($request['name'] === 'jobi' && $request['password'] === 'jobi') { //nameが'jobi',passwordが'jobi'だったら
            $request->session()->put('auth/login', true);
            return redirect('accounts/index'); //accounts/indexにリダイレクト
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
