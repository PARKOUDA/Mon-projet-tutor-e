<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use App\Models\Atos;
use App\Models\Enseignant;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Collection;

class PublicController extends Controller
{
     public function pageDaccueil()
     {
        return view('public.accueil');
     }
    // Méthode pour paginer une collection
     // Méthode pour paginer une collection
     public function paginate($items, $perPage = 3, $page = null, $options = [])
     {
         $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
         $items = $items instanceof Collection ? $items : Collection::make($items);
         return new LengthAwarePaginator(
             $items->forPage($page, $perPage),
             $items->count(),
             $perPage,
             $page,
             $options
         );
     }
 
     public function enseignantListe(Request $request)
     {
        $query = Enseignant::query();

        // Vérifier s'il y a une recherche
        if ($request->has('recherche_personnel_enseignant')) {
            // Faire la recherche par nom, prénom et email
            $search = $request->input('recherche_personnel_enseignant');
            $query->where('Nom', 'LIKE', "%$search%")
                  ->orWhere('Prenom', 'LIKE', "%$search%")
                  ->orWhere('Email', 'LIKE', "%$search%");
        }

        // Récupérer la liste paginée des enseignants après la recherche
        $enseignants = $query->paginate(9);
        $personnels = $enseignants;
 
         return view('public.listeenseignant', ['personnels' => $personnels]);
     }

    public function atosListe(Request $request)
    {
        $query = Atos::query();

        // Vérifier s'il y a une recherche
        if ($request->has('recherche_personnel_atos')) {
            // Faire la recherche par nom, prénom et email
            $search = $request->input('recherche_personnel_atos');
            $query->where('Nom', 'LIKE', "%$search%")
                  ->orWhere('Prenom', 'LIKE', "%$search%")
                  ->orWhere('Email', 'LIKE', "%$search%");
        }

        // Récupérer la liste paginée des enseignants après la recherche
        $atos = $query->paginate(9);
        $personnels = $atos;

        return view('public.listeatos', ['personnels' => $personnels]);
    }

    public function inscriptionOption()
    {
        return view('public.inscription-option');
    }

    public function connexionOption()
    {
        return view('public.connexion-option');
    }
}
