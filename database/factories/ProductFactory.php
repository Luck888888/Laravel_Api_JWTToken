<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;


    public function definition()
    {
        return [
            'title' => $this->faker->words(5, true),
            'description' => $this->faker->paragraph(1),
            'price' => $this->faker->numberBetween(180, 900),
            'quantity' => $this->faker->numberBetween(1, 150),
            'category' => $this->faker->words(3, true),
            'external_id'=>Product::get()->random()->id,
        ];
    }
}
