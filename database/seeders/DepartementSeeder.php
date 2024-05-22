<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Departement::create([
            'Nom' => 'MPCI'
        ]);
        Departement::create([
            'Nom' => ' SVT'
        ]);
        Departement::create([
            'Nom' => 'SEG'
        ]);
        Departement::create([
            'Nom' => 'MGC'
        ]);
        Departement::create([
            'Nom' => 'AA'
        ]);

        Departement::create([
            'Nom' => 'MET-GH'
        ]);
        Departement::create([
            'Nom' => 'Finance Comptabilité'
        ]);
        Departement::create([
            'Nom' => 'GC'
        ]);
        Departement::create([
            'Nom' => 'GE'
        ]);
        Departement::create([
            'Nom' => 'LM'
        ]);
        Departement::create([
            'Nom' => 'PHILOSOPHIE'
        ]);
        Departement::create([
            'Nom' => 'GEOGRAPHIE'
        ]);
        Departement::create([
            'Nom' => 'HISTOIRE'
        ]);
        Departement::create([
            'Nom' => 'LINGUSTIQUE'
        ]);
        Departement::create([
            'Nom' => 'Psychologie'
        ]);
        Departement::create([
            'Nom' => 'CID'
        ]);
        Departement::create([
            'Nom' => 'Autre'
        ]);
    }
}
