<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Meal extends Model
{
    protected $fillable = ['name', 'slug', 'description', 'category_id', 'price', 'quantity', 'status'];
    public function category(): BelongsTo
    {
        return $this->belongsTo(related: Category::class);
    }
    public function mealImages(): HasMany
    {
        return $this->hasMany(related: MealImage::class);
    }
    public function reviews(): HasMany
    {
        return $this->hasMany(related: Review::class);
    }
    public function cartItems(): HasMany
    {
        return $this->hasMany(related: CartItem::class);
    }
}
