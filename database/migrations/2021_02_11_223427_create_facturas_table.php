<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facturas', function (Blueprint $table) {
            $table->id();
            $table->string('serie',2)->nullable();
            $table->bigInteger('numero');
            $table->date('fecha');
            $table->decimal('importe_base', 10, 2);
            // Ver tema tipo campo para impuestos.
            $table->decimal('porcentaje_iva', 4, 2);
            $table->decimal('importe_iva', 8, 2);
            $table->decimal('porcentaje_retencion', 4, 2)->nullable();
            $table->decimal('importe_retencion', 8, 2)->nullable();
            $table->decimal('importe_total', 12, 2);
           
    
                        
            $table->unsignedBigInteger('persona_id')->nullable();
            $table->foreign('persona_id')->references('id')->on('personas');
            $table->date('cobrado');
            $table->string('ref_cobro',30)->nullable();
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
        Schema::dropIfExists('facturas');
    }
}
