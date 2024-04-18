<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
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

  
    public function expenses(): HasMany
    {
        return $this->hasMany(Expenses::class);
    }
    public function transactions(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }
}