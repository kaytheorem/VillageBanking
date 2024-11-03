<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupAccount extends Model
{
    //

    use HasFactory;

    // Define the fillable attributes for mass assignment
    protected $fillable = [
        'group_id', // Foreign key to link to the Group
        'balance',   // Current balance of the group account
    ];
    // BelongsTo relationship with Group
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
