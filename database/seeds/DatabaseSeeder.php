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
            'details' => "none",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "Economic",
            'details' => "Economic",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "Education",
            'details' => "Educaiton",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "English",
            'details' => "English",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "Hindi",
            'details' => "Hindi",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "History",
            'details' => "History",
            'type' =>"ba"
        ]);
        DB::table('courses')->insert([
            'name' => "Mizo",
            'details' => "Mizo",
            'type' =>"ba"
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
            'name' => "none",
            'details' => "none",
            'type' =>"compulsory"
        ]);
        DB::table('courses')->insert([
            'name' => "Gen.Eng  ",
            'details' => "General English",
            'type' =>"compulsory"
        ]);

        DB::table('courses')->insert([
            'name' => "EVST",
            'details' => "Environmental Studies",
            'type' =>"compulsory"
        ]);

        
        DB::table('courses')->insert([
            'name' => "MIL(Miz)",
            'details' => "MIL(Miz)",
            'type' =>"compulsory"
        ]);

        DB::table('courses')->insert([
            'name' => "MIL(ALTE.ENG)",
            'details' => "MIL(ALTE.ENG)",
            'type' =>"compulsory"
        ]);

        DB::table('courses')->insert([
            'name' => "MIL(Hin)",
            'details' => "MIL(Hin)",
            'type' =>"compulsory"
        ]);
       
        DB::table('courses')->insert([
            'name' => "Commerce",
            'details' => "Commerce",
            'type' =>"commerce"
        ]);
    }
}
