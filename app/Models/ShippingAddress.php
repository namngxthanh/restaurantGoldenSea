<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ShippingAddress extends Model
{
    protected $fillable = ['user_id', 'address', 'city', 'full_name', 'phone', 'default'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
}
