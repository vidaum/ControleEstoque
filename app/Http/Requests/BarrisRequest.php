<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BarrisRequest extends FormRequest
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
            'barril_tipo' => 'required|max:45'
        ];
    }

    public function messages()
    {
        return [
            'barril_tipo' => 'Campo Tipo de Barril é necessário.'
        ];
    }
}
