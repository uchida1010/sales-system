<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = ['company','name', 'address', 'telephone', 'cellphone', 'email', 'remarks'];


    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function estimate(): HasMany
    {
        return $this->hasMany(Estimate::class);
    }

    public function sale(): HasMany
    {
        return $this->hasMany(Sale::class);
    }

    public function createCustomer($validated)
    {

        $user = Auth::user();

        try {
            DB::beginTransaction();
            $user->customer()->create($validated);
            DB::commit();
            return true;
        } catch (QueryException $e) {
            Log::error("取引先マスタの登録に失敗しました。".$e->getMessage());
            DB::rollBack();
            return false;
        }
    }

}
