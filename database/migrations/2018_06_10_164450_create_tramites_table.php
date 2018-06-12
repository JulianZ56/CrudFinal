<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTramitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tramites', function (Blueprint $table) {
            
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('Nombre_Tramite'); 
            $table->string('Descripcion_Tramite');
            $table->integer('id_Responsable')->unsigned();
            $table->foreign('id_Responsable')->references('id')->on('responsables')->onDelete('cascade');
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
        Schema::dropIfExists('tramites');
    }
}
