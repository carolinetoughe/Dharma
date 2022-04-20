<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accouchement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accouchements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('date');
            $table->integer('hospitalisation_id')->unsigned();;
            $table->string('lieu');
            $table->string('typegrossesse');
            $table->Integer('dureetravail');
            $table->string('rupture');
            $table->string('particularitetravail');
            $table->string('heurenaissance');
            $table->string('typenaissance');
            $table->string('anesthesie');
            $table->string('ventouse');
            $table->string('voiebasse');
            $table->string('cesarienne');
            $table->string('presentationnaissance');
            $table->string('gemellaire');
            $table->Integer('delaiacc');
            $table->string('rupturedeuxiemee');
            $table->string('presentationdeuxieme');
            $table->string('modalité');
            $table->string('delivrance');
            $table->timestamps();

            $table->foreign('hospitalisation_id')
            ->references('id')
            ->on('hospitalisations')
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
        Schema::dropIfExists('accouchements');
    }
}
