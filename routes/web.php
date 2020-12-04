<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MaquinasController;
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


Route::resource('Funcionario', 'FuncionarioController');

Route::resource('Maquina', MaquinasController::class);

Route::resource('Requisicao', 'RequisicaoController');

Route::resource('Material', 'MaterialController');

Route::resource('ItemRequisicao', 'ItemRequisicaoUserController');
