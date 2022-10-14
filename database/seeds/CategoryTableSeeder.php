<?php

use App\Category;
use Illuminate\Database\Seeder;


class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for($i = 0; $i < 10; $i++){
            $newFaker = new Category();

            $newFaker->name = $faker->word();
            $newFaker->slug = $faker->word();
            

            $newFaker->save();
        }
    }
}
