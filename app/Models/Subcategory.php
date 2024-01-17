<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Subcategory extends Model
{
    use HasFactory;

    protected $with = [
                    'category',
                ];

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category() : BelongsTo
    {
        return $this -> belongsTo(CategoryProduct::class, 'category_product_id', 'id');
    }

    public function product() : HasMany
    {
        return $this -> hasMany(Product::class);
    }

    public function fournisseurs() : BelongsToMany
    {
        return $this -> belongsToMany(Fournisseur::class);
    }
}
