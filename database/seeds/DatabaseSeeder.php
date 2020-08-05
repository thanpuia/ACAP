<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => "none",
            'details' => "none"
        ]);
        DB::table('courses')->insert([
            'name' => "English",
            'details' => "English"
        ]);
        DB::table('courses')->insert([
            'name' => "Mizo",
            'details' => "Mizo"
        ]);
        DB::table('courses')->insert([
            'name' => "Hindi",
            'details' => "Hindi"
        ]);
        DB::table('courses')->insert([
            'name' => "Education",
            'details' => "Education"
        ]);
        DB::table('courses')->insert([
            'name' => "History",
            'details' => "History"
        ]);
        DB::table('courses')->insert([
            'name' => "Sociology",
            'details' => "Sociology"
        ]);
        DB::table('courses')->insert([
            'name' => "Political Science",
            'details' => "Political Science"
        ]);
        DB::table('courses')->insert([
            'name' => "Economics",
            'details' => "Economics"
        ]);
      
    }
}
