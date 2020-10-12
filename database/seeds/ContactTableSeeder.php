<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ContactTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact')->insert([
            'header' => 'Get In Touch For Any Kind
            Of Help & Informations',
            'body_text' => 'We’re glad to discuss your organisation’s situation.
            So please contact us via the details below, or enter your request.',
            'address' => 'A&A Tower, Suite # 3/B, 173 Arambagh, Motijheel,
            Dhaka 1000, Bangladesh.',
            'phone' => '+88017 0447 3813, +88017 0550 6918',
            'mail' => 'info@merinasoftbd.com',
        ]);
    }
}
