<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTarjetaCreditoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_tarjeta_credito', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->integer('numero');
            $table->string('nombre_titular');
            $table->string('pais_facturacion');
            $table->string('cuidad_facturacion');
            $table->string('direccion_facturacion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_tarjeta_credito');
    }
}
