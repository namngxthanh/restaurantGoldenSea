<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Payment extends Model
{
    protected $fillable = ['order_id', 'amount', 'status', 'payment_method', 'paid_at', 'transaction_id'];
    public function order(): HasOne
    {
        return $this->hasOne(related: Order::class);
    }
}
