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
        //ToDo: Remove before live
        DB::table('users')->insert([
            'name' => 'Admin User',
            'email' => 'admin@feuerwehr-ezelsdorf.de',
            'email_verified_at' => now(),
            'password' => Hash::make('htnybHKR3BPbjdMa2-@UBEskxU*!2w'),
        ]);
    }
}
