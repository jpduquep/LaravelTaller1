<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/




Route::get('/','App\Http\Controllers\HomeController@index')->name("home.index");

Route::get('/FormCreacion','App\Http\Controllers\ProductController@creacion')->name("home.creacion");
Route::post('/items','App\Http\Controllers\ProductController@guardar')->name("home.guardar");

Route::get('/ListarObjetos','App\Http\Controllers\ProductController@listar')->name("home.listar");


