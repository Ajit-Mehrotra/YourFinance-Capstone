<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Debts extends Model
{
    use HasFactory;

    protected $fillable = [
        'debt_name',
        'principle',
        'balance',
        'pmt_frequency',
        'recurring_pmt_amt',
        'apr_interest',
        'days_interest_deffered',
        'days_pmt_deffered',
        'date_received',
    ];

    protected $hidden = [
        'principle',
        'balance',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function creditCard(): HasOne
    {
        return $this->hasOne(CreditCards::class);
    }
    public function loan(): HasOne
    {
        return $this->hasOne(Loans::class);
    }
    public function lender(): BelongsTo
    {
        return $this->belongsTo(Lenders::class);
    }
}