<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function items()
    {
    return $this->belongsToMany(
        items::class,'user_items','user_id,item')->withPivot('smpimt');
    }
}
