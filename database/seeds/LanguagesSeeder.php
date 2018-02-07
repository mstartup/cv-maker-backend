<?php

use App\Languages;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LanguagesSeeder extends Seeder
{
    public function run()
    {
        Languages::truncate();

        $faker = Faker::create();

        foreach(range(1, 5) as $index) {
            Languages::create([
                'name' => $faker->sentence,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}
