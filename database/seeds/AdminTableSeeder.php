<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'pike',
            'email' =>'pike@gmail.com',
            'password' => Hash::make('12345678'),
            'confirmpassword' => Hash::make('12345678'),
        ]);
    }
}
