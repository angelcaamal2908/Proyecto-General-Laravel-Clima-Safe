<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Models\Medicamentos;  // Importar el modelo
use App\Models\Computer;  // Importar el modelo

use Faker\Provider\Medical;

Route::get('/', function () {
    return view('index');
});


// routes/web.php

Route::get('/{page}', [PageController::class, 'show'])->name('page.show')
    ->where('page', 'index|ui-elements|tables|forms');

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP

