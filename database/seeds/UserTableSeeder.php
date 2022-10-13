<?php

use Illuminate\Database\Seeder;
use App\User;

class UserTableSeeder extends Seeder
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
            $newUser = new User();
            $newUser->name = $faker->name;
            $newUser->email = $faker->unique()->safeEmail;
            $newUser->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi'; // password
            $newUser->save();
        }
    }
}
