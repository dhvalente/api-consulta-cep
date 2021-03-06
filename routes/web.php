<?php

use App\Http\Controllers\EnderecoController;
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

Route::get('/', [EnderecoController::class, 'Index']);
Route::get('/buscar', [EnderecoController::class, 'Buscar'])->name('Buscar');
Route::post('/salvar', [EnderecoController::class, 'Salvar'])->name('Salvar');
