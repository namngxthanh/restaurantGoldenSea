<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OrderStatusHistory extends Model
{
    protected $fillable = ['order_id', 'status', 'change_at', 'note'];
    public function order(): BelongsTo
    {
        return $this->belongsTo(related: Order::class);
    }   
}
