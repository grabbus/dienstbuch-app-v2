<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            'name' => 'Administrator',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Jugendwart',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('roles')->insert([
            'name' => 'Ausbilder',
            'guard_name' => 'web',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
