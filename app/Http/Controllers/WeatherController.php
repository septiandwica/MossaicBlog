<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WeatherController extends Controller
{
    public function fetchWeather(Request $request)
    {
        $client = new Client();
        $apiKey = '1ac036f0766c4928bba174434243003'; // Ganti dengan API key Anda
        $latitude = $request->latitude;
        $longitude = $request->longitude;
        $url = "https://api.weatherapi.com/v1/current.json?key={$apiKey}&q={$latitude},{$longitude}";

        try {
            $response = $client->request('GET', $url);
            $data = json_decode($response->getBody()->getContents(), true);
            return response()->json([
                'country' => $data['location']['country'],
                'temperature' => round($data['current']['temp_c']) . '° C',
            ]);
        } catch (\Exception $e) {
            return response()->view('errors.frontend-404', [], 404);
        }
    }
}
