<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Journalfacture extends Model
{
    use HasFactory;

    public function client() : BelongsTo
    {
        return $this->belongsTo(Client::class);
    }
    public function transaction() : HasMany
    {
        return $this->hasMany(Transaction::class);
    }
    public function vente() : BelongsTo
    {
        return $this -> belongsTo(Vente::class);
    }
}
