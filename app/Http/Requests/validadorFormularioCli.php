<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormularioCli extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'INE'=>'min:10',
            'Nombres'=>'required|min:4',
            'ApellidoP'=>'required|min:4',
            'ApellidoM'=>'required|min:4',
            'emailCli'=>'required|email|min:4'

        ];
    }
}
