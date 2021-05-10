<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen');
            $table->integer('aforo');
            $table->dateTime('empieza')->nullable();
            $table->dateTime('termina')->nullable();
            $table->bigInteger('espacio_id')->unsigned();
            $table->timestamps();

            $table->foreign('espacio_id')
                ->references('id')->on('espacios')
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
        Schema::dropIfExists('clases');
    }
}
