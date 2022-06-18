<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\News;
use App\Models\User;
use App\Models\Service;
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
        $this->call([
            ProductSeeder::class,
        ]);
        User::factory(1)->create();
        News::factory(10)->create();
        Blog::factory(10)->create();
        Service::factory(8)->create();

        
    }
}
