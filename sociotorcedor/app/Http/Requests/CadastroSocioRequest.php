<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CadastroSocioRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|max:255',
            'clube' => 'required'
        ];
    }

    public function messages()
    {
        return[
          'nome.required' => 'O Nome do Sócio é obrigatório.',
            'clube.required' => 'É necessário selecionar o clube.'
        ];
    }
}
