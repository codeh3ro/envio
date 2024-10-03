<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\{
  ProducaoMedicaController,
  ClassePrestadorController
};
//->middleware('auth:sanctum');

Route::get('/classePrestador', [ClassePrestadorController::class, 'index'])
  ->name('classePrestador.index');

//Route::get('/producaoMedica', [ProducaoMedicaController::class, 'list'])
//  ->name('producaoMedica.list');
