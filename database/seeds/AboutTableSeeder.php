<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'header' => 'We Are Here To Give
            Quality Software Service
            And Finace Plan',
            'short_description' => 'Update Short Description',
            'description' => 'Update Description Here',
        ]);
    }
}
