<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Order extends Model
{
    protected $fillable = ['user_id', 'shipping_address_id', 'total_price', 'status'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
    public function shippingAddress(): BelongsTo
    {
        return $this->belongsTo(related: ShippingAddress::class);
    }
    public function orderItems(): HasMany
    {
        return $this->hasMany(related: OrderItem::class);
    }
    public function payment(): HasOne
    {
        return $this->hasOne(related: Payment::class);
    }
    public function orderStatusHistory(): HasMany
    {
        return $this->hasMany(related: OrderStatusHistory::class);
    }
}
