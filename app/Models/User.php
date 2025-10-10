<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Model
{
    protected $fillable = ['name', 'email', 'password', 'role_id','status','phone_number','avatar','address','activation_token','google_id'];

    public function role(): BelongsTo
    {
        return $this->belongsTo(related: Role::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(related: Review::class);
    }
    public function cartItems(): HasMany
    {
        return $this->hasMany(related: CartItem::class);
    }
    public function notifications(): HasMany
    {
        return $this->hasMany(related: Notification::class);
    }
    public function bookings(): HasMany
    {
        return $this->hasMany(related: Booking::class);
    }
    // check status of user
    public function isActive(): bool
    {
        return $this->status === 'active';
    }
    public function isPending(): bool
    {
        return $this->status === 'pending';
    }
    public function isDeleted(): bool
    {
        return $this->status === 'deleted';
    }
    public function isBanned(): bool
    {
        return $this->status === 'banned';
    }
    public function shippingAddresses(): HasMany
    {
        return $this->hasMany(related: ShippingAddress::class);
    }
    public function orders(): HasMany
    {
        return $this->hasMany(related: Order::class);
    }
}
