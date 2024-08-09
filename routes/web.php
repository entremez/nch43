<?php

use App\Http\Controllers\CoinController;
use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\V2Controller;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/{lote}/{muestras}/{fila}/{columna}', [CoordinatesController::class, 'getview'])->name('samples');
Route::get('/{lote}/{muestras}/{fila?}/{columna?}', [V2Controller::class, 'getview'])->name('samples');

Route::view('/','home');

Route::get('/form', [FormController::class, 'form']);

Route::view('/how','how');
Route::view('/consideraciones','considerations');

Route::get('/topdf/{lote}/{muestras}/{fila}/{columna}', [V2Controller::class, 'toPdf']);

