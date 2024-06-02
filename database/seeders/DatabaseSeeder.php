<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Departement;
use App\Models\Emploi;
use App\Models\Fao;
use App\Models\Fonction;
use App\Models\Grade;
use App\Models\Role;
use App\Models\Structure;
use App\Models\Titre;
use App\Models\Ufr;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            
            EmploiSeeder::class,
            FonctionSeeder::class,
            UfrSeeder::class,
            DepartementSeeder::class,
            FaoSeeder::class,
            GradeSeeder::class,
            RoleSeeder::class,
            StructureSeeder::class,
            TitreSeeder::class,
         ]);
    }
}
