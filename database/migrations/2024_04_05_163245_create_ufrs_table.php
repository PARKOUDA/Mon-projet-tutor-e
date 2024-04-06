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
        Schema::create('ufrs', function (Blueprint $table) {
            $table->id();
            $table->string("Nom");
            //crée une contrainte qui ne peut être négative et crée une clé étrangère qui fait reference à l'id de la table grade
            // $table->unsignedBigInteger("grade_id"); 
            // $table->foreign("grade_id")->references("id")->on("grade"); 
            $table->foreignId("structure_id")->constrained()->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ufrs');
    }
};
