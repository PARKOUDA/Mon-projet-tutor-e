<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class EnseignantRequest extends FormRequest
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
            "Email" => ["required", "email", Rule::unique('enseignants')->ignore($this->id)],
            "Mot_de_passe" => ['min:4'],
            "titre_id" => ["required", 'exists:titres,id'],
            "Photo" => ['image', 'max:2000'],
            "grade_id" => ["required",'exists:grades,id'],
            "fonction_id" => ["required", 'exists:fonctions,id'],
            "ufr_id" => ["required", 'exists:ufrs,id'],
            "departement_id" => ["required", 'exists:departements,id'],
            "role" => ["required"],
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
            'Mot_de_passe' => Hash::make($this->Mot_de_passe), // Hacher le mot de passe avant la validation
        ]);
    }
}
