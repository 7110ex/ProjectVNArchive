<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'Test Creator1',
            'email' => 'test.address1@gmail.com',
            'email_verified_at' => new DateTime(),
            'password' => Hash::make('testpass1'),
            'remember_token' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'Test Creator2',
            'email' => 'test.address2@gmail.com',
            'email_verified_at' => new DateTime(),
            'password' => Hash::make('testpass2'),
            'remember_token' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'Test Creator3',
            'email' => 'test.address3@gmail.com',
            'email_verified_at' => new DateTime(),
            'password' => Hash::make('testpass3'),
            'remember_token' => '',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
