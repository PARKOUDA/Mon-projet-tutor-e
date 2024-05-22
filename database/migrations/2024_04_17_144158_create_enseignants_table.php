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
        Schema::create('enseignants', function (Blueprint $table) {
            $table->id();
            $table->string("Matricule")->unique();
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Telephone");
            $table->string("Genre");
            $table->string("role")->default("user");
            $table->string("Email")->unique();
            $table->string("password");
            $table->string("Photo")->nullable();
            //crée une contrainte qui ne peut être négative et crée une clé étrangère qui fait reference à l'id de la table grade
            // $table->unsignedBigInteger("grade_id"); 
            // $table->foreign("grade_id")->references("id")->o9n("grade"); 
            $table->foreignId("grade_id")->constrained(); 
            $table->foreignId("fonction_id")->constrained(); 
            $table->foreignId("ufr_id")->constrained(); 
            $table->foreignId("departement_id")->constrained();
            $table->foreignId("titre_id")->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enseignants');
    }
};
