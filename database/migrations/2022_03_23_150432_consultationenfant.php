<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consultationenfant extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    { Schema::create('consultationenfants', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->integer('enfant_id')->unsigned();;
        $table->integer('user_id')->unsigned();;
        $table->string('piedbot');
        $table->integer('poids');
        $table->integer('perimetrecranien');
        $table->integer('taille');
        $table->integer('temperature');
        $table->integer('freqcard');
        $table->integer('freqrespi');
        $table->string('peau');
        $table->string('tete');
        $table->string('thorax');
        $table->string('abdo');
        $table->string('extrem')
        ;$table->string('reflexe');
        $table->string('commentaireonsult');

        $table->timestamps();

        $table->foreign('enfant_id')
            ->references('id')
            ->on('enfants')
            ->onDelete('cascade');
            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('consultationenfants');
    }
}
