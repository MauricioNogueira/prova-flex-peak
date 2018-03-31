<?php

namespace App\Http\Requests\professor;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorAlteraProfessor extends FormRequest
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
            'nome_professor' => 'bail|required',
            'data_nascimento_professor' => 'bail|required'
        ];
    }

    public function messages(){
        return [
            'required' => 'Obrigatório.'
        ];
    }
}
