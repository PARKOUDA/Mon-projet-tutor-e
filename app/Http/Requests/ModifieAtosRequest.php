<?php

namespace App\Http\Requests;

use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class ModifieAtosRequest extends FormRequest
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
            "Matricule" => ["required"],
            "Nom" => ["required"],
            "Prenom" => ["required"],
            "Genre" => ["required"],
            "Telephone" => ["required", "min:8", 'numeric'],
            "Email" => ["required", "email"],
            "fao_id" => ["required",],
            "Photo" => ['image', 'max:2000'],
            "structure_id" => ["required"],
            "emploi_id" => ["required"],
            "role_id" => ["required"],
        ];
    }

    /**
     * Prétraitement des données avant la validation.
     *
     * @return array
     */
    protected function prepareForValidation()
    {
        $this->merge([
            'password' => Hash::make($this->Mot_de_passe), // Hacher le mot de passe avant la validation
        ]);
    }
}

