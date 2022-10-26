<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorRegistro extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; /*Siempre habilitarla */
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'txtTituloLibro'=>'required',
            'txtAutor'=>'required',
            'txtEstante'=>'required',
            'txtCategoria'=>'required',
            'txtTituloLibro'=>'required|min:3',
            'txtEstante'=>'required|min:4',
            'txtCategoria'=>'required|min:4',
            'txtAutor'=>'required|max:255',
        ];
    }
}
