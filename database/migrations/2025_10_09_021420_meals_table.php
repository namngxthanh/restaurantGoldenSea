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
        Schema::create(table:'meals', callback: function (Blueprint $table): void {
            $table->id();
            $table->string(column: 'name');
            $table->string(column: 'slug')->unique();
            $table->text(column: 'description')->nullable();
            $table->foreignId(column: 'category_id')->constrained(table:'categories')->onDelete(action:'cascade');
            $table->decimal(column:'price', total: 10, places: 2);
            $table->integer(column:'quantity')->default(0);
            $table->string(column:'status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table:'meals');
    }
};
