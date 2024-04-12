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
        Schema::create('stagiaires', function (Blueprint $table) {
            $table->id();
            $table->string('nom')->nullable(); // Rendre la colonne 'nom' nullable
            $table->string('prenom')->nullable(); // Rendre la colonne 'prenom' nullable
            $table->text('etablissement')->nullable(); // Rendre la colonne 'etablissement' nullable
            $table->string('email')->nullable(); // Rendre la colonne 'email' nullable
            $table->string('tel')->nullable(); // Rendre la colonne 'tel' nullable
            $table->string('service')->nullable(); // Rendre la colonne 'service' nullable
            $table->string('responsable')->nullable(); // Rendre la colonne 'responsable' nullable
            $table->date('date_debut')->nullable();
            $table->date('date_fin')->nullable();
            $table->timestamps();
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stagiaires');
    }
};
