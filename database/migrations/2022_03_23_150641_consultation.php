<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Consultation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->integer('rendezvous_id')->unsigned();;
            $table->integer('user_id')->unsigned();;
            $table->integer('patient_id')->unsigned();;
            $table->Integer('pressionarterielle');
            $table->Integer('poids');
            $table->string('cicatrice');
            $table->integer('volumeuterien');
            $table->string('saignement');
            $table->string('fievre');
            $table->string('douleurs');
            $table->string('contractions');
            $table->integer('coeurfoetal');
            $table->Integer('col');
            $table->timestamps();

            $table->foreign('rendezvous_id')
            ->references('id')
            ->on('rendezvous')
            ->onDelete('cascade');
            $table->foreign('user_id')
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
        Schema::dropIfExists('consultations');
    }
}
