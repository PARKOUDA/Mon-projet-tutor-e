<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ModifieEnseignantRequest extends FormRequest
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
            "Telephone" => ["required", "min:8", 'numeric'],
            "Email" => ["required", "email"],
            "titre_id" => ["required", 'exists:titres,id'],
            "Photo" => ['image', 'max:2000'],
            "grade_id" => ["required",'exists:grades,id'],
            "fonction_id" => ["required", 'exists:fonctions,id'],
            "ufr_id" => ["required", 'exists:ufrs,id'],
            "departements" => ['array'],
            "departements.*" => ['exists:departements,id'],
            "role_id" => ["required", 'exists:roles,id'],
        ];
    }
}
