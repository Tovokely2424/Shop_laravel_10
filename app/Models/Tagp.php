<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Product;

class Tagp extends Model
{
    use HasFactory;
    
    public function getRouteKeyName() : string
    {
        return 'slug';
    }

    public function products() : BelongsTo
    {
        return $this -> belongsTo(Product::class);
    }
}
