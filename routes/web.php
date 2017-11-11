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

Route::get('/', 'TestController@welcome');
Route::get('/prueba', function () {
    return "Hola soy una ruta de prueba";
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Leer
Route::get('/admin/products', 'ProductController@index'); //listar

//Crear
Route::get('/admin/products', 'ProductController@create'); //ver el formulario 
Route::post('/admin/products', 'ProductController@store'); //registrar (presionar el botón)


