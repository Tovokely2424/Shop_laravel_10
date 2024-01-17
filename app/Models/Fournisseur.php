<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fournisseur extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'contact', 'adress'];

    public function category_product() : BelongsToMany
    {
        return $this -> belongsToMany(CategoryProduct::class);
    }

    public function subcategories() : BelongsToMany
    {
        return $this -> belongsToMany(Subcategory::class);
    }

    public function products() : HasMany
    {
        return $this -> hasMany(Product::class);
    }
}
