<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/', 'App\Http\Controllers\UsuarioController@index');
Route::get('/{id}', 'App\Http\Controllers\UsuarioController@show');
Route::post('/', 'App\Http\Controllers\UsuarioController@create');
Route::put('/{id}', 'App\Http\Controllers\UsuarioController@update');
