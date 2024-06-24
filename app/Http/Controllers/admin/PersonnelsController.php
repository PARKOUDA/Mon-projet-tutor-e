<?php

namespace App\Http\Controllers\admin;

use App\Models\Fao;
use App\Models\Ufr;
use App\Models\Atos;
use App\Models\Role;
use App\Models\Grade;
use App\Models\Titre;
use App\Models\Emploi;
use App\Models\Fonction;
use App\Models\Structure;
use App\Models\Enseignant;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\AtosRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\EnseignantRequest;
use App\Http\Requests\ModifieAtosRequest;
use App\Http\Requests\ModifieEnseignantRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PersonnelsController extends Controller
{
    public function index()
    {
        return view("admin.index-admin");
    }

    public function profilEnseignant()
    {
        $user = Auth::user();
        $titres = Titre::all();
        $grades = Grade::all();
        $fonctions = Fonction::all();
        $ufrs = Ufr::all();
        $departements = Departement::all();

        return view("profil.enseignant", [
            "titres" => $titres,
            "grades" => $grades,
            "fonctions" => $fonctions,
            "ufrs" => $ufrs,
            "departements" => $departements
        ]);
    }

    public function profilEnseignantAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'Email' => 'required|email|max:255|unique:users,email,' . auth('enseignant')->id(),
                'Mot_de_passe' => 'nullable|min:4|confirmed', // Password is optional, must be confirmed
                'Matricule' => 'required',
                'Nom' => 'required',
                'Prenom' => 'required',
                'Telephone' => 'required',
                'Genre' => 'required',
                'titre_id' => 'required',
                'Photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072', // Photo is optional, must be an image, only jpeg, png, jpg and max size of 3MB
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

        $user = auth('enseignant')->user();
        $idUser = $user->id;
        
        $enseignant =  Enseignant::find($idUser);
        $enseignant->Email = $request->Email;
        $enseignant->Matricule = $request->Matricule;
        $enseignant->Nom = $request->Nom;
        $enseignant->Prenom = $request->Prenom;
        $enseignant->Telephone = $request->Telephone;
        $enseignant->Genre = $request->Genre;
        // $enseignant->password = $request->Mot_de_passe;
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

        return redirect()->back()->with('success', 'Profil editer avec succès');
    }

    public function profil() {
        return view("admin.personnel.profil");
    }

    public function profilAtos()
    {
        $user = Auth::user();
        $emplois = Emploi::all();
        $structures = Structure::all();
        $faos = Fao::all();
        
        return view('profil.atos', [
            "user" => $user,
            "emplois" => $emplois,
            "structures" => $structures,
            "faos" => $faos,
        ]);
    }
    public function profilAtosAction(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'Email' => 'required|email|max:255|unique:users,email,' . auth('enseignant')->id(),
                'Mot_de_passe' => 'nullable|min:4|confirmed', // Password is optional, must be confirmed
                'Matricule' => 'required',
                'Nom' => 'required',
                'Prenom' => 'required',
                'Telephone' => 'required',
                'Genre' => 'required',
                'structure_id' => 'required',
                'Photo' => 'nullable|image|mimes:jpeg,png,jpg|max:3072', // Photo is optional, must be an image, only jpeg, png, jpg and max size of 3MB
                'emploi_id' => 'required',
                'fao_id' => 'required',
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
                'Email.unique' => 'Cette adresse email est déjà utilisée.',
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

        $user = auth('atos')->user();
        $idUser = $user->id;
        
        $atos =  Atos::find($idUser);
        $atos->Email = $request->Email;
        $atos->Matricule = $request->Matricule;
        $atos->Nom = $request->Nom;
        $atos->Prenom = $request->Prenom;
        $atos->Telephone = $request->Telephone;
        $atos->Genre = $request->Genre;
        // $atos->password = $request->Mot_de_passe;
        $atos->structure = $request->structure_id;
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

        return redirect()->back()->with('success', 'Profil editer avec succès');
    }
    // la fonction permet d'afficher tout les enseignants et permet d'effectuer 
    // une recherche d'un enseignant par son nom ou son prenom

    public function personnels(Request $request)
    {
        // Filtrer les enseignants
        $enseignants = Enseignant::query();
        if ($recherche = $request->RechercheEnseignant) {
            $enseignants->where('Nom', 'like', '%' . $recherche . '%')
                        ->orWhere('Prenom', 'like', '%' . $recherche . '%');
        }
    
        // Filtrer les atos
        $personnelsAtos = Atos::query();
        if ($recherche = $request->RechercheAtos) {
            $personnelsAtos->where('Nom', 'like', '%' . $recherche . '%')
                           ->orWhere('Prenom', 'like', '%' . $recherche . '%');
        }
    
        // Filtrer les enseignants avec le rôle admin
        $adminsEnseignants = Enseignant::where('role', 'admin')->get();
    
        // Filtrer les atos avec le rôle admin
        $adminsAtos = Atos::where('role', 'admin')->get();
    
        // Combiner les résultats des admins
        // $adminPersonnels = $adminsEnseignants->merge($adminsAtos);
    
        return view("admin.personnel.index", [
            'enseignants' => $enseignants->paginate(10, '*', 'pageEnseignant'),
            'personnelsAtos' => $personnelsAtos->paginate(10, '*', 'pageAtos'),
            'adminsAtos' => $adminsAtos,
            'adminsEnseignants' => $adminsEnseignants
        ]);
    }
    
    public function ajoutPersonnel()
    {
        return view("admin.personnel.ajout");
    }

    //debut ajout enseignant à travers le formulaire
    public function ajoutEnseignant()
    {
        return view('admin.personnel.ajout-enseigant', [
            "grades" => Grade::pluck('Nom', 'id'),
            "fonctions" => Fonction::pluck('Nom', 'id'),
            "ufrs" => Ufr::pluck('Nom', 'id'),
            'titres' => Titre::pluck('Nom', 'id'),
            'roles' => Role::pluck('Nom', 'id'),
            "departements" => Departement::pluck('Nom', 'id'),
        ]);
    }

    public function sauvegardeEnseignant(EnseignantRequest $request) {
         // Créer l'enseignant avec les données validées
        $enseignant = Enseignant::create($request->validated());

        // Attacher les départements à l'enseignant
        // $enseignant->departement()->attach($request->departement);

        // Vérifier si une image a été soumise
        if ($request->hasFile('Photo')) {
            // Manipuler l'image de l'enseignant
            $image = $request->file('Photo')->store('enseignant', 'public');
            if ($enseignant->Photo) {
                Storage::disk('public')->delete($enseignant->Photo);
            }
            $enseignant->Photo = $image;
            $enseignant->save();
        }
        // Redirigez l'utilisateur vers une autre page
        return redirect()->route('admin.listes.personnels')->with('success', "Ajout effectuer avec succès");

    }
    //fin pour ajout enseignant dans le formulaire

    public function modifieEnseignant(Enseignant $enseignant) {
        return view('admin.personnel.modifier-enseignant', [
            'enseignant' => $enseignant,
            'titres' => Titre::pluck('Nom','id'),
            'grades' => Grade::pluck('Nom','id'),
            'fonctions' => Fonction::pluck('Nom','id'),
            'ufrs' => Ufr::pluck('Nom','id'),
            'roles' => Role::pluck('Nom','id'),
            'departements' => Departement::pluck('Nom','id'),
        ]);
    }

    public function modifSauveEnseignant(ModifieEnseignantRequest $request, Enseignant $enseignant) {
        // Désactiver temporairement la vérification d'unicité pour l'email
        $enseignant->update($request->validated());

        // Mettre à jour les départements de l'enseignant
       // $enseignant->departement()->sync($request->departement);
      
        

        // Gestion de la mise à jour de la photo de l'enseignant
        if ($request->hasFile('Photo')) {
            if ($enseignant->Photo) {
                Storage::disk('public')->delete($enseignant->Photo);
            }
            // Enregistrer la nouvelle photo
            $photoPath = $request->file('Photo')->store('enseignant', 'public');
            $enseignant->update(['Photo' => $photoPath]);
        }


        return redirect()->route('admin.listes.personnels')->with('success', "L'enseignant a été modifié avec succès");

    }

    public function supprimerEnseignant(Enseignant $enseignant) {
        // Supprimer les relations avec les départements
        // $enseignant->departement()->detach();

        if ($enseignant->Photo) {
            Storage::disk('public')->delete($enseignant->Photo);
        }
        $enseignant->delete();
        return redirect()->route('admin.listes.personnels')->with('success', "L'enseignant a été supprimer avec succès");
    }

    //debut ajout atos à travers le formulaire
    public function ajoutAtos()
    {
        return view('admin.personnel.ajout-atos', [
            "structures" => Structure::pluck('Nom', 'id'),
            "emplois" => Emploi::pluck('Nom', 'id'),
            "faos" => Fao::pluck('Nom', 'id'),
            "roles" => Role::pluck('Nom', 'id'),
        ]);
    }

    public function sauvegardeAtos(AtosRequest $request) {
         // Créer l'atos avec les données validées
         $atos = Atos::create($request->validated());

          // Vérifier si une image a été soumise
        if ($request->hasFile('Photo')) {
            // Manipuler l'image de l'atos
            $image = $request->file('Photo')->store('atos', 'public');
            if ($atos->Photo) {
                Storage::disk('public')->delete($atos->Photo);
            }
            $atos->Photo = $image;
            $atos->save();
        }   
        // Redirigez l'utilisateur vers une autre page
        return redirect()->route('admin.listes.personnels')->with('success', "Ajout effectuer avec succès");
            
    }
    //fin pour ajout atos dans le formulaire

    public function modifieAtos(Atos $atos) {
        return view('admin.personnel.modifier-atos', [
            'atos' => $atos,
            'emplois' => Emploi::pluck('Nom','id'),
            'structure' => Structure::pluck('Nom','id'),
            'faos' => Fao::pluck('Nom','id'),
            'roles' => Role::pluck('Nom','id'),
        ]);
    }

    public function modifSauveAtos(ModifieAtosRequest $request, Atos $atos) {
        // Désactiver temporairement la vérification d'unicité pour l'email
        $atos->update($request->validated());  

        // Gestion de la mise à jour de la photo de l'enseignant
        if ($request->hasFile('Photo')) {
            // Supprimer l'ancienne photo si elle existe
            if ($atos->Photo) {
                Storage::disk('public')->delete($atos->Photo);
            }
            
            // Enregistrer la nouvelle photo
            $photoPath = $request->file('Photo')->store('atos', 'public');
            $atos->update(['Photo' => $photoPath]);
        }

        return redirect()->route('admin.listes.personnels')->with('success', "L'atos a été modifié avec succès");

    }

    public function supprimerAtos(Atos $atos) {

        if ($atos->Photo) {
            Storage::disk('public')->delete($atos->Photo);
        }

        $atos->delete();
        return redirect()->route('admin.listes.personnels')->with('success', "L'atos a été supprimer avec succès");
    }

}
