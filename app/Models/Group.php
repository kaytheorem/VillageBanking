<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    //

    use HasFactory;

    protected $fillable = [
        'name',  // Add the group name
        'code',
    ];

    public function users()
    {
        return $this->belongsToMany(User::class, 'group_user')
                    ->withPivot('joined_date') // Include the pivot field
                    ->withTimestamps(); // Automatically manage timestamps for the pivot table
    }
    // One-to-One relationship with GroupAccount
    public function account()
    {
        return $this->hasOne(GroupAccount::class);
    }

    // One-to-One relationship with Constitution
    public function constitution()
    {
        return $this->hasOne(Constitution::class);
    }

    public function cycles()
    {
        return $this->hasMany(Cycle::class); // A group can have many cycles
    }
}
