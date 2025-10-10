<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Wishlist extends Model
{   
    protected $fillable = ['user_id', 'meal_id'];
   
    public function meal(): BelongsTo
    {
        return $this->belongsTo(related: Meal::class);
    }
}
