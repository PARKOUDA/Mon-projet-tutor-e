<?php

namespace Database\Seeders;

use App\Models\Emploi;
use App\Models\Fonction;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Emploi::create([
            'Nom' => 'Attaché de direction'
        ]);
        Emploi::create([
            'Nom' => 'CISU'
        ]);
        Emploi::create([
            'Nom' => 'AASU'
        ]);
        Emploi::create([
            'Nom' => 'Agent de liaison'
        ]); Emploi::create([
            'Nom' => 'AISU'
        ]);
        Emploi::create([
            'Nom' => 'Instituteur/trice certifié'
        ]); Emploi::create([
            'Nom' => 'CASU'
        ]);
        Emploi::create([
            'Nom' => 'IEPD'
        ]); Emploi::create([
            'Nom' => 'Aide-bibliothécaire'
        ]);
        Emploi::create([
            'Nom' => 'Aide mécanisien(e)'
        ]); Emploi::create([
            'Nom' => 'Chauffeur'
        ]);
        Emploi::create([
            'Nom' => 'Agent de liaison'
        ]); Emploi::create([
            'Nom' => 'Adjoint(e) administratif'
        ]);
        Emploi::create([
            'Nom' => 'Adjoint(e) de secretariat'
        ]); Emploi::create([
            'Nom' => 'Conseiller/ière GRH'
        ]);
         Emploi::create([
            'Nom' => "Conseiller d'Orientation Scolaire et Professionnelle"
        ]);
        Emploi::create([
            'Nom' => 'Administrateur civil'
        ]); Emploi::create([
            'Nom' => "Conseiller/ière d'Education"
        ]);
        Emploi::create([
            'Nom' => "Archiviste d'Etat"
        ]); Emploi::create([
            'Nom' => 'Agent de burreau'
        ]);
        Emploi::create([
            'Nom' => 'Comptable'
        ]); Emploi::create([
            'Nom' => 'Reprographe'
        ]);
        Emploi::create([
            'Nom' => 'Inspecteur/trice du Trésor'
        ]); Emploi::create([
            'Nom' => 'Secretaire de direction'
        ]);
        Emploi::create([
            'Nom' => 'Manœuvre'
        ]); Emploi::create([
            'Nom' => 'Aide électricien'
        ]);
        Emploi::create([
            'Nom' => 'Ingén des trav informatique'
        ]); Emploi::create([
            'Nom' => 'Menuisier'
        ]);
        Emploi::create([
            'Nom' => 'Bibliothécaire'
        ]); Emploi::create([
            'Nom' => 'Assistant(e)/GRH'
        ]);
        Emploi::create([
            'Nom' => 'Contrôleur du Trésor'
        ]); Emploi::create([
            'Nom' => 'Technicien(e) supérieur de maintenance en froid et climatisation'
        ]);
        Emploi::create([
            'Nom' => 'Plombier'
        ]); Emploi::create([
            'Nom' => 'Gestionnaire financier'
        ]);
        Emploi::create([
            'Nom' => 'Institeur/trice principal'
        ]);
        Emploi::create([
            'Nom' => 'Analyste programmeur'
        ]);
        Emploi::create([
            'Nom' => 'Agent de protocole'
        ]);
        Emploi::create([
            'Nom' => 'PCLC'
        ]);
        Emploi::create([
            'Nom' => 'Autre'
        ]);
    }
}
