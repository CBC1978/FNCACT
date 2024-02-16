<?php

namespace App\Http\Requests\auxiliary;

use Illuminate\Foundation\Http\FormRequest;

class formAuxiliary extends FormRequest
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
            'numero_rccm'=>'required',
            'numero_ifu'=>'required',
            'raison_sociale'=>'required',
            'contact_1'=>'required',
            'ville'=>'required',
            'statut_juridique'=>'required',
            'type_auxiliaire'=>'required',
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
            'numero_rccm.required' => 'Le numéro RCCM est requis',
            'numero_ifu.required' => 'Le numéro IFU est requis',
            'raison_sociale.required' => 'La raison sociale est requise',
            'contact_1.required' => 'Le numéro de téléphone  est requis',
            'ville.required' => 'La ville est requise',
            'statut_juridique.required' => 'Le statut juridique est requis',
            'type_auxiliaire.required' => 'Le type auxiliaire est requis',
        ];
    }
}
