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

/*Rotas da HomeController*/
Route::get('/', 'HomeController@index')->name('index');


/*Rotas da AlunoController*/
Route::post('aluno/{id}/associar', 'AlunoController@associar')->name('aluno.associar');
Route::get('aluno/pdf', 'AlunoController@pdf')->name('aluno.pdf');
Route::resource('aluno', 'AlunoController');

/*Rotas do CursoController*/
Route::get('curso/pdf', 'CursoController@pdf')->name('curso.pdf');
Route::resource('curso', 'CursoController');

/*Rotas do ProfessorController*/
Route::post('professor/{id}/associar', 'ProfessorController@associar')->name('professor.associar');
Route::get('professor/pdf','ProfessorController@pdf')->name('professor.pdf');
Route::resource('professor', 'ProfessorController');
