<?php

namespace Database\Seeders;

use App\Models\Equipment;
use App\Models\Game;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Game::factory(10)->create();
        Equipment::factory(10)->create();
        
    }
}
