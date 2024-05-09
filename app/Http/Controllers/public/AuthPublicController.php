<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Departement;
use App\Models\Emploi;
use App\Models\Enseignant;
use App\Models\Fao;
use App\Models\Fonction;
use App\Models\Grade;
use App\Models\Structure;
use App\Models\Titre;
use App\Models\Ufr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthPublicController extends Controller
{
    public function inscriptionEnseignant()
    {
        $titres = Titre::all();
        $grades = Grade::all();
        $fonctions = Fonction::all();
        $ufrs = Ufr::all();
        $departements = Departement::all();

        return view('public.inscription-enseignant', [
            "titres" => $titres,
            "grades" => $grades,
            "fonctions" => $fonctions,
            "ufrs" => $ufrs,
            "departements" => $departements
        ]);
    }

    public function inscriptionEnseignantAction(Request $request)
    {
        // dd($request->Nom);
        #validation du formulaire
        $validator = Validator::make(
            $request->all(),
            [
                'Email' => 'required|email|max:255|unique:users',
                'Mot_de_passe' => 'required|min:4',
                'Matricule' => 'required',
                'Nom' => 'required',
                'Prenom' => 'required',
                'Telephone' => 'required',
                'Genre' => 'required',
                'titre_id' => 'required',
                'Photo' => 'required',
                'grade_id' => 'required',
                'fonction_id' => 'required',
                'ufr_id' => 'required',
                'role' => 'required',
                'departement_id' => 'required', 
            ],
            [
                'Matricule.required' => 'Le champ Matricule est requis.',
                'Nom.required' => 'Le champ Nom est requis.',
                'Prenom.required' => 'Le champ Prenom est requis.',
                'Telephone.required' => 'Le champ Telephone est requis.',
                'Genre.required' => 'Le champ Genre est requis.',
                'titre_id.required' => 'Le champ titre est requis.',
                'grade_id.required' => 'Le champ grade est requis.',
                'fonction_id.required' => 'Le champ fonction est requis.',
                'ufr_id.required' => 'Le champ ufr est requis.',
                'departement_id.required' => 'Le champ departement est requis.',
                'Email.required' => 'Le champ email est requis.',
                'Email.email' => 'Veuillez entrer une adresse email valide.',
                'Email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'Email.unique' => 'Cette adresse email est déjà utilisée.',
                'Mot_de_passe.required' => 'Le champ mot de passe est requis.',
                'Mot_de_passe.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $enseignant = Enseignant::create([
            'Email' => $request->Email,
            'Matricule' => $request->Matricule,
            'Nom' => $request->Nom,
            'Prenom'=> $request->Prenom,
            'Telephone' => $request->Telephone,
            'Genre' => $request->Genre,
            'Mot_de_passe'=> $request->Mot_de_passe,
            'titre_id' => $request->titre_id,
            'Photo' => $request->Photo,
            'grade_id' => $request->grade_id,
            'fonction_id' => $request->fonction_id,
            'ufr_id' => $request->ufr_id,
            'role' => "user",
            'departement_id' => $request->departement_id,
        ]);

        $enseignant->save();

        return redirect()->route('connexion-enseignant')->with('success', 'Inscription reussi ! veuillez vous connecter');
    }

    public function connexionEnseignant()
    {
        return view('public.connexion-enseignant');
    }

    public function inscriptionAtos()
    {
        $emplois = Emploi::all();
        $structures = Structure::all();
        $faos = Fao::all();

        return view('public.inscription-atos', [
            
            "emplois" => $emplois,
            "structures" => $structures,
            "faos" => $faos,
        ]);
    }

    public function inscriptionAtosAction(Request $request)
    {
        $credentials = $request->validate([
            'Matricule' => 'required',
            'Nom' => 'required',
            'Prenom' => 'required',
            'Telephone' => 'required',
            'Email' => 'required|email',
            'Genre' => 'required',
            'Mot_de_passe' => 'required',
            'structure_id' => 'required',
            'Photo' => 'required',
            'emploi_id' => 'required',
            'fao_id' => 'required',
            'role' => 'required',
        ]);

        if (Auth::guard('atos')->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended(route('admin.index'));
        }
    
        return back()->withErrors([
            'email' => "Ce email n'ai pas correct ou n'existe pas.",
        ]);
    }
    
}
