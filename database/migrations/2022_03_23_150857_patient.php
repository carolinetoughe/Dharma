<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Patient extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id')->unsigned();;
            $table->integer('taille');
            $table->string('profession');
            $table->integer('grossesseanterieure');
            $table->date('regles');
            $table->string('avortement');
            $table->integer('nbreEnfant');
            $table->string('cesarienne');
            $table->date('dateAccouchement');
            $table->timestamps();

        
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
        Schema::dropIfExists('patients');
    }
}
