<?php

namespace Database\Seeders;

use App\Models\Titre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Titre::create([
            'Nom' => 'Enseignant chercheur'
        ]);
        Titre::create([
            'Nom' => 'Enseignant à temps plein'
        ]);
    }
}
