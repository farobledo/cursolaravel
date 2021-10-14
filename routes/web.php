<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', "controller1@index");
Route::get('/mostrar', "controller1@create");
Route::get('/crear', "controller1@store");
Route::get('/articulos', "controller1@show");
Route::get('/contacto', "controller1@contactar");
Route::get('/galeria', "controller1@menu");


