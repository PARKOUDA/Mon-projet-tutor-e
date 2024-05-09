<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('atos', function (Blueprint $table) {
            $table->id();
            $table->string("Matricule");
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Telephone");
            $table->string("Genre");
            $table->string("role");
            $table->string("Email")->unique();
            $table->string("Mot_de_passe");
            $table->string("Photo")->nullable();
            //crée une contrainte qui ne peut être négative et crée une clé étrangère qui fait reference à l'id de la table grade
            // $table->unsignedBigInteger("grade_id"); 
            // $table->foreign("grade_id")->references("id")->on("grade"); 
            $table->foreignId("structure_id")->constrained(); 
            $table->foreignId("fao_id")->constrained(); 
            $table->foreignId("emploi_id")->constrained(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('atos');
    }
};