<?php

namespace app\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function item(Request $request)
    {
        return view('Admin/itemView');//アイテム一覧を表示
    }

    public function player(Request $request)
    {
        return view('Admin/playerView');//プレイヤー一覧を表示
    }

    public function having(Request $request)
    {
        return view('Admin/havingView');//所持プレイヤーを表示
    }
}
