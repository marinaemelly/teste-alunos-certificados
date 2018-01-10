<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', ['as'=>'cursos', 'uses'=>'CursoController@index']);
Route::get('/cadastrar', ['as'=>'cursos.cadastrar', 'uses'=>'CursoController@cadastrar']);
Route::post('/salvar', ['as'=>'cursos.salvar', 'uses'=>'CursoController@salvar']);
Route::get('/editar/{id}', ['as'=>'cursos.editar', 'uses'=>'CursoController@editar']);
Route::put('/atualizar/{id}', ['as'=>'cursos.atualizar', 'uses'=>'CursoController@atualizar']);
Route::get('/deletar/{id}', ['as'=>'cursos.deletar', 'uses'=>'CursoController@deletar']);

Route::get('/relatorioMaisCertificados', ['as'=>'relatorio.maiscertificados', 'uses'=>'AlunoCertificadoController@buscarAlunosMaisCertificados']);

Route::get('/relatorioCursosMaisCertificacoes', ['as'=>'relatorio.cursosmaiscertificados', 'uses'=>'CursoController@buscarCursosComMaisCertificacoes']);

Route::get('/alunos', ['as'=>'alunos', 'uses'=>'AlunoController@buscarTodos']);


