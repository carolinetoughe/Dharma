<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Antecedent extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('antecedents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nom');
            $table->integer('id_patient')->unsigned();;
            $table->timestamps();

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
        Schema::dropIfExists('antecedents');
    }
}
