<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class PrayerController extends Controller
{
    public function getPrayerTimes(Request $request)
    {
        // Récupérer la latitude et la longitude envoyées par React
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $date = $request->date;

        // Créer un client Guzzle pour faire la requête API
        $client = new Client();

        try {
            // Appeler l'API externe des horaires de prière
            $response = $client->get("https://api.aladhan.com/v1/timings/$date", [
                'query' => [
                    'latitude' => $latitude,
                    'longitude' => $longitude,
                    'method' => 2, // Méthode pour les horaires de prière
                ]
            ]);

            // Convertir la réponse JSON en tableau PHP
            $data = json_decode($response->getBody()->getContents(), true);

            // Retourner les horaires de prière en réponse
            return response()->json($data);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Erreur lors de la récupération des horaires de prière'], 500);
        }
    }
}
