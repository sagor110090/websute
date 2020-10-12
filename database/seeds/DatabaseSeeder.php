<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();
        DB::table('objective')->truncate();
        DB::table('contact')->truncate();
        // DB::table('schools')->truncate();
        $this->call([
            UsersTableSeeder::class,
            // schoolTableSeeder::class
            ObjectiveTableSeeder::class,
            ContactTableSeeder::class,
            AboutTableSeeder::class,
            ]);
    }
}
