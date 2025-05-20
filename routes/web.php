<?php

use App\Http\Controllers\CoinController;
use App\Http\Controllers\CoordinatesController;
use App\Http\Controllers\ExportToExcelController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\V2Controller;
use Illuminate\Support\Facades\Route;

Route::view('/','home');
Route::get('/form', [FormController::class, 'form']);
Route::get('/{lote}/{muestras}/{fila}/{columna}', [V2Controller::class, 'getview'])->name('samples');
Route::view('/how','how');
Route::view('/consideraciones','considerations');
Route::view('/control-cambios','changelog');
Route::get('/toexcel/{lote}/{muestras}/{fila}/{columna}',[ExportToExcelController::class, 'toExcel']);

Route::get('/topdf/{lote}/{muestras}/{fila}/{columna}', [V2Controller::class, 'toPdf']);

