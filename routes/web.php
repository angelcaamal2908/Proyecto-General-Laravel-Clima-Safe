<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WeatherController;
use App\Models\Medicamentos;
use App\Models\Computer;
use Faker\Provider\Medical;

// Ruta para la página principal (home)
Route::get('/', function () {
    return view('index');
});

// Rutas del dashboard
Route::get('/{page}', [PageController::class, 'show'])->name('page.show')
    ->where('page', 'index|ui-elements|tables|forms');

// Ruta para el clima (Weather)
Route::get('/weather', [WeatherController::class, 'show'])->name('weather.show');
