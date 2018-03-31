<?php

namespace App\Http\Requests\aluno;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorCadastraAluno extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'bail|required|unique:alunos',
            'data_nascimento' => 'bail|required',
            'cep' => 'bail|required|digits:8',
            'logradouro' => 'bail|required',
            'numero' => 'bail|required',
            'bairro' => 'bail|required',
            'estado' => 'bail|required',
            'cidade' => 'bail|required'
        ];
    }

    public function messages(){

        return [
            'required' => 'Obrigatório.',
            'digits' => 'Não possui 8 dígitos.',
            'unique' => 'Nome já está cadastrado.'
        ];
    }
}
