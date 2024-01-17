<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryProduct extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function getRouteKeyName() : string
    {
        return 'slug';
    }

    public function product() : HasMany
    {
        return $this -> hasMany(Product::class);
    }

    public function subcategories() : HasMany
    {
        return $this -> hasMany(Subcategory::class);
    }

    public function fournisseurs() : BelongsToMany
    {
        return $this -> belongsToMany(Fournisseur::class);
    }
}
