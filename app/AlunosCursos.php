<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AlunosCursos extends Model
{
    protected $table = 'alunos_cursos';

    public $fillable = [
      'aluno_id', 'professores_cursos_id'
    ];

    public function professor_curso(){
      return $this->hasOne('App\ProfessoresCursos', 'id', 'professores_cursos_id');
    }
}
