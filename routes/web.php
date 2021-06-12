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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::get('get-generos', 'GeneroController@getGeneros');
Route::get('get-edosciviles', 'EstadoCivilController@getEdosCiviles');
Route::get('get-niveles', 'NivelController@getNiveles');
Route::get('get-carreras/{nivel}', 'CarreraController@getCarreras');
Route::post('usuarios', 'RegistroController@created');