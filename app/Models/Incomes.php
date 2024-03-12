<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incomes extends Model
{
    use HasFactory;

    protected $fillable = [
        'income_name',
        'income_type',
        'date_received',
        'amount',
        'is_reccuring',
    ];

    protected $hidden = [
        'date_received',
        'amount',
        'is_reccuring'
    ];


    public function liquid_accounts(): BelongsTo
    {
        return $this->belongsTo(LiquidAccounts::class);
    }
    public function payers(): HasOne
    {
        return $this->hasOne(Payers::class);
    }
}