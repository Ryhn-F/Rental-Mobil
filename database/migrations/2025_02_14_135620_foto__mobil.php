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
        Schema::create('foto_mobil', function (Blueprint $table) {
            $table->id();
            $table->text('gambarArray');

            // Add mobil_id column first
            $table->unsignedBigInteger('mobil_id');

            // Then apply the foreign key constraint
            $table->foreign('mobil_id')->references('id')->on('mobils')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('foto_mobil');
    }
};
