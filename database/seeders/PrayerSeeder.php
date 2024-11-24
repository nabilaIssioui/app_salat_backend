<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('prayers')->insert([
            [
                'city' => 'Casablanca',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ], [
                'city' => 'jadida',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ], [
                'city' => 'fes',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ], [
                'city' => 'Rabat',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ], [
                'city' => 'meknes',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ], [
                'city' => 'salé',
                'day' => 'Mercredi',
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ],
            // Ajoutez d'autres jours et villes
        ]);
    }

}
