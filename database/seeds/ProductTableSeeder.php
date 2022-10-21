<?php

use Illuminate\Database\Seeder;
use App\Product;
use App\Category;
use Illuminate\Support\Str;

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

        for($i = 0; $i < 100; $i++){
            $newFaker = new Product();

            $name = $faker->word().' '.rand(1000, 9999);
            $newFaker->name = $name;
            $newFaker->slug = Str::slug($name);
            $newFaker->category_id = Category::inRandomOrder()->first()->id;
            $newFaker->price = $faker->randomFloat(2,1,100);

            $newFaker->save();
        }
    }
}
