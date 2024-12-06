<?php

namespace App\Models;

use App\Models\User;
use Database\Factories\WishlistFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'user_id', 'uuid'];
    /**
     * Create a new factory instance for the model.
     */
    protected static function newFactory()
    {
        return WishlistFactory::new();
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function wishes(): HasMany
    {
        return $this->hasMany(Wish::class);
    }
}
