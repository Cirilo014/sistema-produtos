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


/* Rota principal */ 

Route::get('/', 'ProdutosController@create');


/* Rotas para categoria */

Route::post('salvar_categoria', 'CategoriaController@store');
Route::get('/nova_categoria', 'CategoriaController@create');

/* Rotas da tabela de Produtos */

Route::get('/novo' , 'ProdutosController@create');
Route::post('/salvar', 'ProdutosController@store');
Route::get('/listar', 'ProdutosController@show');
Route::get('editar/{id}', 'ProdutosController@edit');
Route::post('atualizar/{id}', 'ProdutosController@update');
Route::get('apagar/{id}', 'ProdutosController@destroy');












//Route::get('/produtos/listar', 'ProdutosController@show')->name('listar_produto');
//Route::post('/produtos/novo', 'ProdutoController@store')->name('salvar_produto');


Route::resource('noticias', 'NoticiasController');

Route::get('noticias/edit/{id}', 'NoticiasController@edit');
Route::get('noticias/delete/{id}', 'NoticiasController@destroy');

Route::get('/sobre', function(){
    return view('saibamais');
});

Route::get('/boot', function(){
    return view('testando');
});