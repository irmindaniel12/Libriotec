<?php

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
/*Página Welcome*/ 
Route::get('/', function () {
    return view('welcome');
});

/*Rutas*/ 
Auth::routes();

/*Página principal del portal, en dónde se encuentra los libros*/ 
Route::get('/home', 'HomeController@index')->name('home');
