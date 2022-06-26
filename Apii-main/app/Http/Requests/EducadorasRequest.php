<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EducadorasRequest extends FormRequest
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
            'cod_tia' => 'required|unique:educadoras,cod_tia',
            'nombre' => 'required|min:3',
            'telefono' => 'required|numeric',
            'cod_curso' => 'required',
            //exists:niveles,nivel
        ];
    }

    public function messages()
    {
        return [
            'cod_tia.required' => 'Codigo es requerido',
            'cod_tia.unique' => 'Codigo duplicado',
            'nombre.required' => 'Nombre es requerido',
            'nombre.min' => ' Nombre debe contener minimo 3 caracteres',
            'telefono.required' => 'Telefono es requerido',
            'telefono.numeric' => 'Telefono debe ser un valor numerico',
            'cod_curso.required' => 'Nivel es requerido',
        ];
    }
}
