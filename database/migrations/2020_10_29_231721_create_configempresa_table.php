<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigEmpresaTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configEmpresa', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nit');
            $table->string('nombre');
            $table->bigInteger('telefono');
            $table->string('direccion');
            $table->string('logo');
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
        Schema::drop('configEmpresa');
    }
}
