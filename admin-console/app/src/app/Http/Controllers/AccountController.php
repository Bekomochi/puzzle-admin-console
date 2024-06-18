<?php

namespace app\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index(Request $request)
    {
        $title = 'title';
        /*DebugBar::info('abcdefg');
        DebugBar::error('エラー');*/

        //セッションに指定のキーで値を保存
        $request->session()->put('name', 'jobi');
        $request->session()->put('password', 'jobi');

        //セッションから指定のキーを取得
        $value = $request->session()->get('name', 'password');

        //指定したデータをセッションから削除
        //$request->session()->forget('name');

        //セッションの全てのデータを削除
        //$request->session()->flush();

        //テーブルの全てのレコードを取得
        $accounts = Account::All();

        //条件を指定して取得
        //$accounts = Account::where('name', '=', 'Bekomochi' || 'password', '=', 'Kashiwamochi')->get;
    }

    /*public function index(Request $request)
    {
        $title = 'title';
        //idを指定して表示する
        dd($request->account_id); //dd=laravelのデバッグの関数
        return view('accounts/index', ['title' => $title]); //viewに変数を渡す
    }*/
}
