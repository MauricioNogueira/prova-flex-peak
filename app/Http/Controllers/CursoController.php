<?php

namespace App\Http\Controllers;

use PDF;
use App\Curso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\curso\ValidadorAlteraCurso;
use App\Http\Requests\curso\ValidadorCadastraCurso;

class CursoController extends Controller
{
    public function telaCadastrar(){
    	return view('curso.cadastrar-curso');
    }

    public function cadastrar(ValidadorCadastraCurso $request){
    	$curso = new Curso($request->all());
    	$curso->data_criacao_curso = date('Y-m-d');
    	$curso->save();

    	return redirect(route('tela-cadastrar-curso'))->with(['salvo' => 1]);
    }

    public function telaListarCurso(){
    	$cursos = Curso::all();

    	return view('curso.listar-cursos', ['cursos' => $cursos]);
    }

    public function telaAlterar($id){
    	$curso = Curso::find($id);

    	return view('curso.alterar-curso', ['curso' => $curso]);
    }

    public function alterarCurso(ValidadorAlteraCurso $request, $id){
    	$curso = Curso::find($id);
    	$curso->nome_curso = $request->nome_curso;
    	$curso->save();

    	return redirect(route('listar-cursos'))->with(['alterado' => 1]);
    }

    public function excluirCurso($id){
    	$curso = Curso::find($id);

    	$curso->delete();

    	return redirect(route('listar-cursos'))->with(['excluir' => 1]);
    }

    public function gerarPdf(){
    	$cursos = Curso::all();

    	$pdf = PDF::loadView('curso.pdf-curso', ['cursos' => $cursos]);

    	return $pdf->stream();
    }
}
