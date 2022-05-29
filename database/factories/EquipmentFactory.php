<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->jobTitle(),
            'quantity'=>10,
            'price'=>$this->faker->randomFloat(2,1,100),
            'description'=>$this->faker->paragraph(7),
            'tags'=>'equipment, quality, best'
        ];
    }
}
