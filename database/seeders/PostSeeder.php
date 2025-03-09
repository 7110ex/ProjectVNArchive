<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            'title' => 'Test Material1',
            'body' => 'Test Note1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'Test Material2',
            'body' => 'Test Note2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'Test Material3',
            'body' => 'Test Note3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'Test Material4',
            'body' => 'Test Note4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('posts')->insert([
            'title' => 'Test Material5',
            'body' => 'Test Note5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
