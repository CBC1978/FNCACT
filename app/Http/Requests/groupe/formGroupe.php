<?php

namespace App\Http\Requests\groupe;

use Illuminate\Foundation\Http\FormRequest;

class formGroupe extends FormRequest
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
            'libelle'=>['required', ],
            'description'=>['required', ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'libelle.required' => 'Le libellé est requis',
            //'libelle.unique' => 'Le libellé existe déjà',
            'description.required' => 'La description est requise',
            //'description.unique' => 'La description existe déjà',
        ];
    }
}
