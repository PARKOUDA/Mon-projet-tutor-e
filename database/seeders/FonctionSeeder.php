<?php

namespace Database\Seeders;

use App\Models\Fonction;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FonctionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Fonction::create([
            'Nom' => 'Coordonateur/trice'
            ]
        );
        Fonction::create([
            'Nom' => 'Chef de departement'
            ]
        ); 
        Fonction::create([
            'Nom' => 'Directeur/trice'
            ]
        ); 
        Fonction::create([
            'Nom' => 'Directeur/trice Adjoint(e)'
            ]
        ); 
        Fonction::create([
            'Nom' => "President(e) de l'université"
            ]
        ); 
        Fonction::create([
            'Nom' => "Vice President(e) de l'université"
            ]
        ); 
        Fonction::create([
            'Nom' => 'Chef de cabinet'
            ]
        ); 
        Fonction::create([
            'Nom' => 'aucun(e)'
            ]
        ); 
    }
}
