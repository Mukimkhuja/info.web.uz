<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');   //ismi
            $table->string('fname');  //otasining ismi
            $table->string('sname');  //familiyasi
            $table->string('sex');  //jinsi
            $table->integer('age');  //yoshi
            $table->float('weight');   //vazni
            $table->float('height');   //bo'yi
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
