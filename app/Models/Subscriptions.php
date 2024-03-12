<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Subscriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'subscription_name',
        'subscription_recurrence',
        'recurring_cost',
        'start_date',
        'end_date'
        
        
    ];

    protected $hidden = [
        'recurring_cost',
    ];


    public function expenses(): BelongsTo
    {
        return $this->belongsTo(Expenses::class);
    }
}