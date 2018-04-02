<?php

namespace App\Http\Controllers;

use PDF;
use App\Curso;
use Illuminate\Http\Request;
use App\Http\Requests\curso\ValidadorAlteraCurso;
use App\Http\Requests\curso\ValidadorCadastraCurso;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::all();

      	return view('curso.index', ['cursos' => $cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('curso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorCadastraCurso $request)
    {
      $curso = new Curso($request->all());  
      $curso->save();

      return redirect()->route('curso.create')->with(['salvo' => 1]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $curso = Curso::find($id);

      return view('curso.edit', ['curso' => $curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorAlteraCurso $request, $id)
    {
      $curso = Curso::find($id);
      $curso->nome = $request->nome;
      $curso->save();

      return redirect()->route('curso.index')->with(['alterado' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $curso = Curso::find($id);

      $curso->delete();

      return redirect()->route('curso.index')->with(['excluir' => 1]);
    }

    public function pdf(){
      $cursos = Curso::all();

    	$pdf = PDF::loadView('curso.pdf', ['cursos' => $cursos]);

    	return $pdf->stream();
    }
}
