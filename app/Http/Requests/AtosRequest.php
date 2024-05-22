<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Http\FormRequest;

class AtosRequest extends FormRequest
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
            "Email" => ["required", "email", Rule::unique('atos')->ignore($this->id)],
            "Mot_de_passe" => ['min:4'],
            "fao_id" => ["required",'exists:faos,id'],
            "Photo" => ['image', 'max:2000'],
            "structure_id" => ["required",'exists:structures,id'],
            "emploi_id" => ["required",'exists:emplois,id'],
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
