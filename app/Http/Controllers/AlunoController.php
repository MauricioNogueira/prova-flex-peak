<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aluno\ValidadorCadastraAluno;
use App\Http\Requests\aluno\ValidadorAlteraAluno;
use App\Aluno;

class AlunoController extends Controller
{
    public function telaCadastrar(){
    	return view('aluno.cadastrar-aluno');
    }

    public function cadastrarAluno(ValidadorCadastraAluno $request){
    	$aluno = new Aluno($request->all());
    	$aluno->data_criacao = date('Y-m-d');
    	$aluno->save();

    	return redirect(route('tela-cadastrar-aluno'))->with('save', 1);
    }

    public function listarAlunos(){
    	$alunos = Aluno::all();

    	return view('aluno.lista-alunos', ['alunos' => $alunos]);
    }

    public function telaAlterar($id){
    	$aluno = Aluno::find($id);

    	return view('aluno.alterar-aluno')->with(['aluno' => $aluno]);
    }

    public function alterarAluno(ValidadorAlteraAluno $request, $id){
    	$aluno = Aluno::find($id);

    	$aluno->nome = $request->nome;
    	$aluno->data_nascimento = $request->data_nascimento;
    	$aluno->cep = $request->cep;
    	$aluno->logradouro = $request->logradouro;
    	$aluno->numero = $request->numero;
    	$aluno->bairro = $request->bairro;
    	$aluno->estado = $request->estado;
    	$aluno->cidade = $request->cidade;

    	$aluno->save();

    	return redirect(route('listar-alunos'))->with(['alterado' => 1]);
    }

    public function excluirAluno($id){
    	$aluno = Aluno::find($id);

    	$aluno->delete();

    	return redirect(route('listar-alunos'))->with(['excluido' => 1]);
    }

    public function gerarPdfAluno(){
    	$aluno = Aluno::all();

    	$pdf = \PDF::loadView('aluno.pdf-aluno', ['alunos' => $aluno]);
    	return $pdf->stream();
    }
}
