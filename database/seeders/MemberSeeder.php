<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Max',
            'lastname' => 'Mustermann',
            'email' => 'max.mustermann@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '06851 64 34 57',
            'street' => 'Stresemannstraße',
            'house_number' => '48',
            'city' => 'Namborn',
            'postal_code' => '66640 ',
            'birthdate' => '2013-01-20',
            'birthplace' => 'Namborn',
            'gender' => 'M',
        ]);
    }
}
