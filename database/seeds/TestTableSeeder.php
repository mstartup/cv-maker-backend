<?php

use App\Tests;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    public function run()
    {
        Tests::truncate();

        $faker = Faker::create();

        foreach(range(1, 5) as $index) {
            Tests::create([
                'options' => $faker->sentence,
                'testResults' => $faker->sentence,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}

