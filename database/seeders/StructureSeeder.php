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
            'Nom' => "Le Conseil d'Administration (CA)"
        ]); 
        Structure::create([
            'Nom' => 'Le Conseil de la Formation et dele Vie universitaire (CFVU) '
        ]); 
        Structure::create([
            'Nom' => 'Le Conseil Scientifique (CS)'
        ]); 
        Structure::create([
            'Nom' => 'Présidence'
        ]);
        Structure::create([
            'Nom' => "La Cellule Interne d'Assurance Qualité (CAIQ)"
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
            'Nom' => 'La direction des ressources humaines (DRH)'
        ]);
        Structure::create([
            'Nom' => "L'atélier central de maintenance (ACM)"
        ]);
        Structure::create([
            'Nom' => "La direction de l'administration des finances (DAF)"
        ]);
        Structure::create([
            'Nom' => "La direction de la recherche scientifique et de la promotion de 
            l'expertise universitaire (DRSEU)"
        ]);
        Structure::create([
            'Nom' => 'La bibliothèque universitaire centrale (B.U.C)'
        ]);
        Structure::create([
            'Nom' => 'La direction des études de la planification(DEP)'
        ]);
        Structure::create([
            'Nom' => 'ED-LACOASH'
        ]);
        Structure::create([
            'Nom' => 'Ecole doctoral de ST (ED-ST)'
        ]);
        Structure::create([
            'Nom' => 'Les direction des écoles doctorales (DED)'
        ]);
        Structure::create([
            'Nom' => 'La direction de la coopérations universitaire (DCU)'
        ]);
        Structure::create([
            'Nom' => 'La direction de la promotion des enseignants et des relations
            avec le CAMES (DPE/CAMES)'
        ]);
        Structure::create([
            'Nom' => 'La direction des services informatiques (DSI)'
        ]);
        Structure::create([
            'Nom' => 'Le centre de pédagogie universitaire (CPU)'
        ]);
        Structure::create([
            'Nom' => "La direction des affaires académiques,
             de l'orientation et de l'informatique (DAOI)"
        ]);
        Structure::create([
            'Nom' => 'La direction des sports, de la culture, du dialogue et de
             la vie sociale (DSCDVS)'
        ]);
        Structure::create([
            'Nom' => 'La direction des innovations pédagogiques (DIP)'
        ]);
        Structure::create([
            'Nom' => 'La direction de la formation professionnelle et continue, et des 
            relations avec des entreprises (DFPCRE)'
        ]);
        Structure::create([
            'Nom' => 'Unité de Formation et de Recherche en Science et Technologique(UFR-ST)'
        ]);
        Structure::create([
            'Nom' => 'Unité de Formation et de Recherche en Science Economique et Gestion(UFR-SEG)'
        ]);
        Structure::create([
            'Nom' => 'Unité de Formation et de Recherche en Lettre et Science Humaine(UFR-LSH)'
        ]);
        Structure::create([
            'Nom' => 'Institut Universitaire et Technique (IUT)'
        ]);
        Structure::create([
            'Nom' => 'Autre'
        ]);
    }
}
