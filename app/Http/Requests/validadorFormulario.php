<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validadorFormulario extends FormRequest
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
            'ISBN'=>'required|int|min:13',
            'titulo'=>'required',
            'autor'=>'required',
            'paginas'=>'required|int',
            'editorial'=>'required',
            'emailE'=>'required|email',
        ];
    }
}
