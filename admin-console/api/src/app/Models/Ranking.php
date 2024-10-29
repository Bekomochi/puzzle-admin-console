<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Ranking extends Model
{
    //use HasFactory;

    //HasApiTokensトレイトをuseし、UserクラスにAPIトークン関連のメソッドを追加する
    use HasApiTokens;


    protected $guarded = ['id'];
}
