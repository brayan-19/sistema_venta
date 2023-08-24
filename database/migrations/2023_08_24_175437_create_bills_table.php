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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->string( 'name');
            $table->string( 'sub_total');
            $table->string( 'total');
            $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->foreignId('customers_id')->constrained()->onDelete('cascade');
            $table->foreignId('employees_id')->constrained()->onDelete('cascade');
            $table->foreignId('products_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
