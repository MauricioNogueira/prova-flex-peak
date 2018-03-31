<?php

namespace App\Http\Controllers;

use PDF;
use App\Professor;
use Illuminate\Http\Request;
use App\Http\Requests\professor\ValidadorAlteraProfessor;
use App\Http\Requests\professor\ValidadorCadastraProfessor;

class ProfessorController extends Controller
{
    public function telaCadastrar(){
    	return view('professor.cadastrar-professor');
    }

    public function cadastrarProfessor(ValidadorCadastraProfessor $request){
    	$professor = new Professor($request->all());
    	$professor->data_criacao_professor = date('Y-m-d');
    	$professor->save();

    	return redirect(route('tela-cadastrar-professor'))->with(['salvo' => 1]);
    }

    public function telaListar(){
    	$professores = Professor::all();

    	return view('professor.listar-professores', ['professores' => $professores]);
    }

    public function telaAlterar($id){
    	$professor = Professor::find($id);

    	return view('professor.alterar-professor', ['professor' => $professor]);
    }

    public function alterarProfessor(ValidadorAlteraProfessor $request, $id){
    	$professor = Professor::find($id);
    	$professor->nome_professor = $request->nome_professor;
    	$professor->data_nascimento_professor = $request->data_nascimento_professor;
    	$professor->save();

    	return redirect(route('listar-professores'))->with(['alterado' => 1]);
    }

    public function excluirProfessor($id){
    	$professor = Professor::find($id);
    	$professor->delete();

    	return redirect(route('listar-professores'))->with(['excluido' => 1]);
    }

    public function gerarPdf(){
    	$professores = Professor::all();

    	$pdf = PDF::loadView('professor.pdf-professor', ['professores' => $professores]);
    	return $pdf->stream();
    }
}
