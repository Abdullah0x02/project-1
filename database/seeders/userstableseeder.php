<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//use DB;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class userstableseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // DB::insert('insert into users (name, username,email,password,role) values (Ad,ad,ad@,111,admin)');

       DB::table('users')->insert([
        //for admin
        ['name'=>'Admin','username'=>'admin','email'=>'admin@gmail.com','password'=>Hash::make('111')
        ,'role'=>'admin',],//hash means that the pass in () is encrypted
        //for agent
        ['name'=>'Agent','username'=>'agent','email'=>'agent@gmail.com','password'=>Hash::make('111')
        ,'role'=>'agent',],
        //for user
        ['name'=>'User','username'=>'user','email'=>'user@gmail.com','password'=>Hash::make('111'),
        'role'=>'user',],
           ['name'=>'UserT','username'=>'userT','email'=>'userT@gmail.com','password'=>Hash::make('111'),
               'role'=>'user',],
       ]);
    }
}
