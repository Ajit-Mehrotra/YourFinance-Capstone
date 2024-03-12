<?php

namespace App\Models;

use App\Models\Vendors;
use App\Models\LiquidAccounts;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Expenses extends Model
{
    use HasFactory;

    protected $fillable = [
        'expenses_name',
        'expenses_type',
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

    public function vendor(): HasOne
    {
        return $this->hasOne(Vendors::class);
    }
    public function category(): HasOne
    {
        return $this->hasOne(Categories::class);
    }
    public function subscription(): HasOne
    {
        return $this->HasOne(Subscriptions::class);
    }
}