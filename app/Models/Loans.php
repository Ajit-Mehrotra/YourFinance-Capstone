<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Loans extends Model
{
    use HasFactory;
    protected $fillable = [
        'loan_name',
        'loan_type',
       
    ];

    protected $hidden = [
     
    ];

    public function debt(): BelongsTo
    {
        return $this->belongsTo(Debts::class);
    }
}