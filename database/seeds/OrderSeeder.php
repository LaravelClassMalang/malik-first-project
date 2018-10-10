<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\User;
use App\Product;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++){
            $product = Product::inRandomOrder()->first();
            $user = User::inRandomOrder()->first();
            Order::create([
                'user_id'       => $user->id,
                'product_id'    => $product->id
            ]);
        }
    }
}
