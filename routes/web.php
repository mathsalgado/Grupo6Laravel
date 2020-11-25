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

Route::resource('Funcionario', 'FuncionarioController');

Route::resource('Maquinas', 'MaquinasController');

Route::resource('Requisicao', 'RequisicaoController');

Route::resource('Material', 'MaterialController');

Route::resource('ItemRequisicao', 'ItemRequisicaoUserController');
