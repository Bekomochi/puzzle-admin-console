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
            'name' => 'ハートスイーツ',
            'effect' => 20,
            'explanation' => 'HPを20回復する'
        ]);
        Item::create([
            'name' => 'おいしいみず',
            'effect' => 30,
            'explanation' => 'HPを30回復する'
        ]);
        Item::create([
            'name' => 'サイコソーダ',
            'effect' => 50,
            'explanation' => 'HPを50回復する'
        ]);
        Item::create([
            'name' => 'ミックスオレ',
            'effect' => 80,
            'explanation' => 'HPを80回復する'
        ]);

        Item::create([
            'name' => 'モーモーミルク',
            'effect' => 100,
            'explanation' => 'HPを100回復する'
        ]);
    }
}
