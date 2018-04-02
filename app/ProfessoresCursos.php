<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfessoresCursos extends Model
{
    protected $table = "professores_cursos";
    public $fillable = [
      'curso_id', 'professor_id'
    ];

    public function curso(){
      return $this->hasOne('App\Curso', 'id','curso_id');
    }

    public function professor(){
      return $this->hasOne('App\Professor', 'id', 'professor_id');
    }
}
