<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Atos;
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
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class AuthPublicController extends Controller
{
    public function getDepartements($ufr_id)
    {
        // Récupérer les départements associés à l'UFR sélectionnée
        $departements = Departement::where('ufr_id', $ufr_id)->get();

        return response()->json(['departements' => $departements]);
    }

    public function inscriptionEnseignant()
    {
        $titres = Titre::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des titres
        $grades = Grade::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des grades
        $fonctions = Fonction::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des fonctions
        $ufrs = Ufr::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des UFR
        $departements = Departement::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des départements
    
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
        // dd($request->all());
        $validator = Validator::make(
            $request->all(),
            [
                'Email' => 'required|email|max:255|unique:users',
               'Mot_de_passe' => 'required|min:4|confirmed',
                'Matricule' => 'required',
                'Nom' => 'required',
                'Prenom' => 'required',
                'Telephone' => 'required',
                'Genre' => 'required',
                'titre_id' => 'required',
                'Photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072', // Photo is optional, must be an image, only jpeg, png, jpg and max size of 3MB
                // 'Photo' => 'nullable|image|mimes:jpeg,png,jpg',
                'grade_id' => 'required',
                'fonction_id' => 'required',
                'ufr_id' => 'required',
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
                'Mot_de_passe.confirmed' => 'Le mot de passe doit être identique.',
                'Photo.image' => 'Le champ Photo doit être une image.',
                'Photo.mimes' => 'Le champ Photo doit être un fichier de type: jpeg, png, jpg.',
                //'Photo.max' => 'Le champ Photo ne doit pas dépasser 3 Mo.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        $enseignant = new Enseignant();
        $enseignant->Email = $request->Email;
        $enseignant->Matricule = $request->Matricule;
        $enseignant->Nom = $request->Nom;
        $enseignant->Prenom = $request->Prenom;
        $enseignant->Telephone = $request->Telephone;
        $enseignant->Genre = $request->Genre;
        //$enseignant->password = $request->Mot_de_passe;
        $enseignant->titre_id = $request->titre_id;
        $enseignant->grade_id = $request->grade_id;
        $enseignant->fonction_id = $request->fonction_id;
        $enseignant->ufr_id = $request->ufr_id;
        $enseignant->departement_id = $request->departement_id;

        // Update the password only if a new password is provided
    if ($request->filled('Mot_de_passe')) {
        $enseignant->password = bcrypt($request->Mot_de_passe);
    }

        if ($request->hasFile('Photo')) {
            $file = $request->file('Photo');
            $path = $file->store('photos', 'public');
            if ($enseignant->Photo) {
                Storage::disk('public')->delete($enseignant->Photo);
            }
            $enseignant->Photo = $path;
        }


        $enseignant->save();

        return redirect()->route('connexion-enseignant')->with('success', 'Inscription reussi ! Veuillez vous connecter');
    }

    public function connexionEnseignant()
    {
        return view('public.connexion-enseignant');
    }

    public function inscriptionAtos()
    {
        
        $emplois = Emploi::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des emplois
        $structures = Structure::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des structures
        $faos= Fao::orderBy('nom', 'asc')->get(); // Remplacez 'nom' par le champ correspondant au nom des faos
        

        return view('public.inscription-atos', [

            "emplois" => $emplois,
            "structures" => $structures,
            "faos" => $faos,
        ]);
    }

    public function inscriptionAtosAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'Email' => 'required|email|max:255|unique:users',
                'Mot_de_passe' => 'required|min:4|confirmed',
                'Matricule' => 'required',
                'Nom' => 'required',
                'Prenom' => 'required',
                'Telephone' => 'required',
                'Genre' => 'required',
                'structure_id' => 'required',
                'emploi_id' => 'required',
                'fao_id' => 'required',
                'Photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072', // Photo is optional, must be an image, only jpeg, png, jpg and max size of 3MB
            ],
            [
                'Matricule.required' => 'Le champ Matricule est requis.',
                'Nom.required' => 'Le champ Nom est requis.',
                'Prenom.required' => 'Le champ Prenom est requis.',
                'Telephone.required' => 'Le champ Telephone est requis.',
                'Genre.required' => 'Le champ Genre est requis.',
                'structure_id.required' => 'Le champ titre est requis.',
                'emploi_id.required' => 'Le champ grade est requis.',
                'fao_id.required' => 'Le champ fonction est requis.',
                'Email.required' => 'Le champ email est requis.',
                'Email.email' => 'Veuillez entrer une adresse email valide.',
                'Email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'Email.unique' => 'Cette adresse email est déjà utilisée.','Mot_de_passe.required' => 'Le champ mot de passe est requis.',
                'Mot_de_passe.min' => 'Le mot de passe doit contenir au moins :min caractères.',
                'Mot_de_passe.confirmed' => 'Le mot de passe doit être identique.',
                'Photo.image' => 'Le champ Photo doit être une image.',
                'Photo.mimes' => 'Le champ Photo doit être un fichier de type: jpeg, png, jpg.',
                'Photo.max' => 'Le champ Photo ne doit pas dépasser 3 Mo.',
            ]
        );
        
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

            $atos = new Atos();
            $atos->Email = $request->Email;
            $atos->Matricule = $request->Matricule;
            $atos->Nom = $request->Nom;
            $atos->Prenom = $request->Prenom;
            $atos->Telephone = $request->Telephone;
            $atos->Genre = $request->Genre;
            //$atos->password = $request->Mot_de_passe;
            $atos->structure_id = $request->structure_id;
            $atos->emploi_id = $request->emploi_id;
            $atos->fao_id = $request->fao_id;

                // Update the password only if a new password is provided
        if ($request->filled('Mot_de_passe')) {
            $atos->password = bcrypt($request->Mot_de_passe);
        }

        if ($request->hasFile('Photo')) {
            $file = $request->file('Photo');
            $path = $file->store('photos', 'public');
            if ($atos->Photo) {
                Storage::disk('public')->delete($atos->Photo);
            }
            $atos->Photo = $path;
        }

        $atos->save();

        return redirect()->route('connexion-atos')->with('success', 'Inscription reussi ! Veuillez vous connecter');
    }

    public function connexionAtos()
    {
        return view('public.connexion-atos');
    }

    public function connexionEnseignantAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'password.required' => 'Le champ mot de passe est requis.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Vérifier si un utilisateur avec cet email existe
        $user = Enseignant::where('email', $request->email)->first();
        
        if (!$user) {
            return redirect()->back()
            ->withErrors(['login' => "Cet email n'a pas de compte"])
            ->withInput();
        }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('enseignant')->attempt($credentials)) {
            $request->session()->regenerate();
            $enseignant = Auth::guard('enseignant')->user();
            $redirectRoute = '';

            if ($enseignant->role == 'admin') {
                $redirectRoute = 'admin.index';
            } elseif ($enseignant->role == 'user') {
                $redirectRoute = 'enseignant.profil';
            }

            if (!empty($redirectRoute)) {
                return redirect()->route($redirectRoute)->withMessage("Connexion réussie !");
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function connexionAtosAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'password.required' => 'Le champ mot de passe est requis.',
            ]
        );

        //On retourn tout les erreurs
        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }
        
        // Vérifier si un utilisateur avec cet email existe
        $atos = Atos::where('email', $request->email)->first();
        
        if (!$atos) {
            return redirect()->back()
            ->withErrors(['login' => "Cet email n'a pas de compte"])
            ->withInput();
        }

        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('atos')->attempt($credentials)) {
            $request->session()->regenerate();
            $atos = Auth::guard('atos')->user();
            $redirectRoute = '';

            if ($atos->role == 'admin') {
                $redirectRoute = 'admin.index';
            } elseif ($atos->role == 'user') {
                $redirectRoute = 'atos.profil';
            }

            if (!empty($redirectRoute)) {
                return redirect()->route($redirectRoute)->withMessage("Connexion réussie !");
            }
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function deconnexion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('accueil')
            ->withSuccess('Vous avez été deconnecté avec succès');
    }
}
