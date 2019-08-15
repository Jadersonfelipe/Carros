<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 'modelo', 'placa', 'cor'


        Schema::create('carro', function (Blueprint $table) {
            $table->increments('id');
            $table->String('modelo');
            $table->String('placa');
            $table->String('cor');
            $table->integer('marca_id')->unsigned();

            $table->foreign('marca_id')->references('id')->on('marca')->onDelete('cascade');
            $table->softDeletes();
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
        Schema::dropIfExists('carro');
    }
}
