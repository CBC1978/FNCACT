<?php

namespace App\Http\Requests\auth;

use Illuminate\Foundation\Http\FormRequest;

class formProfileUpdate extends FormRequest
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
            'nom'=>'required',
            'prenom'=>'required',
            'username'=>'required',
            'email'=>'required',
            //'groupe'=>'required',
            'password'=>'',
            'cpassword'=> 'same:password',
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
            'nom.required' => 'Le nom est requis',
            'prenom.required' => 'Le prénom est requis',
            //'groupe.required' => 'Le groupe est requis',
            'username.required' => 'Le nom d\'utilisateur est requis',
            //'username.unique' => 'Le nom d\'utilisateur existe déjà',
            'email.required' => 'L\'emaile est requis',
            'cpassword.same' => 'Les mots de passe ne sont pas identiques.',
        ];
    }
}
