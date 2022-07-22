<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnes_commandes', function (Blueprint $table) {
            $table->id();
            $table->date('dateLivraison');
            $table->boolean('statutCommande');
            $table->boolean('acceptationCommande');
            $table->unsignedBigInteger('commande_id');
            $table->foreign('commande_id')->references('id')->on('commandes');
            $table->unsignedBigInteger('personne_id');
            $table->foreign('personne_id')->references('id')->on('personnes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personnes_commandes');
    }
};
