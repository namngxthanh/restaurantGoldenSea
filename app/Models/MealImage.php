<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MealImage extends Model
{
    protected $fillable = ['meal_id', 'image'];
    public function meal(): BelongsTo
    {
        return $this->belongsTo(related: Meal::class);
    }
}
