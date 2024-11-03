<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'DOB',
        'fullname',
        'Username',
        'role',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'DOB' => 'date',
            'isGroupAdmin' => 'boolean',
        ];
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_user')
                    ->withPivot('joined_date') // Include the pivot field
                    ->withTimestamps(); // Automatically manage timestamps for the pivot table
    }

    public function loans()
    {
        return $this->hasMany(Loan::class); // A user can have many loans
    }

    public function savings()
    {
        return $this->hasMany(Saving::class); // A user can have many savings
    }

}
