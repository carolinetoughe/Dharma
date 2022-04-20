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
            $table->integer('soignant_id')->unsigned();;
            $table->integer('secretaire_id')->unsigned();;
            $table->integer('patient_id')->unsigned();;
            $table->string('motif');
            $table->string('heure');
            $table->string('statut');
            $table->timestamps();

            $table->foreign('soignant_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('secretaire_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade');
            $table->foreign('patient_id')
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
