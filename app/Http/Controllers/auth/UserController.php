<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function inscriptionUser()
    {
        return view('auth.inscription-user');
    }

    public function inscriptionUserAction(Request $request)
    {
        #validation du formulaire
        $validator = Validator::make(
            $request->all(),
            [
                'name' => 'required',
                'email' => 'required|email|max:255|unique:users',
                'password' => 'required|min:4',
            ],
            [
                'name.required' => 'Le champ nomcomplet est requis.',
                'email.required' => 'Le champ email est requis.',
                'email.email' => 'Veuillez entrer une adresse email valide.',
                'email.max' => 'L\'adresse email ne doit pas dépasser :max caractères.',
                'email.unique' => 'Cette adresse email est déjà utilisée.',
                'password.required' => 'Le champ mot de passe est requis.',
                'password.min' => 'Le mot de passe doit contenir au moins :min caractères.',
            ]
        );

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $admin = Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $admin->save();

        return redirect()->route('connexion-user')->with('success', 'Inscription reussi ! veuillez vous connecter');
    }

    public function connexionAdmin()
    {
        return view('auth.connexion-admin');
    }

    public function connexionAdminAction(Request $request)
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
        $user = Admin::where('email', $request->email)->first();
        
        if (!$user) {
            return redirect()->back()
            ->withErrors(['login' => "Cet email n'a pas de compte"])
            ->withInput();
        }

        //On le connecte ici
        if (!Auth::guard('admin')->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->back()
            ->withErrors(['login' => 'Email ou mot de passe est incorrect'])
            ->withInput();
        }
        
        $request->session()->regenerate();

        //On voie sur quel page on dois le redirigé
        return redirect()->route('admin.index')->withMessage("Connexion réussie !");
    }

    public function deconnexion(Request $request)
    {
        Auth::guard('admin')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withSuccess('Vous avez été deconnecté avec succès');
    }
    
    public function dashboard()
    {
        return view('admin.index-admin');
    }
}

