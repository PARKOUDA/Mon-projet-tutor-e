<?php

namespace Database\Seeders;

use App\Models\Departement;
use App\Models\Ufr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Assuming you already have UFRs created from UfrSeeder

        $ufrSt = Ufr::where('Nom', 'UFR-ST')->first()->id;
        $ufrSeg = Ufr::where('Nom', 'UFR-SEG')->first()->id;
        $iut = Ufr::where('Nom', 'IUT')->first()->id;
        $ufrLsh = Ufr::where('Nom', 'UFR-LSH')->first()->id;
        $autre = Ufr::where('Nom', 'Autre')->first()->id;

        // Create departments
        Departement::create(['Nom' => 'Mathématique Physique Chimie et Informatique (MPCI)', 'ufr_id' => $ufrSt]);
        Departement::create(['Nom' => 'Science de la Vie et de la Terre (SVT)', 'ufr_id' => $ufrSt]);
        Departement::create(['Nom' => 'Science Economique et Gestion (SEG)', 'ufr_id' => $ufrSeg]);
        Departement::create(['Nom' => 'Marketing et Gestion Commerciale (MGC)', 'ufr_id' => $ufrSeg]);
        Departement::create(['Nom' => 'Assistance Administrative (AA)', 'ufr_id' => $iut]);
        Departement::create(['Nom' => 'Management des Entreprise Touristique et Gestion Hotélière (MET-GH)', 'ufr_id' => $iut]);
        Departement::create(['Nom' => 'Finance Comptabilité', 'ufr_id' => $ufrSeg]);
        Departement::create(['Nom' => 'Génie Civil (GC)', 'ufr_id' => $iut]);
        Departement::create(['Nom' => 'Génie Electrique (GE)', 'ufr_id' => $iut]);
        Departement::create(['Nom' => 'Lettre moderne (LM)', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'PHILOSOPHIE', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'GEOGRAPHIE', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'HISTOIRE', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'LINGUSTIQUE', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'Psychologie', 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => "Science de l'Information et de documentation (SID)", 'ufr_id' => $ufrLsh]);
        Departement::create(['Nom' => 'Autre', 'ufr_id' => $autre]);
    }
}
