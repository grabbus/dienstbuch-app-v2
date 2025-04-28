<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AchievementBadgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('achievement_badges')->insert([
            'name' => 'Wissenstest',
            'level' => 'Bronze (Stufe 1)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Wissenstest',
            'level' => 'Silber (Stufe 2)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Wissenstest',
            'level' => 'Gold (Stufe 3)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Wissenstest',
            'level' => 'Urkunde (Stufe 4)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Jugendflamme',
            'level' => 'Stufe 1',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Jugendflamme',
            'level' => 'Stufe 2',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Jugendflamme',
            'level' => 'Stufe 3',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Bayerische Jugendleistungsprüfung',
            'level' => null,
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsspange der Deutschen Jugendfeuerwehr',
            'level' => null,
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Bronze (Stufe 1)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Silber (Stufe 2)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Gold (Stufe 3)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Gold-Blau (Stufe 4)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Gold-Grün (Stufe 5)',
        ]);
        DB::table('achievement_badges')->insert([
            'name' => 'Leistungsprüfung: Gruppe im Löscheinsatz',
            'level' => 'Gold-Rot (Stufe 6)',
        ]);
    }
}
