<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    protected $fillable = ['user_id', 'meal_id', 'rating', 'comment'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(related: User::class);
    }
    public function meal(): BelongsTo
    {
        return $this->belongsTo(related: Meal::class);
    }
}
