<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*シーダーでファクトリーを呼び出す。
          数値は、生成するレコード数。*/
        //User::factory(20)->create();

        User::create([
<<<<<<< HEAD
            'name' => 'miura',
=======
            'name' => 'みうら',
>>>>>>> parent of 5fdc68a (ファイルの追加、編集)
            'password' => 'Fennekin'
        ]);
    }
}
