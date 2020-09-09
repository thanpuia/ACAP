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
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password'),
            'role' => '10',
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        
        DB::table('courses')->insert([
            'name' => "none",
            'details' => "none"
        ]);
        DB::table('courses')->insert([
            'name' => "Economic",
            'details' => "Economic"
        ]);
        DB::table('courses')->insert([
            'name' => "Education",
            'details' => "Educaiton"
        ]);
        DB::table('courses')->insert([
            'name' => "English",
            'details' => "English"
        ]);
        DB::table('courses')->insert([
            'name' => "Hindi",
            'details' => "Hindi"
        ]);
        DB::table('courses')->insert([
            'name' => "History",
            'details' => "History"
        ]);
        DB::table('courses')->insert([
            'name' => "Mizo",
            'details' => "Mizo"
        ]);
        DB::table('courses')->insert([
            'name' => "Political Science",
            'details' => "Political Science"
        ]);
        DB::table('courses')->insert([
            'name' => "Sociology",
            'details' => "Sociology"
        ]);

        DB::table('courses')->insert([
            'name' => "Gen.Eng  ",
            'details' => "General English"
        ]);

        DB::table('courses')->insert([
            'name' => "EVST",
            'details' => "Environmental Studies"
        ]);

        
        DB::table('courses')->insert([
            'name' => "MIL(Miz)",
            'details' => "MIL(Miz)"
        ]);

        DB::table('courses')->insert([
            'name' => "MIL(Eng)",
            'details' => "MIL(Eng)"
        ]);

        DB::table('courses')->insert([
            'name' => "MIL(Hin)",
            'details' => "MIL(Hin)"
        ]);
        DB::table('courses')->insert([
            'name' => "Commerce",
            'details' => "Commerce"
        ]);
    }
}
