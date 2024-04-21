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
            'Nom' => 'ST'
        ]);
        Ufr::create([
            'Nom' => 'SEG'
        ]);
        Ufr::create([
            'Nom' => 'UIT'
        ]);
        Ufr::create([
            'Nom' => 'LSH'
        ]);
        Ufr::create([
            'Nom' => 'Aucun(e)'
        ]);
    }
}
