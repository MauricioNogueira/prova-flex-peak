<?php

namespace App\Http\Controllers;

use PDF;
use App\Professor;
use App\Curso;
use App\ProfessoresCursos;
use App\Http\Requests\professor\ValidadorAlteraProfessor;
use App\Http\Requests\professor\ValidadorCadastraProfessor;
use Illuminate\Http\Request;

class ProfessorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $professores = Professor::all();

      return view('professor.index', ['professores' => $professores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('professor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorCadastraProfessor $request)
    {
      $professor = new Professor($request->all());
      $professor->save();

      return redirect()->route('professor.create')->with(['salvo' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $professor = Professor::find($id);
        $idsCursos = array();

        foreach ($professor->cursos as $curso) {
          array_push($idsCursos, $curso->id);
        }

        $cursos = Curso::whereNotIn('id',$idsCursos)->get();

        return view('professor.show', ['professor' => $professor, 'cursos' => $cursos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $professor = Professor::find($id);

      return view('professor.edit', ['professor' => $professor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorAlteraProfessor $request, $id)
    {

      $professor = Professor::find($id);
      $professor->nome = $request->nome;
      $professor->data_nascimento = $request->data_nascimento;
      $professor->save();

      return redirect()->route('professor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $professor = Professor::find($id);
      $professor->delete();

      return redirect()->route('professor.index')->with(['excluido' => 1]);
    }

    public function pdf(){
      $professores = Professor::all();

    	$pdf = PDF::loadView('professor.pdf', ['professores' => $professores]);
    	return $pdf->stream();
    }

    public function associar(Request $request, $id){
      // dd($request->all());
      $professor = Professor::find($id);
      $professores_cursos = new ProfessoresCursos();
      $professores_cursos->curso_id = $request->curso_id;
      $professores_cursos->professor_id = $id;
      $professores_cursos->save();

      return redirect()->route('professor.show', ['id' => $id])->with(['associado' => 1]);
    }
}
