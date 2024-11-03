<?php

namespace App\Models;

use App\Models\Group;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cycle extends Model
{
    //
    use HasFactory;

    protected $fillable = ['start_date', 'end_date', 'status', 'interest_rate', 'name', 'group_id']; // Allow mass assignment for these fields

    public function group()
    {
        return $this->belongsTo(Group::class); // A cycle belongs to one group
    }

    public function loans()
    {
        return $this->hasMany(Loan::class); // A cycle can have many loans
    }


    public function savings()
    {
        return $this->hasMany(Saving::class); // A user can have many savings
    }

}
