<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Models\Medicamentos;  // Importar el modelo
use App\Models\Computer;  // Importar el modelo

use Faker\Provider\Medical;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/option1', [DashboardController::class, 'showOption1'])->name('dashboard.option1');
Route::get('/dashboard/option2', [DashboardController::class, 'showOption2'])->name('dashboard.option2');
Route::get('/dashboard/option3', [DashboardController::class, 'showOption3'])->name('dashboard.option3');
Route::get('/dashboard/option4', [DashboardController::class, 'showOption4'])->name('dashboard.option4');
Route::get('/dashboard/option5', [DashboardController::class, 'showOption5'])->name('dashboard.option5');

// Ruta para insertar un medicamento
Route::get('/insertar-medicamento', function () {
   /* $medicamentos = new Medicamentos;  // Crea una nueva instancia del modelo Medicamento
    $medicamentos->nombre = 'Ibuprofeno';  // Nombre del medicamento
    $medicamentos->presentacion = 'Tabletas';  // Forma de presentación
    $medicamentos->cantidad = 20;  // Cantidad por presentación
    $medicamentos->precio = 50.00;  // Precio del medicamento
    $medicamentos->laboratorio = 'Farmacéutica XYZ';  // Laboratorio fabricante
    $medicamentos->fecha_caducidad = '2025-12-31';  // Fecha de caducidad
    $medicamentos->lote = 'L12345';  // Número de lote
    $medicamentos->descripcion = 'Antiinflamatorio y analgésico';  // Descripción adicional
    $medicamentos->save();  // Guarda el registro en la base de datos
*/

/*
$medicamentos = Medicamentos::find(9);
    return $medicamentos;  // Retorna el medicamento guardado
*/

 //se aplica filtro WHERE y se establece la columna y valor a encontrar
    //la sentencia devuelve el primer resultado que encuentre (FIRST)
/*
    $medicamentos = Medicamentos::where('nombre','Paracetamol')->first();
    return $medicamentos;
*/

/*
$medicamentos = Medicamentos::where('nombre','Paracetamol')->first();
//como ya se tiene "seleccionado" un registro podemos actualizar el valor
//de la columna "model" y posteriormente guardarlo en la base de datos
$medicamentos->nombre = 'Naproxeno';
$medicamentos->save();
return $medicamentos;
*/
/*
$medicamentos = Medicamentos::all();
return $medicamentos;
*/
/*

$medicamentos = Medicamentos::where('id','>=',10)->get();
return $medicamentos;

// También se puede ordenar los resultados con la sentencia ORDER BY para
// que los resultados obtenidos esten en un determinado orden

$medicamentos = Medicamentos::where('id','>=',20)->orderBy('id','desc')->get();
return $medicamentos;

// Las columnas que despliega el resultado puede ser personalizado
// esto es que se pueden establecer las columnas que se tendrían como
// resultado
*/
/*
$medicamentos = Medicamentos::where('id','>=',2)
                        ->select('id','cantidad')
                        ->orderBy('id','desc')
                        ->get();
return $medicamentos;
*/

$medicamentos = Medicamentos::find(9);
   $medicamentos->delete();
});

Route::get('/insertarm', function () {
    // Crear una nueva instancia del modelo Medicamentos
    $medicamento = new Medicamentos;
    $medicamento->nombre = 'Ibuprofeno';  // Nombre del medicamento
    $medicamento->presentacion = 'Tabletas';  // Forma de presentación
    $medicamento->cantidad = 20;  // Cantidad por presentación
    $medicamento->precio = 50.00;  // Precio del medicamento
    $medicamento->laboratorio = 'Farmacéutica XYZ';  // Laboratorio fabricante
    $medicamento->fecha_caducidad = '2025-12-31';  // Fecha de caducidad
    $medicamento->lote = 'L12345';  // Número de lote
    $medicamento->descripcion = 'Antiinflamatorio y analgésico';  // Descripción adicional
    $medicamento->save();  // Guarda el registro en la base de datos

    // Retorna el medicamento insertado
    return $medicamento;
});

Route::get('/compu', function () {
  /*
$computer = new Computer;
$computer->model='Es una computadora demostrativa';
$computer->mark='EcoHero';
$computer->size=14;
$computer->published_at='2024-10-27 13:11:00';
$computer->is_active=true;
$computer->size=14;
$computer->save();
return $computer;
*/
//SE ACCEDE AL VALOR DE published_at
/*
$computer = Computer::find(1);
return $computer->published_at;
*/
//SE ESTABLECE UN FORMATO PARA EL DESPLIEGUE DE FECHA

$computer = Computer::find(1);

//EJEMPLO 1 - despliega la fecha en el formato que le indiquemos
return $computer->published_at->format('d-m-Y');
//EJEMPLO 2 - despliega cuanto tiempo pasó despues de publicado
return $computer->published_at->diffForHumans();

//AHORA NO DARÁ RESULTADO PORQUE LAS ENTRADAS DE format Y DE diffForHumans DEBEN 
//DE SER VALORES TIMESTAMP


});