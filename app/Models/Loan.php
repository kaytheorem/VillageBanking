<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'cycle_id', 'amount', 'return_amount', 'interest', 'return_date']; // Allow mass assignment for these fields

    protected $casts = [
        'return_date' => 'datetime', // Ensure return_date is cast to a Carbon instance
    ];

    /**
     * Get the user that owns the loan.
     */
    public function user()
    {
        return $this->belongsTo(User::class); // A loan belongs to one user
    }

    /**
     * Get the cycle that the loan belongs to.
     */
    public function cycle()
    {
        return $this->belongsTo(Cycle::class); // A loan belongs to one cycle
    }
}
