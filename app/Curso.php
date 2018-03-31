<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = 'cursos';
    public $timestamps = false;
    public $primaryKey = 'id_curso';

    public $fillable = [
    	'nome_curso'
    ];
}
