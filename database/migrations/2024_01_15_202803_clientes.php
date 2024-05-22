<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  
    public function up(): void
    {
        Schema::create('clientes', function(Blueprint $table){
            $table->id();
            $table->string('nombreC');
            $table->string('dirección')->nullable();
            $table->integer('numero');
            $table->string('contacto');
            $table->string('email');
            $table->string('especialidad');
            $table->timestamps();
            
                    });
    }

  
    public function down(): void
    {
        Schema::dropIfExists('clientes');  
    }
};
