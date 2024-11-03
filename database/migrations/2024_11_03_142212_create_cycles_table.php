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
        Schema::create('cycles', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->unsignedBigInteger('group_id'); // Foreign key to groups
            $table->date('start_date'); // Start date of the cycle
            $table->date('end_date'); // End date of the cycle
            $table->string('status'); // Status of the cycle (e.g., 'active', 'completed', etc.)
            $table->decimal('interest_rate', 5, 2); // Interest rate (e.g., 5.00 for 5%)
            $table->string('name'); // Name of the cycle
            $table->timestamps(); // Timestamps for created_at and updated_at

            // Foreign key constraint
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cycles');
    }
};
