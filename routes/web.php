<?php

use App\Http\Controllers\CountyController;
use App\Http\Controllers\PropertyController;
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
Route::redirect('/', 'counties');

// Rotas para cidades
Route::resource('counties', CountyController::class)->except(['show']);

// Rotas para imoveis
Route::resource('properties', PropertyController::class);



