<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';
    public $timestamps = false;
    public $primaryKey = 'id_aluno';

    public $fillable = [
    	'nome', 'data_nascimento', 'logradouro', 'cep', 'bairro', 'cidade', 'estado', 'numero'
    ];
}
