<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TangibleAssets extends Model
{
    use HasFactory;

    protected $fillable = [
        'tangible_name',
        'tangible_type',
        'initial_investment',
        'quantity',
        'current_value'
    ];

    protected $hidden = [
        'initial_investment',
        'quantity',
        'current_value'
    ];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}