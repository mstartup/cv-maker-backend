<?php

use Illuminate\Database\Seeder;

class ProgrammingLanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('programming_languages')->insert([
            'name' => str_random(10),
    });
    }
}
