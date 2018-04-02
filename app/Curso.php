<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';

    public $fillable = [
    	'nome'
    ];

    public function professores(){
    	return $this->belongsToMany('App\Professor');
    }
}
