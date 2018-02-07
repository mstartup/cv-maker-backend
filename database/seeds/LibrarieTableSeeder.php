<?php

use Illuminate\Database\Seeder;

class LibrariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('libraries')->insert([
            'name' => str_random(10),
    });
    }
}
