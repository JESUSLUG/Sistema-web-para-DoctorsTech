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
        Schema::create('productos', function(Blueprint $table){
            $table->id(); 
            $table->string('nombre'); 
            $table->text('imagen')->nullable();
            $table->float('precio');
            $table->text('caracteristicas');
            $table->foreignId('id_marca')->unsigned();
            $table->foreignId('id_tipo_equipo')->unsigned();
            $table->foreignId('id_accesorio')->unsigned();
            $table->foreignId('id_especialidad')->unsigned();
            $table->foreignId('id_licencias')->unsigned();
            $table->foreignId('id_transductores')->unsigned();
            
//Relaciones uno a muchos //
/* 1 */ $table->foreign('id_marca')->references('id')->on('marca');
/* 2 */ $table->foreign('id_tipo_equipo')->references('id')->on('tipo_equipo');
/* 3 */ $table->foreign('id_accesorio')->references('id')->on('accesorio');
/* 4 */ $table->foreign('id_especialidad')->references('id')->on('especialidad');
/* 6 */ $table->foreign('id_licencias')->references('id')->on('licencias');
/* 7 */ $table->foreign('id_transductores')->references('id')->on('transductores');

            $table->timestamps();
            
                    });// //
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
