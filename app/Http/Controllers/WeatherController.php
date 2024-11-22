<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WeatherController extends Controller
{
    public function show(Request $request)
    {
        // Obtener la ciudad desde el formulario o poner 'London' por defecto
        $city = $request->input('city', 'London');
        
        // URL de la API de OpenWeatherMap (asegurate de tener tu clave API)
        $url = env('OPENWEATHER_URL');
        $apiKey = env('OPENWEATHER_API_KEY');

        // Hacer la solicitud a la API
        $response = Http::get($url, [
            'q' => $city,  // Ciudad
            'appid' => $apiKey,  // Clave de API
            'units' => 'metric',  // Unidades en Celsius
            'lang' => 'es'  // Idioma español
        ]);

        // Verificar si la solicitud fue exitosa
        if ($response->successful()) {
            $weatherData = $response->json();
            return view('index', compact('weatherData'));
        }

        // Si no es exitoso, mostrar un mensaje de error
        return view('index', ['error' => 'No se pudo obtener el clima']);
    }
}
