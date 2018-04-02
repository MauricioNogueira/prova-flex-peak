<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    public $fillable = [
    	'nome', 'data_nascimento', 'logradouro', 'cep', 'bairro', 'cidade', 'estado', 'numero'
    ];

    public function cursos(){
      return $this->hasMany('App\AlunosCursos');
    }
}
