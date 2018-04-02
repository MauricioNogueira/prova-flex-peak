<?php

namespace App\Http\Requests\curso;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorAlteraCurso extends FormRequest
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
           'nome' => 'bail|required'
        ];
    }

    public function messages(){
        return [
            'required' => 'Obrigatório.'
        ];
    }
}
