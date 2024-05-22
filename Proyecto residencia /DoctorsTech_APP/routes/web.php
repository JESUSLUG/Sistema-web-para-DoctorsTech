<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\Entrega1Controller;
use App\Http\Controllers\Entrega2Controller;
use App\Http\Controllers\RecepController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//--------------------------------- Rutas

Route::get('/menu', MenuController::class);

//

Route::get('/equipos', [EquiposController::class, 'equipos']);
Route::get('/equiposbd', [EquiposController::class, 'equiposbd']);


Route::get('/clientes', [ClientesController::class, 'clientes']);
Route::get('/clientesbd', [ClientesController::class, 'clientesbd']);


Route::get('/cotizacion', [CotizacionController::class, 'cotizacion']);
Route::get('/cotizacionbd', [CotizacionController::class, 'cotizacionbd']);

Route::get('/viewPDF', [MenuController::class, 'ViewPDF'])->name('pdf');


//Formulario usando el método post 
Route::post('equipos', [EquiposController::class, 'store'])->name('equipos.store');
Route::post('clientes', [ClientesController::class, 'store'])->name('clientes.store');
Route::post('cotizacion', [CotizacionController::class, 'store'])->name('cotizacion.store');

Route::get('/viewPDFcot/{id}', [CotizacionController::class, 'viewPDFcot'])->name('pdfCot');



//------------------------------ RUTAS DE MARIO 


Route::get('/entrega1', Entrega1Controller::class);

Route::get('/entrega2', Entrega2Controller::class);

Route::get('/recep', RecepController::class);