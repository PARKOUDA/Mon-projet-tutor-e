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

class PersonnelsController extends Controller
{
    public function index()
    {
        return view("admin.index-admin");
    }

    public function profilEnseignant()
    {
        return view("profil.enseignant");
    }

    public function profilAtos()
    {
        return view("profil.atos");
    }

    public function profil() {

        $user = Auth::user();
        
        return view('admin.personnel.profil', ["user" => $user]);
    }

    // la fonction permet d'afficher tout les enseignants et permet d'effectuer 
    // une recherche d'un enseignant par son nom ou son prenom

    public function personnels(Request $request)
    {
        $enseignants = Enseignant::query();
        if ($recherche = $request->RechercheEnseignant) {
            $enseignants->where('Nom', 'like', '%' . $recherche . '%')
                ->orWhere('Prenom', 'like', '%' . $recherche . '%');
        }

        // la fonction permet d'afficher tout les atos et permet d'effectuer 
        // une recherche d'un atos par son nom ou son prenom

        $personnelsAtos = Atos::query();
        if ($recherche = $request->RechercheAtos) {
            $personnelsAtos->where('Nom', 'like', '%' . $recherche . '%')
                ->orWhere('Prenom', 'like', '%' . $recherche . '%');
        }

        // la fonction permet d'afficher tout les adminsEnseignants et adminsAtos en effectuant
        
        $adminsEnseignants = Enseignant::all();
        $adminsAtos = Atos::all();
        return view("admin.personnel.index", [
            'enseignants' => $enseignants->paginate(10, '*', 'pageEnseignant'),
            'personnelsAtos' => $personnelsAtos->paginate(10, '*', 'pageAtos'),
            'adminsEnseignants' => $adminsEnseignants,
            'adminsAtos' => $adminsAtos

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
            // Supprimer l'ancienne photo si elle existe
            Storage::disk('public')->delete($enseignant->Photo);

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
            Storage::disk('public')->delete($atos->Photo);
            
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
