<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CurriculumRequest extends FormRequest
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
            'curriculum' => 'required|file|max:1024',
            'phone' => 'required|numeric',
        ];
    }

    public function messages() 
    {
        return [
            'curriculum.max' => 'O tamanho maximo do arquivo deve ser de 1mb', 
            'phone.numeric' => 'O telefone deve conter somente numeros',

        ];
    }
}
