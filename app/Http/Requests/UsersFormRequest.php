<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersFormRequest extends FormRequest
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
            'email' => 'required|email|max:250',
            'usuario' => 'required||max:250',
            'nome' => 'required|alpha|max:250',
            'senha' => 'required||max:250'
        ];
    }

    public function messages()
    {
        return [
          'required' => 'O campo :attribute é obrigatorio.',
          'max' => 'O numéro máximo de caracteres é 250.',
          'email' => 'O campo deve contar um e-mail válido.'
        ];
    }
}
