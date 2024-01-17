<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;

    public function journal_facture() : HasMany
    {
        return $this -> hasMany(Journalfacture::class);
    }

    public function vente() : HasMany
    {
        return $this -> hasMany(Vente::class);
    }
}
