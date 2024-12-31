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
        Schema::create('policy', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('slug')->unique(); // Slug chung cho chính sách
            $table->string('poli_image'); // Ảnh của chính sách
            $table->boolean('noi_bat'); // Nổi bật
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('policy');
    }
};
