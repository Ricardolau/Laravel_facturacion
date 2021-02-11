<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento')->default('nif');
            $table->string('pais_documento')->default('ES');
            $table->string('numero_documento',15)->nullable();
            $table->string('nombre',100);
            $table->string('apellido1',100);
            $table->string('apellido2',100)->nullable();
            $table->string('razon_social',100)->nullable();
            $table->string('nombre_comercial',100)->nullable();
            $table->text('comentario')->nullable();
            $table->tinyInteger('estado')->default('1');       
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
        Schema::dropIfExists('personas');
    }
}
