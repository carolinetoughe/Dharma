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
            $table->integer('consultation_id');
            $table->integer('chambre_id');
            $table->integer('fichesoin_id');
            $table->Date('datedebut');
            $table->Date('datefin');
            $table->string('motif');
            $table->string('statut');
            $table->integer('sejour');
            $table->timestamps();

            $table->foreign('consultation_id')
            ->references('id')
            ->on('consultations')
            ->onDelete('cascade');

            $table->foreign('chambre_id')
            ->references('id')
            ->on('chambres')
            ->onDelete('cascade');
            $table->foreign('fichesoin_id')
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
