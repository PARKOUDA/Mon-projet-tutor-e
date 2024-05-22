<?php

namespace Database\Seeders;

use App\Models\Grade;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Grade::create([
            'Nom' => 'Assistant(e)'
            ]
        ); 
        Grade::create([
            'Nom' => 'Maitre assistant(e)'
            ]
        ); 
        Grade::create([
            'Nom' => 'Maitre de conference'
            ]
        ); 
        Grade::create([
            'Nom' => 'Professeur titulaire'
            ]
        );
        Grade::create([
            'Nom' => 'Autre'
            ]
        );

    }
}
