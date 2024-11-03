<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Constitution extends Model
{
    //

    use HasFactory;



    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'group_id',             // Foreign key to link to the Group
        'cycle_duration',       // Duration of the cycle
        'minimum_savings',      // Minimum savings required
        'initial_contribution',  // Initial contribution amount
        'loan_term',            // Loan term duration
        'meeting_frequency',     // Frequency of meetings
        'late_payment_fee',      // Fee for late payments
    ];

    // BelongsTo relationship with Group
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
