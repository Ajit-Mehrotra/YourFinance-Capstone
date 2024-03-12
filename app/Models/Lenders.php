<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Lenders extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        
    ];

  

    public function debts(): HasMany
    {
        return $this->hasMany(Debts::class);
    }

    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }
}