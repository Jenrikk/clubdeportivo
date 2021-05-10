<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspaciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('espacios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('imagen');
            $table->dateTime('empieza')->nullable();
            $table->dateTime('termina')->nullable();
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
        Schema::dropIfExists('espacios');
    }
}
