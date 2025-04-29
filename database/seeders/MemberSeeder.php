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
            'age' => 12,
            'birthplace' => 'Namborn',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Frau',
            'firstname' => 'Jana',
            'lastname' => 'Freytag',
            'email' => 'Jana.Freytag@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '06821 47 70 84',
            'street' => 'Meininger Strasse',
            'house_number' => '54',
            'city' => 'Neunkirchen',
            'postal_code' => '66640 ',
            'birthdate' => '2011-08-20',
            'age' => 13,
            'birthplace' => 'Neunkirchen',
            'gender' => 'W',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Dennis',
            'lastname' => 'Schmid',
            'email' => 'Dennis.Schmid@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '02631 60 52 37',
            'street' => 'Storkower Strasse',
            'house_number' => '80',
            'city' => 'Leutesdorf',
            'postal_code' => '56599',
            'birthdate' => '2008-01-17',
            'age' => 17,
            'birthplace' => 'Leutesdorf',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Lukas ',
            'lastname' => 'Reiniger',
            'email' => 'Lukas.Reiniger@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '0821 65 70 25',
            'street' => 'Sonnenallee',
            'house_number' => '32',
            'city' => 'Augsburg',
            'postal_code' => '86001',
            'birthdate' => '2010-02-26',
            'age' => 15,
            'birthplace' => 'Augsburg',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Jonas',
            'lastname' => 'Kuster',
            'email' => 'Jonas.Kuster@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '089 48 97 36',
            'street' => 'Kurfuerstendamm',
            'house_number' => '18',
            'city' => 'München',
            'postal_code' => '80032',
            'birthdate' => '2013-01-02',
            'age' => 12,
            'birthplace' => 'München',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Matthias',
            'lastname' => 'Bar',
            'email' => 'Matthias.Bar@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '06851 64 34 57',
            'street' => 'Straße der Pariser Kommune',
            'house_number' => '22',
            'city' => 'Köln',
            'postal_code' => '50999',
            'birthdate' => '2008-01-31',
            'age' => 17,
            'birthplace' => 'Köln',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Andreas',
            'lastname' => 'Farber',
            'email' => 'andreas.farber@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '09777 93 65 87',
            'street' => 'Heiligengeistbrücke',
            'house_number' => '59',
            'city' => 'Ostheim',
            'postal_code' => '66640',
            'birthdate' => '2011-09-20',
            'age' => 13,
            'birthplace' => 'Ostheim',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Herr',
            'firstname' => 'Markus',
            'lastname' => 'Kunze',
            'email' => 'Markus.Kunze@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '07229 60 10 80',
            'street' => 'Pasewalker Straße',
            'house_number' => '19',
            'city' => 'Hügelsheim',
            'postal_code' => '76549',
            'birthdate' => '2009-10-20',
            'age' => 15,
            'birthplace' => 'Hügelsheim',
            'gender' => 'M',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Frau',
            'firstname' => 'Nadine ',
            'lastname' => 'Sommer',
            'email' => 'Nadine.Sommer@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '02841 25 28 43',
            'street' => 'Gotzkowskystraße',
            'house_number' => '16',
            'city' => 'Moers',
            'postal_code' => '47445',
            'birthdate' => '2013-01-20',
            'age' => 12,
            'birthplace' => 'Moers',
            'gender' => 'W',
        ]);
        DB::table('members')->insert([
            'salutation' => 'Frau',
            'firstname' => 'Manuela',
            'lastname' => 'Bürger',
            'email' => 'manuela.buerger@feuerwehr-ezelsdorf.de',
            'mobile' => null,
            'phone' => '030 57 72 76',
            'street' => 'Genslerstraße',
            'house_number' => '25',
            'city' => 'Berlin',
            'postal_code' => '66640',
            'birthdate' => '2010-12-08',
            'age' => 14,
            'birthplace' => 'Berlin',
            'gender' => 'W',
        ]);
    }
}
