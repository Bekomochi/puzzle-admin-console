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
            'name' => 'オボンのみ',
            'effect' => 50,
            'explanation' => '体力を50回復する'
        ]);
    }
}
