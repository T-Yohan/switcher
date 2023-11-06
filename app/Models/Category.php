<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'is_visible',
    ];

    //une catégorie peut avoir plusieurs produits
    public function products(): BelongsToMany
    {
        return $this->belongsToMany(Product::class);
    }
}
