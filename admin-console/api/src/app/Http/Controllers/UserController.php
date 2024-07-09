<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //

    public function store(Request $request)
    {
        //エラーの時はHTTPステータス400を返す

        $user=User::create([
            'name'=>$request->name,
            'level'=>$request->level
        ]);
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json($user);
    }
}
