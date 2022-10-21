<?php

use Illuminate\Database\Seeder;
use App\Category;
use Illuminate\Support\Str;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create('it_IT');

        for($i = 0; $i < 10; $i++){
            $newFaker = new Category();

            $name = $faker->word().' '.rand(1000, 9999);
            $newFaker->name = $name;
            $newFaker->slug = Str::slug($name);

            $newFaker->save();
        }
    }
}
