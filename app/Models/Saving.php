<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Saving extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'network', 'user_id', 'cycle_id']; // Allow mass assignment for these fields

    /**
     * Get the user that owns the saving.
     */
    public function user()
    {
        return $this->belongsTo(User::class); // A saving belongs to one user
    }

    /**
     * Get the cycle that the saving belongs to.
     */
    public function cycle()
    {
        return $this->belongsTo(Cycle::class); // A saving belongs to one cycle
    }
}
