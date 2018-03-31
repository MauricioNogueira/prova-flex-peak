<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    public $primaryKey = 'id_professor';
    public $timestamps = false;
    protected $table = 'professores';

    public $fillable = [
    	'nome_professor', 'data_nascimento_professor'
    ];
}
