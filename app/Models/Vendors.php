<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Vendors extends Model
{
    use HasFactory;
    protected $fillable = [
        'expenses_name',
    ];

    protected $hidden = [
      
    ];


    public function expenses(): BelongsTo
    {
        return $this->belongsTo(Expenses::class);
    }
}