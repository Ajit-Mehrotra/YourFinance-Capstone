<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Payers extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'payer_name',
    ];

    protected $hidden = [
      
    ];


    public function incomes(): BelongsTo
    {
        return $this->belongsTo(Incomes::class);
    }
}