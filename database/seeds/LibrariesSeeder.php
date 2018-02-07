<?php

use App\Libraries;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class LibrariesSeeder extends Seeder
{
    public function run()
    {
        Libraries::truncate();

        $faker = Faker::create();

        foreach(range(1, 5) as $index) {
            Libraries::create([
                'name' => $faker->sentence,
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ]);
        }
    }
}
