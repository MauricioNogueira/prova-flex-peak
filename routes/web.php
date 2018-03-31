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
Route::get('/cadastrar-aluno', 'AlunoController@telaCadastrar')->name('tela-cadastrar-aluno');
Route::post('/cadastrar-aluno/cadastrar', 'AlunoController@cadastrarAluno')->name('cadastrar-aluno');
Route::get('/lista-alunos', 'AlunoController@listarAlunos')->name('listar-alunos');
Route::get('/listar-alunos/alterar-aluno/{id}', 'AlunoController@telaAlterar')->name('tela-alterar-aluno');
Route::get('/listar-alunos/alterar-aluno/{id}/alterar', 'AlunoController@alterarAluno')->name('alterar-aluno');
Route::get('/listar-alunos/excluir/{id}', 'AlunoController@excluirAluno')->name('excluir-aluno');
Route::get('/listar-alunos/pdf-aluno', 'AlunoController@gerarPdfAluno')->name('pdf-aluno');

/*Rotas do CursoController*/
Route::get('/cadastrar-curso', 'CursoController@telaCadastrar')->name('tela-cadastrar-curso');
Route::post('/cadastrar-curso/cadastrar', 'CursoController@cadastrar')->name('cadastrar-curso');
Route::get('/listar-cursos', 'CursoController@telaListarCurso')->name('listar-cursos');
Route::get('/listar-cursos/alterar-curso/{id}', 'CursoController@telaAlterar')->name('tela-alterar-curso');
Route::get('/listar-cursos/alterar-curso/{id}/alterando', 'CursoController@alterarCurso')->name('alterar-curso');
Route::get('/listar-cursos/excluir/{id}', 'CursoController@excluirCurso')->name('excluir-curso');
Route::get('/listar-cursos/pdf-curso', 'CursoController@gerarPdf')->name('pdf-curso');

/*Rotas do ProfessorController*/
Route::get('/cadastrar-professor', 'ProfessorController@telaCadastrar')->name('tela-cadastrar-professor');
Route::post('/cadastrar-professor/cadastrar', 'ProfessorController@cadastrarProfessor')->name('cadastrar-professor');
Route::get('/listar-professores', 'ProfessorController@telaListar')->name('listar-professores');
Route::get('/listar-professores/alterar/{id}', 'ProfessorController@telaAlterar')->name('tela-alterar-professor');
Route::get('/listar-professores/alterar/{id}/alterando', 'ProfessorController@alterarProfessor')->name('alterar-professor');
Route::get('/listar-professores/excluir/{id}', 'ProfessorController@excluirProfessor')->name('excluir-professor');
Route::get('/listar-professores/pdf-professor', 'ProfessorController@gerarPdf')->name('pdf-professor');