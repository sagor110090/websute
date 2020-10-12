<?php

use Illuminate\Database\Seeder;

class schoolTableSeeder extends Seeder
{
    
    public function run()
    {
        DB::table('schools')->insert([
            'name' => 'MerinaSoft',
            'email' => 'developer@merinasoft.com',
            'holidays' => '["fri","sat"]',
        ]);

        // DB::table('departments')->insert([
        //     'department' => 'Web Development',
        // ]);

        // DB::table('positions')->insert([
        //     'position' => 'junior',
        // ]);

        // DB::table('employees')->insert([
        //     'department_id' => 1 ,
        //     'position_id' => 1,
        //     'fname' => 'Mehedi Hasan ',
        //     'lname' => 'Sagor',
        //     'salary' => '25000',
        //     'start_date' => date('Y-m-d'),
        // ]);

        // DB::table('employee_personal_infos')->insert([
        //     'employee_id' => 1,
        //     'email' => 'mehedihasansagor.cse@gmail.com'
        // ]);

        // DB::table('schedules')->insert([
        //     'start_time' => '09:00:00',
        //     'end_time' => '17:00:00',
        //     'starting_date' =>date('Y-m-d'),
        //     'restDay' => '["sat"]',
        //     'employee_id' =>1,
        // ]);
        
    }
}
