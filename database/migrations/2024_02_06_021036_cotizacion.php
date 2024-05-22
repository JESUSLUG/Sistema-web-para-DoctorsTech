<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cotizacion', function(Blueprint $table){
            $table->id();
            $table->string('vendedor'); 
            $table->foreignId('id_cliente')->unsigned();
            $table->foreignId('id_producto')->unsigned();
            $table->foreignId('id_especialidad')->unsigned();
            $table->float('dolar');
            $table->float('aumento');
            $table->float('descuento');
            $table->text('condiciones');
            $table->text('notas');


    //Relaciones uno a muchos //
/* 1 */ $table->foreign('id_cliente')->references('id')->on('clientes');
/* 2 */ $table->foreign('id_producto')->references('id')->on('productos');
/* 3 */ $table->foreign('id_especialidad')->references('id')->on('especialidad');

            $table->timestamps();
            
                    });// 
    }



    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cotizacion');
    }
};
