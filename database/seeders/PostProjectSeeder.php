<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class PostProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post_project')->insert([
            'project_id' => '1',
            'post_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('post_project')->insert([
            'project_id' => '1',
            'post_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('post_project')->insert([
            'project_id' => '1',
            'post_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('post_project')->insert([
            'project_id' => '2',
            'post_id' => '4',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('post_project')->insert([
            'project_id' => '2',
            'post_id' => '5',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
