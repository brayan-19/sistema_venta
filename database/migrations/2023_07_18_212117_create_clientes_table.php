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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->string('apellido',100);
            $table->string('cedula',12);
            $table->string('telefono',12);
            $table->string('direccion',20);
            $table->bigInteger('ciudad_id')->unsigned();
            
            $table->foreign('ciudad_id')->references('id')->on('ciudad')->onDelete('cascade');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
