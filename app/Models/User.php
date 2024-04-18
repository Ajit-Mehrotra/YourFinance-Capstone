<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];



    public function liquidAccounts(): HasMany
    {
        return $this->hasMany(liquidAccounts::class);
    }

    public function investmentAccounts(): HasMany
    {
        return $this->hasMany(InvestmentAccounts::class);
    }
    
    public function retirementAccounts(): HasMany
    {
        return $this->hasMany(RetirementAccounts::class);
    }
    
    public function tangibleAssets(): HasMany
    {
        return $this->hasMany(TangibleAssets::class);
    }

    public function miscAssets(): HasMany
    {
        return $this->hasMany(MiscAssets::class);
    }
    public function debts(): HasMany
    {
        return $this->hasMany(Debts::class);
    }
    public function address(): BelongsTo
    {
        return $this->belongsTo(Address::class);
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(Transactions::class);
    }

}