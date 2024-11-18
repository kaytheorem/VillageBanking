<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invite extends Model
{
    use HasFactory;

    // Specify the fillable properties
    protected $fillable = [
        'group_id',
        'token',
        'status',
    ];

    // Define the relationship with the Group model if necessary
    public function group()
    {
        return $this->belongsTo(Group::class);
    }
}
