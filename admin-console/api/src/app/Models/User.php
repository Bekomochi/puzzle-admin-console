<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable //トークン認証クラスを継承する
{
    use HasFactory;

    //HasApiTokensトレイトをuseし、UserクラスにAPIトークン関連のメソッドを追加する
    use HasApiTokens;

    protected $guarded = ['id'];
}
