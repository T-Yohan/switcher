<?php

namespace App\Models;

use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'description',
        'qty',
        'is_visible',
        'is_new',
        'is_best',
        'published_at',
    ];

    //un produit a un seul utilisateur
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    //un produit a une categorie
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}
