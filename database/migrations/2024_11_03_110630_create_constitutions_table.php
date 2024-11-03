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
        Schema::create('constitutions', function (Blueprint $table) {
            $table->id();
            $table->integer('cycle_duration');             // Duration of the cycle, in weeks or months
            $table->decimal('minimum_savings', 10, 2);     // Minimum savings amount (currency)
            $table->decimal('initial_contribution', 10, 2);// Initial contribution amount (currency)
            $table->integer('loan_term');                  // Term of loans, in weeks or months
            $table->string('meeting_frequency');           // Frequency of meetings, e.g., 'weekly', 'monthly'
            $table->decimal('late_payment_fee', 10, 2);    // Late payment fee (currency)
            $table->unsignedBigInteger('group_id');        // Foreign key to groups table
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
        Schema::dropIfExists('constitutions');
    }
};
