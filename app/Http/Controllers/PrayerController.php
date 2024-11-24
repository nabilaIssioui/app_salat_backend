<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PrayerController extends Controller


{

   
    private $prayerData = [
        'Casablanca' => [
            'Lundi' => [
                'fajr' => '05:08',
                'shorouk' => '07:00',
                'dhuhr' => '12:30',
                'asr' => '17:07',
                'maghrib' => '19:59',
                'isha' => '21:20',
            ],
            'Mardi' => [
                'fajr' => '05:09',
                'shorouk' => '07:01',
                'dhuhr' => '12:31',
                'asr' => '17:08',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ],
            'Mercredi' => [
                'fajr' => '05:10',
                'shorouk' => '07:01',
                'dhuhr' => '12:32',
                'asr' => '17:09',
                'maghrib' => '20:00',
                'isha' => '21:21',
            ],
            'Jeudi' => [
                'fajr' => '05:11',
                'shorouk' => '07:02',
                'dhuhr' => '12:33',
                'asr' => '17:10',
                'maghrib' => '20:01',
                'isha' => '21:22',
            ],
            'Vendredi' => [
                'fajr' => '05:12',
                'shorouk' => '07:03',
                'dhuhr' => '12:34',
                'asr' => '17:11',
                'maghrib' => '20:02',
                'isha' => '21:23',
            ],
            'Samedi' => [
                'fajr' => '05:13',
                'shorouk' => '07:04',
                'dhuhr' => '12:35',
                'asr' => '17:12',
                'maghrib' => '20:03',
                'isha' => '21:24',
            ],
            'Dimanche' => [
                'fajr' => '05:14',
                'shorouk' => '07:05',
                'dhuhr' => '12:36',
                'asr' => '17:13',
                'maghrib' => '20:04',
                'isha' => '21:25',
            ],
        ],
        'Rabat' => [
            'Lundi' => [
                'fajr' => '05:14',
                'shorouk' => '07:04',
                'dhuhr' => '12:35',
                'asr' => '17:12',
                'maghrib' => '20:04',
                'isha' => '21:24',
            ],
            'Mardi' => [
                'fajr' => '05:15',
                'shorouk' => '07:05',
                'dhuhr' => '12:36',
                'asr' => '17:13',
                'maghrib' => '20:05',
                'isha' => '21:25',
            ],
            'Mercredi' => [
                'fajr' => '05:15',
                'shorouk' => '07:05',
                'dhuhr' => '12:36',
                'asr' => '17:13',
                'maghrib' => '20:05',
                'isha' => '21:26',
            ],
            'Jeudi' => [
                'fajr' => '05:16',
                'shorouk' => '07:06',
                'dhuhr' => '12:37',
                'asr' => '17:14',
                'maghrib' => '20:06',
                'isha' => '21:27',
            ],
            'Vendredi' => [
                'fajr' => '05:17',
                'shorouk' => '07:07',
                'dhuhr' => '12:38',
                'asr' => '17:15',
                'maghrib' => '20:07',
                'isha' => '21:28',
            ],
            'Samedi' => [
                'fajr' => '05:18',
                'shorouk' => '07:08',
                'dhuhr' => '12:39',
                'asr' => '17:16',
                'maghrib' => '20:08',
                'isha' => '21:29',
            ],
            'Dimanche' => [
                'fajr' => '05:19',
                'shorouk' => '07:09',
                'dhuhr' => '12:40',
                'asr' => '17:17',
                'maghrib' => '20:09',
                'isha' => '21:30',
            ],
        ],
        'Fes' => [
            'Lundi' => [
                'fajr' => '05:18',
                'shorouk' => '07:08',
                'dhuhr' => '12:38',
                'asr' => '17:16',
                'maghrib' => '20:08',
                'isha' => '21:28',
            ],
            'Mardi' => [
                'fajr' => '05:19',
                'shorouk' => '07:09',
                'dhuhr' => '12:39',
                'asr' => '17:17',
                'maghrib' => '20:09',
                'isha' => '21:29',
            ],
            'Mercredi' => [
                'fajr' => '05:20',
                'shorouk' => '07:10',
                'dhuhr' => '12:40',
                'asr' => '17:18',
                'maghrib' => '20:10',
                'isha' => '21:30',
            ],
            'Jeudi' => [
                'fajr' => '05:21',
                'shorouk' => '07:11',
                'dhuhr' => '12:41',
                'asr' => '17:19',
                'maghrib' => '20:11',
                'isha' => '21:31',
            ],
            'Vendredi' => [
                'fajr' => '05:22',
                'shorouk' => '07:12',
                'dhuhr' => '12:42',
                'asr' => '17:20',
                'maghrib' => '20:12',
                'isha' => '21:32',
            ],
            'Samedi' => [
                'fajr' => '05:23',
                'shorouk' => '07:13',
                'dhuhr' => '12:43',
                'asr' => '17:21',
                'maghrib' => '20:13',
                'isha' => '21:33',
            ],
            'Dimanche' => [
                'fajr' => '05:24',
                'shorouk' => '07:14',
                'dhuhr' => '12:44',
                'asr' => '17:22',
                'maghrib' => '20:14',
                'isha' => '21:34',
            ],
        ],
        'Marrakech' => [
            'Lundi' => [
                'fajr' => '05:23',
                'shorouk' => '07:13',
                'dhuhr' => '12:43',
                'asr' => '17:21',
                'maghrib' => '20:13',
                'isha' => '21:33',
            ],
            'Mardi' => [
                'fajr' => '05:24',
                'shorouk' => '07:14',
                'dhuhr' => '12:44',
                'asr' => '17:22',
                'maghrib' => '20:14',
                'isha' => '21:34',
            ],
            'Mercredi' => [
                'fajr' => '05:25',
                'shorouk' => '07:15',
                'dhuhr' => '12:45',
                'asr' => '17:23',
                'maghrib' => '20:15',
                'isha' => '21:35',
            ],
            'Jeudi' => [
                'fajr' => '05:26',
                'shorouk' => '07:16',
                'dhuhr' => '12:46',
                'asr' => '17:24',
                'maghrib' => '20:16',
                'isha' => '21:36',
            ],
            'Vendredi' => [
                'fajr' => '05:27',
                'shorouk' => '07:17',
                'dhuhr' => '12:47',
                'asr' => '17:25',
                'maghrib' => '20:17',
                'isha' => '21:37',
            ],
            'Samedi' => [
                'fajr' => '05:28',
                'shorouk' => '07:18',
                'dhuhr' => '12:48',
                'asr' => '17:26',
                'maghrib' => '20:18',
                'isha' => '21:38',
            ],
            'Dimanche' => [
                'fajr' => '05:29',
                'shorouk' => '07:19',
                'dhuhr' => '12:49',
                'asr' => '17:27',
                'maghrib' => '20:19',
                'isha' => '21:39',
            ],
        ],
    ];




    public function getPrayers()
    {
        return $this->prayerData;
    }

}
