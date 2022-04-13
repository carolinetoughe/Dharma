<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MedicamentOrdonnance extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicament_ordonnance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('medicament_id')-> unsigned ();
            $table->integer('ordonnance_id')-> unsigned ();
            $table->timestamps();

            $table->foreign('medicament_id')
            ->references('id')
            ->on('medicaments')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('ordonnance_id')
            ->references('id')
            ->on('ordonnances')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicament_ordonnance');
    }
}
