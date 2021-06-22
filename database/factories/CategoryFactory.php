<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    protected $model = Category::class;


    public function definition()
    {
        return [
            'title' => $this->faker->words(3, true),
            'category_id'=>Category::get()->random()->id,
            'external_id'=>Category::get()->random()->id,

        ];
    }
}
