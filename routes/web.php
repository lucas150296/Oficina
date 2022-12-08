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

Route::get('/', 'homeController@index')->name('home');

Route::get('/orcamento', 'orcamentoController@index')->name('orcamento');
Route::post('/orcamento', 'orcamentoController@salvaOrcamento')->name('orcamento');

Route::get('/pesquisa', 'pesquisaController@pesquisa')->name('pesquisa');
Route::post('/pesquisa', 'pesquisaController@listaPesquisa')->name('pesquisa');
Route::delete('orcamento/{id}', "pesquisaController@delete")->name('orcamento.delete');

Route::get('/orcamento/altere', 'pesquisaController@edita')->name('edita');
Route::post('/orcamento/altere', 'pesquisaController@update')->name('edita');
