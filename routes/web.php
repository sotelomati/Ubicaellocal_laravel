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

Route::get('/', 'App\Http\Controllers\homeController@index');

Route::get('/home', 'App\Http\Controllers\homeController@index');

//Route::get('/contacto', 'App\Http\Controllers\homeController@contacto');
Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/glutenfree', 'App\Http\Controllers\homeController@glutenFree');

Route::get('/noble', 'App\Http\Controllers\homeController@noble');

Route::get('/ofertas', 'App\Http\Controllers\homeController@ofertas');