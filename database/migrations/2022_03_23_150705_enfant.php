<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Enfant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enfants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('accouchement_id')->unsigned();;
            $table->string('nom');
            $table->string('prenom');
            $table->string('sexe');
            $table->string('sein');
            $table->string('cries');
            $table->string('cyanose');
            $table->integer('poids');
            $table->integer('taille');
            $table->integer('apgar1');
            $table->integer('apgar2');
            $table->integer('pc');
            $table->integer('pt');
            $table->integer('pb');
            $table->string('reanime');
            $table->string('commentreanimation');
            $table->string('autre');
            $table->string('premierjour');
            $table->string('allaitement');
            $table->string('groupesanguin');
            $table->timestamps();

            $table->foreign('accouchement_id')
            ->references('id')
            ->on('accouchements')
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
        Schema::dropIfExists('enfants');
    }
}
