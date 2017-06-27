<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServiciosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servicios', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_servicio_pk');
            $table->integer('id_propiedad_fk');
            $table->integer('id_medidor_fk');
            $table->integer('id_cliente_fk');
            $table->integer('id_hojaRuta_fk');
            $table->integer('id_tipoServicio_fk');
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
        Schema::dropIfExists('servicios');
    }
}
