<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FichesoinUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichesoin_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('fichesoin_id')-> unsigned ();
            $table->integer('user_id')-> unsigned ();
            $table->timestamps();

            $table->foreign('fichesoin_id')
            ->references('id')
            ->on('fichesoins')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
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
        Schema::dropIfExists('fichesoin_user');
    }
}
