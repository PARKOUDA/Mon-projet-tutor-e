<?php

namespace App\Http\Controllers\auth;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except('deconnexion');
    }

    protected function guard()
    {
        return Auth::guard('admin');
    }

    // public function inscription()
    // {
    //     return view('auth.inscription');
    // }

    public function inscriptionAction(Request $request)
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

        return redirect()->route('connexion')->with('success', 'Inscription reussi ! veuillez vous connecter');
    }

    public function connexion()
    {
        return view('auth.connexion');
    }

    public function connexionAction(Request $request)
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
        if (!Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            return redirect()->back()
            ->withErrors(['login' => 'Mot de passe est incorrect'])
            ->withInput();
        }
        
        dd($request->all());
        $request->session()->regenerate();

        //On voie sur quel page on dois le redirigé
        return redirect()->route('admin.index')->withMessage("Connexion réussie !");
        // $user = Auth::user();
        // $redirectRoute = '';

        // if ($user->role == 'admin') {
        //     $redirectRoute = 'private.admintableaudebord';
        // } elseif ($user->role == 'abonne') {
        //     $redirectRoute = 'private.abonnetableaudebord';
        // }

        // if (!empty($redirectRoute)) {
        //     return redirect()->route($redirectRoute)->withMessage("Connexion réussie !");
        // }
    }


    // public function deconnexion(Request $request)
    // {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return redirect()->route('index')
    //         ->withSuccess('Vous avez été deconnecté avec succès');
    // }

    public function logout(Request $request)
    {
        //logout the admin…
        Auth::guard('admin')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();
        return $this->loggedOut($request) ?: redirect()->route('admin-index');
    }
}
