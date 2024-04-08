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
        Schema::create('post_structure', function (Blueprint $table) {
            $table->id();
            $table->foreignId("post_id")->constrained()->onDelete("cascade"); 
            $table->foreignId("structure_id")->constrained()->onDelete("cascade"); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pivot_table_post_structure');
    }
};