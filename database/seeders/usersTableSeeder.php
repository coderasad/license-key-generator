<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1', 
            'firstName'=>'MR.',
            'lastName'=>'Admin',
            'mobile'=>'00000000000',
            'email'=>'admin@gmail.com',
            'org'=>'Code Fun',
            'street'=>'Road # 10',            
            'city'=>'Mirpur-Dhaka',
            'password'=>bcrypt('11111111')
        ]);
           
        DB::table('users')->insert([
            'role_id'=>'2',             
            'firstName'=>'MR.',
            'lastName'=>'Asad',
            'mobile'=>'00000000001',
            'email'=>'asad@gmail.com',
            'org'=>'Code Fun',
            'street'=>'Road # 10',            
            'city'=>'Mirpur-Dhaka',
            'password'=>bcrypt('11111111')
        ]);
    }
}
