<?php

namespace App\Http\Controllers;

use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Http\Request;

class AdminController
{
    public function item(Request $request)
    {
        return view('Admin/itemView');//アイテム一覧を表示
    }

    public function player(Request $request)
    {
        return view('Admin/playerView');
    }

    public function having(Request $request)
    {
        return view('Admin/havingView');
    }
}
