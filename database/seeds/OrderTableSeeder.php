<?php

use App\Order;
use Illuminate\Database\Seeder;

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

            $newFaker->code = $faker->word();
            $newFaker->shipping_address = $faker->word();


            $newFaker->save();
        }
    }
}
