<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    public function sale(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    public function estimate(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }
}
