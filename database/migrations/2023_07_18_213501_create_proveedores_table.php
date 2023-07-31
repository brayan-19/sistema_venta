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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',100);
            $table->bigInteger('ciudad_id')->unsigned();
            $table->bigInteger('departamentos_id')->unsigned();
            
            $table->foreign('ciudad_id')->references('id')->on('ciudad')->onDelete('cascade');
            $table->foreign('departamentos_id')->references('id')->on('departamentos')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proveedores');
    }
};
