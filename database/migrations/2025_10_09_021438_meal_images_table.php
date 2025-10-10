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
        Schema::create(table:'meal_images', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignId(column: 'meal_id')->constrained(table:'meals')->onDelete(action:'cascade');
            $table->string(column: 'image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table:'meal_images');
    }
};
