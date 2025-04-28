<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Http;

class weatherServices
{
    protected $api_key;
    protected $baseUrl;

    protected $regionCoordinates = [
        'Dar es Salaam' => ['lat' => -6.8235, 'lon' => 39.2695],
        'Arusha' => ['lat' => -3.3869, 'lon' => 36.6830],
        'Mwanza' => ['lat' => -2.5164, 'lon' => 32.9175],
        'Dodoma' => ['lat' => -6.1630, 'lon' => 35.7516],
        'Zanzibar' => ['lat' => -6.1659, 'lon' => 39.2026],
        'Mbeya' => ['lat' => -8.8910, 'lon' => 33.4572],
        'Kilimanjaro' => ['lat' => -3.0670, 'lon' => 37.3556],
        'Tanga' => ['lat' => -5.0730, 'lon' => 39.1030],
        'Mtwara' => ['lat' => -10.3440, 'lon' => 40.1880],
        'Lindi' => ['lat' => -10.0000, 'lon' => 39.5833],
        'Ruvuma' => ['lat' => -10.5833, 'lon' => 35.5833],
        'Iringa' => ['lat' => -7.7491, 'lon' => 35.6930],
        'Shinyanga' => ['lat' => -3.6570, 'lon' => 33.4290],
        'Simiyu' => ['lat' => -3.7000, 'lon' => 34.2000],
        'Geita' => ['lat' => -2.8167, 'lon' => 32.2000],
        'Morogoro' => ['lat' => -6.8217, 'lon' => 37.6594],
        'Kigoma' => ['lat' => -4.8930, 'lon' => 29.6500],
        'Tabora' => ['lat' => -6.6290, 'lon' => 32.4000],
        'Rukwa' => ['lat' => -6.2000, 'lon' => 31.5000],
        'Njombe' => ['lat' => -9.3000, 'lon' => 34.8000],
        'Manyara' => ['lat' => -3.5000, 'lon' => 35.5000],
        'Pemba' => ['lat' => -5.3000, 'lon' => 39.5000],
    ];

    public function __construct()
    {
        $this->baseUrl = env('WEATHER_URL');
        $this->api_key = env('API_KEY'); 
    }

    public function getWeatherByMikoa($region)
    {
        
        if (!isset($this->regionCoordinates[$region])) {
            Log::error("Region coordinates not found for: {$region}");
            return null;
        }

        $coordinates = $this->regionCoordinates[$region];

        try {
            $response = Http::get($this->baseUrl, [
                'lat' => $coordinates['lat'],
                'lon' => $coordinates['lon'],
                'appid' => $this->api_key,
                'units' => 'metric',
                'lang' => 'sw',
            ]);

            if ($response->successful()) {
                $weatherData = $response->json();
                Log::info("Weather data retrieved for {$region}", ['data' => $weatherData]);
                return $weatherData;
            } else {
                Log::error("Failed to fetch weather data: {$response->status()}", ['body' => $response->body()]);
                return null;
            }
        } catch (\Exception $e) {
            Log::error("Exception while fetching weather data: " . $e->getMessage());
            return null;
        }
    }
}
