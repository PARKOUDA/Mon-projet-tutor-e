<?php

namespace App\Http\Controllers\admin;

use App\Models\Ufr;
use App\Models\Atos;
use App\Models\Post;
use App\Models\Role;
use App\Models\Grade;
use App\Models\Titre;
use App\Models\Structure;
use App\Models\Enseignant;
use App\Models\Departement;
use Illuminate\Http\Request;
use App\Http\Requests\AtosRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\EnseignantRequest;
use App\Http\Requests\ModifieEnseignantRequest;
use App\Models\Emploi;
use App\Models\Fao;
use App\Models\Fonction;

class PersonnelsController extends Controller
{
    public function index()
    {
        return view("admin.index");
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
        
        $adminsEnseignants = Enseignant::where('role_id', 1)->get();
        $adminsAtos = Atos::where('role_id', 1)->get();
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
        $enseignant->departement()->attach($request->departement);

        // Vérifier si une image a été soumise
        if ($request->hasFile('Photo')) {
            // Manipuler l'image de l'enseignant
            $image = $request->file('Photo')->store('enseignant', 'public');
            $enseignant->Photo = $image;
            $enseignant->save();
        }
        // Redirigez l'utilisateur vers une autre page
        return redirect()->route('admin.index')->with('success', "Ajout effectuer avec succès");

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
        $enseignant->departement()->sync($request->departement);    

        return redirect()->route('admin.listes.personnels')->with('success', "L'enseignant a été modifié avec succès");

    }

    public function supprimerEnseignant(Enseignant $enseignant) {
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
        return redirect()->route('admin.index')->with('success', "Ajout effectuer avec succès");
            
    }
    //fin pour ajout atos dans le formulaire

    public function profil() {
        return view('admin.personnel.profil');
    }
}
