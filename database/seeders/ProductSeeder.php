<?php 

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductSeeder extends Seeder 
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
    
        for($i=1;$i<=20;$i++){
            Product::create([
                 'title'=> 'Game Title '.$i,
                 'quantity'=>10,
                 'price'=>99.99,
                 'description'=>'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'slug'=>'Game '.$i
             ]);
            Product::create([
                 'title'=> 'Equipment Title '.$i,
                 'quantity'=>10,
                 'price'=>99.99,
                 'description'=>'Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
                 'slug'=>'Equipment '.$i
             ]);
        }

    }


    
}