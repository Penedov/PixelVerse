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
    return view('home');
});

//Rotas dos contatos
Route::get('/contato','App\Http\Controllers\ContatoController@index');
Route::post('/contato','App\Http\Controllers\ContatoController@store');

Route::get('/cliente','App\Http\Controllers\ClienteController@index');
Route::post('/cliente','App\Http\Controllers\ClienteController@store');


Route::get('/fornecedor','App\Http\Controllers\FornecedorController@index');
Route::post('/fornecedor','App\Http\Controllers\FornecedorController@store');


Route::get('/produto','App\Http\Controllers\ProdutoController@index');
Route::post('/produto','App\Http\Controllers\ProdutoController@store');



