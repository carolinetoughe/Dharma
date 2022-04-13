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
            $table->integer('id_rendezvous')->unsigned();;
            $table->integer('id_user')->unsigned();;
            $table->integer('id_patient')->unsigned();;
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

            $table->foreign('id_rendezvous')
            ->references('id')
            ->on('rendezvous')
            ->onDelete('cascade');
            $table->foreign('id_user')
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
        Schema::dropIfExists('consultations');
    }
}
