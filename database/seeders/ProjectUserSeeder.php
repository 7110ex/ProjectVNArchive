<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;


class ProjectUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('project_user')->insert([
            'project_id' => '1',
            'user_id' => '1',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('project_user')->insert([
            'project_id' => '1',
            'user_id' => '2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('project_user')->insert([
            'project_id' => '2',
            'user_id' => '3',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
