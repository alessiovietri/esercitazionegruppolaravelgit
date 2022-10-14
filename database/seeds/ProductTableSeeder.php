<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for($i = 0; $i < 1; $i++){
            $newFaker = new Product();

            $newFaker->name = $faker->word();
            $newFaker->slug = $faker->word();
            $newFaker->price = $faker->randomFloat(2,1,100);

            $newFaker->save();
        }
    }
}
