<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Cat;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 1; $i < 100; $i++) {
            $newCat = new Cat();
            $newCat->breed = $faker->unique()->word();
            $newCat->endangered = $faker->boolean();
            $newCat->population = $faker->randomNumber(5, true);
            $newCat->continent = $faker->randomElement(['europe', 'africa', 'north america', 'south america', 'asia', 'australia']);
            $newCat->save();
        }
    }
}
