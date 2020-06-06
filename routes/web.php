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

// USUARIO--
Route::get('/configuracion', 'UserController@config')->name('config');
Route::post('/user/update', 'UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}', 'UserController@getImage')->name('user.avatar');
Route::get('/perfil/{id}', 'UserController@profile')->name('profile');


// PUBLICACIÓN
Route::get('/subir-libro', 'PublicacionController@create')->name('publicacion.create');
Route::post('/libro/save', 'PublicacionController@save')->name('publicacion.save');
Route::get('/libro/file/{filename}', 'PublicacionController@getImage')->name('image.file');
Route::get('/libro/{id}', 'PublicacionController@detail')->name('publicacion.detail');
Route::get('/libro/delete/{id}', 'PublicacionController@delete')->name('publicacion.delete');
Route::get('/libro/editar/{id}', 'PublicacionController@edit')->name('publicacion.edit');
Route::post('/libro/update', 'PublicacionController@update')->name('publicacion.update');


