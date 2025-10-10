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
        Schema::create(table:'orders_items', callback: function (Blueprint $table): void {
            $table->id();
            $table->foreignId(column: 'order_id')->constrained(table:'orders')->onDelete(action:'cascade');
            $table->foreignId(column: 'meal_id')->constrained(table:'meals')->onDelete(action:'cascade');
            $table->integer(column: 'quantity');
            $table->decimal(column:'price', total: 10, places: 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists(table:'orders_items');
    }
};
