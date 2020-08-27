<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('carritos', function (Blueprint $table) {
            $table->id();
            $table->string('fecha');
            $table->boolean('activo')->default(true);
            $table->foreignId('id_usuario');
            $table->foreign('id_usuario')->references('usuarios')->references('id')->on('usuarios');
            $table->foreignId('id_producto');
            $table->foreign('id_producto')->references('productos')->references('id')->on('productos');
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carritos');
    }
}
