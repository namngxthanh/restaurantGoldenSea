<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderItem extends Model
{
    protected $fillable = ['order_id', 'meal_id', 'quantity', 'price'];
    public function order(): BelongsTo
    {
        return $this->belongsTo(related: Order::class);
    }
    public function meal(): BelongsTo
    {
        return $this->belongsTo(related: Meal::class);
    }
}
