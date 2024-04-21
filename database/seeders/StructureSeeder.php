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
            'Nom' => 'DCA'
        ]);
        Structure::create([
            'Nom' => 'DEP'
        ]);
        Structure::create([
            'Nom' => 'DPU'
        ]);
        Structure::create([
            'Nom' => 'LU'
        ]);
        Structure::create([
            'Nom' => 'RM'
        ]);
        Structure::create([
            'Nom' => 'DRH'
        ]);
        Structure::create([
            'Nom' => 'ACM'
        ]);
        Structure::create([
            'Nom' => 'DAF'
        ]);
        Structure::create([
            'Nom' => 'DSCDVS'
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
            'Nom' => 'DSCDVS'
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
    }
}
