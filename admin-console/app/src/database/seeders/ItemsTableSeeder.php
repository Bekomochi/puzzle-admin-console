<?php

namespace Database\Seeders;

use App\Models\Item;
use App\Models\items;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        items::create([
            'name' => 'ハートスイーツ',
            'effect' => 20,
            'explanation' => 'HPを20回復する'
        ]);

        items::create([
            'name' => 'おいしいみず',
            'effect' => 30,
            'explanation' => 'HPを30回復する'
        ]);

        items::create([
            'name' => 'サイコソーダ',
            'effect' => 50,
            'explanation' => 'HPを50回復する'
        ]);

        items::create([
            'name' => 'ミックスオレ',
            'effect' => 80,
            'explanation' => 'HPを80回復する'
        ]);

        items::create([
            'name' => 'モーモーミルク',
            'effect' => 100,
            'explanation' => 'HPを100回復する'
        ]);
    }
}
