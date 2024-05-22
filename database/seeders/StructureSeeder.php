<?php

namespace Database\Seeders;

use App\Models\Structure;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StructureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Structure::create([
            'Nom' => 'Présidence'
        ]);
        Structure::create([
            'Nom' => 'BED'
        ]); 
        Structure::create([
            'Nom' => 'BCM'
        ]);
        Structure::create([
            'Nom' => 'La direction centrale des archives (DCA)'
        ]);
        Structure::create([
            'Nom' => 'La direction des études et de la planification(DEP)'
        ]);
        Structure::create([
            'Nom' => 'La direction de la presse universitaire (DPU)'
        ]);
        Structure::create([
            'Nom' => 'La librairie universitaire (LU)'
        ]);
        Structure::create([
            'Nom' => 'RM'
        ]);
        Structure::create([
            'Nom' => 'La direction des ressources humaines (DRH)'
        ]);
        Structure::create([
            'Nom' => "L'atélier central de maintenance (ACM)"
        ]);
        Structure::create([
            'Nom' => "La direction de l'administration des finances (DAF)"
        ]);
        Structure::create([
            'Nom' => 'DSCDVS'
        ]);
        Structure::create([
            'Nom' => 'La bibliothèque universitaire centrale (B.U.C)'
        ]);
        Structure::create([
            'Nom' => 'BUO'
        ]);
        Structure::create([
            'Nom' => 'ED-LACOASH'
        ]);
        Structure::create([
            'Nom' => 'ED-ST'
        ]);
        Structure::create([
            'Nom' => 'DRE'
        ]);
        Structure::create([
            'Nom' => 'DED'
        ]);
        Structure::create([
            'Nom' => 'DCU'
        ]);
        Structure::create([
            'Nom' => 'DPE'
        ]);
        Structure::create([
            'Nom' => 'DSI'
        ]);
        Structure::create([
            'Nom' => 'CPU'
        ]);
        Structure::create([
            'Nom' => 'DAOI'
        ]);
        Structure::create([
            'Nom' => 'DSCDVS'
        ]);
        Structure::create([
            'Nom' => 'DIP'
        ]);
        Structure::create([
            'Nom' => 'DFPCR'
        ]);
        Structure::create([
            'Nom' => 'UFR-ST'
        ]);
        Structure::create([
            'Nom' => 'UFR-SEG'
        ]);
        Structure::create([
            'Nom' => 'UFR-LSH'
        ]);
        Structure::create([
            'Nom' => 'IUT'
        ]);
        Structure::create([
            'Nom' => 'Autre'
        ]);
    }
}
