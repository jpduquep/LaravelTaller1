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

Route::get('/FormCreacion','App\Http\Controllers\ItemController@creacion')->name("creacion");
Route::post('/items','App\Http\Controllers\ItemController@save')->name("home.guardar");
Route::get('/items/{id}', 'App\Http\Controllers\ItemController@show')->name('items.show');
Route::delete('/items/{id}', 'App\Http\Controllers\ItemController@destroy')->name('items.destroy');
Route::get('/ListarObjetos','App\Http\Controllers\ItemController@index')->name("listar");


