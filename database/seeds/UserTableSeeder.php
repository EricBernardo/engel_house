<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Eric Bernardo',
            'email' => 'eric.bernardo.sousa@gmail.com',
            'password' => Hash::make('96265851'),
            'remember_token' => now(),
            'created_at' => now()
        ]);
    }
}
