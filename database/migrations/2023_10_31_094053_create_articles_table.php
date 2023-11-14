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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('description');
            $table->integer('poids');
            $table->string('couleur');
            $table->decimal('pirx_achat','10','6');
            $table->unsignedBigInteger('fournisseur_id'); // Fix the typo here
            $table->foreign('fournisseur_id')->references('id')->on('fornisseurs')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
