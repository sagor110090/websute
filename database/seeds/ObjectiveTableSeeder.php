<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ObjectiveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('objective')->insert([
            'header' => 'Our Objective',
            'description' => 'Develop web application with Laravel',
            'faq' => 'Ask any Query: 01849609902',
            'image' => 'https://unsplash.com/photos/bXq8pVfP-fY',
        ]);
    }
}
