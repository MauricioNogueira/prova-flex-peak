<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professores';

    public $fillable = [
    	'nome', 'data_nascimento'
    ];

    public function cursos(){
      return $this->belongsToMany('App\Curso', 'professores_cursos');
    }
}
