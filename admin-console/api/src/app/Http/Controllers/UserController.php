<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $user = User::create([
            'name' => $request->name
        ]);

        //APIトークンを発行する
        $token = $user->createToken($request->name)->plainTextToken;

        //ユーザーIDとAPIトークンを返す
        return response()->json(['user_id' => $user->id, 'token' => $token]);
        /*↑ createTokenメソッド内で、personal_access_tokensテーブルに登録
        ・トークンとユーザーを関連付ける
        ・personal_access_tokensのトークンはハッシュ化されている
        */
    }

    public function show(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        return response()->json($user);
    }
}
