<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Manu',
            'email'=>'manu@gmail.com',
            'phone'=>'7047888654',
            'village'=>'mecheda',
            'password'=>Hash::make("123")
        ]);
    }
}
