<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Estimate extends Model
{
    use HasFactory;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Sale(): BelongsTo
    {
        return $this->belongsTo(Sale::class);
    }

    public function Customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function Product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function Area(): BelongsTo
    {
        return $this->belongsTo(Area::class);
    }
}
