<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
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
    ];

    public function sale(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    public function salePurchaser(): HasMany
    {
        return $this->hasMany(Sale::class, 'purchaser_id');
    }

    public function saleSeller(): HasMany
    {
        return $this->hasMany(Sale::class, 'seller_id');
    }

    public function customer(): HasMany
    {
        return $this->hasMany(Customer::class);
    }

    public function customerPic(): HasMany
    {
        return $this->hasMany(Customer::class, 'pic_id');
    }

    public function estimate(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }

    public function estimatePic(): HasMany
    {
        return $this->hasMany(Estimate::class, 'pic_id');
    }
}
