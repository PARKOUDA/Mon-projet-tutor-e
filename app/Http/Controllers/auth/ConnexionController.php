<?php

namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ConnexionEnseignantRequest;

class ConnexionController extends Controller
{
    public function __construct() {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:enseignant')->except('logout');
    }
    public function connexionEnseignant() {
        return view('auth.enseignant.connexion-enseignant');
    }

    // public function verifieEnseignant(Request $request) {
    //     $credentials = $request->only('Email', 'Mot_de_passe');

    //     if (Auth::guard('enseignant')->attempt($credentials)) {
    //         // Authentification réussie
            
    //         //dd(Auth::id());
    //         // Récupérer l'ID de l'utilisateur connecté
    //         $userId = Auth::id();

    //         // Regénérer la session pour des raisons de sécurité
    //         $request->session()->regenerate();
    
    //         // Vérifier le rôle de l'enseignant authentifié
    //         if (Auth::user()->role_id == 1) {
    //             return redirect()->route('admin.index')->with('success', 'Vous êtes connecté en tant qu\'administrateur');
    //         } else {
    //             return redirect()->route('admin.personnel.profil')->with('success', 'Vous êtes connecté en tant que personnel');
    //         }    
    //     }
    
    //     // Si l'authentification échoue, retourner à la page de connexion avec une erreur
    //     return redirect()->route('auth.connexion.enseignant')->withErrors([
    //         'Email' => 'Vous avez fourni des informations d\'identification incorrectes'
    //     ]);
    // }

    public function verifieEnseignant(Request $request) {
        $credentials = $request->only('Email', 'Mot_de_passe');
    
        if (Auth::guard('enseignant')->attempt($credentials)) {
            // Authentification réussie
            dd('Authentification réussie pour l\'utilisateur avec Email: ' . $credentials['Email']);
            Log::info('Authentification réussie pour l\'utilisateur avec Email: ' . $credentials['Email']);
            // ...
        } else {
            // Authentification échouée
            dd('Authentification échouée pour l\'utilisateur avec Email: ' . $credentials['Email']);
            Log::warning('Authentification échouée pour l\'utilisateur avec Email: ' . $credentials['Email']);
            // ...
        }
        // ...
    }

    public function connexionAtos() {
        return view('auth.atos.connexion-atos');
    }

    public function verifieAtos(Request $request) {
        $credentials = $request->only('Email', 'Mot_de_passe');

        if (Auth::guard('atos')->attempt($credentials)) {
            
        }
    }
}
