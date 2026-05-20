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
    Schema::create('caps', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('brand'); // Field 1
        $table->string('era');   // Field 2
        $table->string('condition'); // Field 3
        $table->string('image_url')->nullable(); 
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caps');
    }
};
