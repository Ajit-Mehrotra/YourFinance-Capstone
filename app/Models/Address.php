<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Address extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'street_name',
        'city',
        'state',
        'country',
        'zip_code',
    ];

    /**
     * The attributes that should be hidden for serialization.
     */
    protected $hidden = [
       
    ];

   
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function lenders(): HasMany
    {
        return $this->hasMany(Lenders::class);
    }

    
}