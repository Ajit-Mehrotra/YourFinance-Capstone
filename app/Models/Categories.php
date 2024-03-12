<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categories extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name',
        'category_description',
        
        
    ];

    protected $hidden = [
      
    ];


    public function expenses(): BelongsTo
    {
        return $this->belongsTo(Expenses::class);
    }
}