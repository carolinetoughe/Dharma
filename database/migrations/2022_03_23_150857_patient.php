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
            $table->integer('taille');
            $table->string('profession');
            $table->string('adresse');
            $table->integer('grossesseanterieure');
            $table->date('regles');
            $table->string('avortement');
            $table->integer('nbreEnfant');
            $table->string('cesarienne');
            $table->date('dateAccouchement');
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
        Schema::dropIfExists('patients');
    }
}
