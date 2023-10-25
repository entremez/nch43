<?php

use App\Http\Controllers\CoinController;
use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\FormController;
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

Route::get('/{lote}/{muestras}/{fila}/{columna}', [CoordinatesController::class, 'nch43'])->name('samples');

Route::get('/el-que-quieras', [CoinController::class, 'home']);

Route::view('/','home');

Route::get('/form', [FormController::class, 'form']);

Route::view('/how','how');