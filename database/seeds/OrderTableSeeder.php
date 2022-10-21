<?php

use Illuminate\Database\Seeder;
use App\Order;
use App\Product;

class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for($i = 0; $i < 10; $i++){
            $newFaker = new Order();

            $code = rand(100, 999999);
            $newFaker->code = $code;
            $newFaker->shipping_address = $faker->word();

            $newFaker->save();

            for($i = 0; $i < rand(1, 10); $i++){
                $product = Product::whereNotIn('id', $newFaker->products()->pluck('id'))->inRandomOrder()->first();
                $newFaker->products()->attach($product, [
                    'quantity' => rand(1, 3)
                ]);
            }
        }
    }
}
