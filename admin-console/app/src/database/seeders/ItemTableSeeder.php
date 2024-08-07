<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Item::create([
            'name' => '猫じゃらし',
            'explanation' => '中央を横一列にピースを消去'
        ]);
        Item::create([
            'name' => 'マウス',
            'explanation' => 'ジグザグにピースを消去'
        ]);
        Item::create([
            'name' => 'レーザーポインター',
            'explanation' => '縦一列にピースを消去'
        ]);
    }
}
