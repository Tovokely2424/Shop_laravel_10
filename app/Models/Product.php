<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use App\Models\Tagp;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $with = [
                        'category_product', 
                        'subcategory',
                        'fournisseur',
                        'tagps'
                      ];
    
    public function getRouteKeyName() : string
    {
        return 'slug';
    }

    public function category_product(): BelongsTo
    {
        return $this -> belongsTo(CategoryProduct::class);
    }

    public function subcategory() : BelongsTo
    {
        return $this -> belongsTo(Subcategory::class);
    }

    public function tagps() : BelongsToMany
    {
        return $this -> belongsToMany(Tagp::class);
    }

    public function fournisseur() : BelongsTo
    {
        return $this -> belongsTo(Fournisseur::class);
    }

    public function vente() : HasOne
    {
        return $this->hasOne(Vente::class);
    }


}
