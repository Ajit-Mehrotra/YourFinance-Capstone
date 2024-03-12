<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RetirementAccounts extends Model
{
    use HasFactory;

    protected $fillable = [
        'platform_name',
        'retirement_type',
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