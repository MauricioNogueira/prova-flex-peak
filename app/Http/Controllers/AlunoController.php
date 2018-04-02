<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\aluno\ValidadorCadastraAluno;
use App\Http\Requests\aluno\ValidadorAlteraAluno;
use App\Aluno;
use App\ProfessoresCursos;
use App\AlunosCursos;
use PDF;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $alunos = Aluno::all();

      return view('aluno.index', ['alunos' => $alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorCadastraAluno $request)
    {
      $aluno = new Aluno($request->all());
      $aluno->save();

      return redirect()->route('aluno.create')->with('save', 1);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aluno = Aluno::find($id);

        $idsCursos = array();

        foreach ($aluno->cursos as $curso) {
          array_push($idsCursos, $curso->professores_cursos_id);
        }
        
        $cursos = ProfessoresCursos::whereNotIn('id', $idsCursos)->get();

        return view('aluno.show', ['aluno' => $aluno, 'cursos' => $cursos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $aluno = Aluno::find($id);

      return view('aluno.edit')->with(['aluno' => $aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorAlteraAluno $request, $id)
    {
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

      return redirect()->route('aluno.index')->with(['alterado' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $aluno = Aluno::find($id);

      $aluno->delete();

      return redirect()->route('aluno.index')->with(['excluido' => 1]);
    }

    public function pdf(){
      $aluno = Aluno::all();

    	$pdf = PDF::loadView('aluno.pdf', ['alunos' => $aluno]);
    	return $pdf->stream();
    }

    public function associar(Request $request, $id){
      // dd($request->all());
      $alunos_cursos = new AlunosCursos();
      $alunos_cursos->professores_cursos_id = $request->professores_cursos_id;
      $alunos_cursos->aluno_id = $id;
      $alunos_cursos->save();

      return redirect()->route('aluno.show', ['id' => $id])->with(['associado' => 1]);
    }
}
