<?php

namespace Database\Seeders;

use App\Models\Ufr;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UfrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ufr::create([
            'Nom' => 'UFR-ST'
        ]);
        Ufr::create([
            'Nom' => 'UFR-SEG'
        ]);
        Ufr::create([
            'Nom' => 'IUT'
        ]);
        Ufr::create([
            'Nom' => 'UFR-LSH'
        ]);
        Ufr::create([
            'Nom' => 'Autre'
        ]);
    }
}
