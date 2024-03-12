<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LiquidAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'bank_name',
        'account_type',
        'account_number',
        'balance',
    ];

    protected $hidden = [
        'account_number',
        'balance',
    ];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function incomes(): HasMany
    {
        return $this->hasMany(Incomes::class);
    }
    public function expenses(): HasMany
    {
        return $this->hasMany(Expenses::class);
    }
}