<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email'     => 'required|email|max:255',
            'password'  => 'required'
        ];
    }

    public function messages()
    {
        return [
            'email.required'    => "Veuillez entrer votre e-mail",
            'email.email'       => "L'e-mail n'est pas valide",
            'password.required' => 'Veuillez entrer votre mot de passe'
        ];
    }
}
