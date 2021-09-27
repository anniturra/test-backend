<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStreetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('streets', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_commune');
            $table->foreign('id_commune')->references('id')->on('communes');
            $table->string('name');
        });
    }

    /**
     * Reverse the migrations.
     *W
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('streets');
    }
}
