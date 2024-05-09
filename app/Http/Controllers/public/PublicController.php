<?php

namespace App\Http\Controllers\public;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function pageDacceuil()
    {
        return view('public.accueil');
    }

    public function enseignantListe()
    {
        return view('public.listeenseignant');
    }

    public function atosListe()
    {
        return view('public.listeatos');
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
