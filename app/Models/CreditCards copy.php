<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CreditCards extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_name',
        'card_type',
        'number',
        'credit_limit',
        'benefits',
    ];

    protected $hidden = [
        'number',
        
    ];

    public function debt(): BelongsTo
    {
        return $this->belongsTo(Debts::class);
    }
}