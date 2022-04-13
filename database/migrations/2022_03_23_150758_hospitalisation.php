<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Hospitalisation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospitalisations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('id_consultation');
            $table->integer('id_chambre');
            $table->integer('id_fichesoin');
            $table->Date('datedebut');
            $table->Date('datefin');
            $table->string('motif');
            $table->string('statut');
            $table->integer('sejour');
            $table->timestamps();

            $table->foreign('id_consultation')
            ->references('id')
            ->on('consultations')
            ->onDelete('cascade');

            $table->foreign('id_chambre')
            ->references('id')
            ->on('chambres')
            ->onDelete('cascade');
            $table->foreign('id_fichesoin')
            ->references('id')
            ->on('fichesoins')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospitalisations');
    }
}
