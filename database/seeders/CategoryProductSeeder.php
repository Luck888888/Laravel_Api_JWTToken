<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class CategoryProductSeeder extends Seeder
{

    public function run()
    {
     $categories = Category::factory()
            ->count(10)
            ->create();
      $products = Product::factory()
            ->count(10)
            ->create();
//чтобы заполнить третью таблицу не работает
//      foreach ($categories as $category){
//          $productid = $products->random(8)->pluck('id');
//          $category->$products()->attach($productid);
//      }
    }
}
