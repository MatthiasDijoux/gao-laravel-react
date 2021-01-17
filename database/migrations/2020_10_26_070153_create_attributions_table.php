<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attributions', function (Blueprint $table) {
            $table->id();
            $table->string('horaire')->nullable();
            $table->bigInteger('id_client')->unsigned();
            $table->bigInteger('id_ordinateur')->unsigned();
            $table->foreign('id_client')->references('id')->on('clients');
            $table->foreign('id_ordinateur')->references('id')->on('ordinateurs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attributions');
    }
}
