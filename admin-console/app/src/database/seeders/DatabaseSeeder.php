<?php

namespace Database\Seeders;

use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call(AccountsTableSeeder::class);
        $this->call(ItemTableSeeder::class);
        $this->call(MailTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
