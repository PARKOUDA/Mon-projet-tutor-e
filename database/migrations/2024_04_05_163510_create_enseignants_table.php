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
            $table->string("Matricule");
            $table->string("Nom");
            $table->string("Prenom");
            $table->string("Telephone");
            $table->string("Email");
            $table->string("Mot de passe");
            $table->enum("Titre",["Enseignant chercheur", "Enseignant à temps plein"]);
            $table->string("Photo");
            //crée une contrainte qui ne peut être négative et crée une clé étrangère qui fait reference à l'id de la table grade
            // $table->unsignedBigInteger("grade_id"); 
            // $table->foreign("grade_id")->references("id")->on("grade"); 
            $table->foreignId("grade_id")->constrained()->nullable(); 
            $table->foreignId("post_id")->constrained()->nullable(); 
            $table->foreignId("ufr_id")->constrained()->nullable(); 
            $table->enum("role", ["utilisateur", "administrateur"])->default("utilisateur");
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
