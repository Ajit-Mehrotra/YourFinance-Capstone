<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;


class Transactions extends Model
{
    use HasFactory;


    protected $fillable = ['user_id','categories_id','date' ,'amount', 'type', 'status'];
    protected $hidden = [
     
    ];

    

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Categories::class, 'categories_id');
    }
    
    
}