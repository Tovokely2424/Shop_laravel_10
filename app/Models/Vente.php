<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Vente extends Model
{
    use HasFactory;
    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    public function journal_facture() : HasMany
    {
        return $this -> hasMany(Journalfacture::class);
    }

    public function product() : HasOne
    {
        return $this->hasOne(Product::class);
    }

    public function transactions() : HasMany
    {
        return $this -> hasMany(Transaction::class);
    }

    public function user() : HasOne
    {
        return $this -> hasOne(User::class);
    }
}
