<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            $category = Category::inRandomOrder()->first();
            Product::create([
                'name'          => 'Product'.$i,
                'price'         => $i.'000',
                'stock'         => 10 .$i,
                'category_id'   => $category->id
            ]);
        }
    }
}
