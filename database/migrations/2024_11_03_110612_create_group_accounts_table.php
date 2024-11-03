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
        Schema::create('group_accounts', function (Blueprint $table) {
            $table->id();
            $table->double('balance', 15, 2); // Set precision for balance
            $table->unsignedBigInteger('group_id'); // Foreign key column
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('group_accounts');
    }
};
