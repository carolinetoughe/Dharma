<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Rendezvous extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rendezvous', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('daterdv');
            $table->integer('id_soignant')->unsigned();;
            $table->integer('id_secretaire')->unsigned();;
            $table->integer('id_patient')->unsigned();;
            $table->string('motif');
            $table->string('heure');
            $table->string('statut');
            $table->timestamps();

            $table->foreign('id_soignant')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('id_secretaire')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('id_patient')
            ->references('id')
            ->on('patients')
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
        Schema::dropIfExists('rendezvous');
    }
}
