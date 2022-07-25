<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'zarif',
            'password' => "Sanad@123",
            'email' => "sanad@gmail.com",
            'phone' => '01942516575',
        ]);
    }
}
