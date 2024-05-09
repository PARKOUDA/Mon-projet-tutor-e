<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function inscription()
    {
        return view('auth.inscription-admin');
    }

    public function inscriptionAdminAction(Request $request)
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

    public function connexionAdminAction(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::guard('admin')->attempt($credentials)) {
            $request->session()->regenerate();
    
            return redirect()->intended(route('admin.index'));
        }
    
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
    
    public function logout()
    {
        Auth::guard('admin')->logout();
    
        return redirect('/');
    }
    
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
