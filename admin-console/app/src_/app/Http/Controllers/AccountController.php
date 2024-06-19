<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $title = 'title';

        //セッションに指定のキーで値を保存
        $request->session()->put('name', 'jobi');
        $request->session()->put('password', 'jobi');

        //セッションから指定のキーを取得
        $value = $request->session()->get('name', 'password');

        return view('accounts/index', ['title' => $title]); //viewに変数を渡す
    }
}
