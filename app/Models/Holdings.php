<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Holdings extends Model
{
    use HasFactory;

    protected $fillable = [
       
        'holding_id',
        'cost_basis',
        'price',
        'user_id',
        
        
    ];
}  