<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Transaction extends Model
{
    use HasFactory;
    public function journal_Facture() : BelongsTo
    {
        return $this -> $this -> belongsTo(Journalfacture::class);
    }

    public function vente() : BelongsTo
    {
        return $this -> belongsTo(Vente::class);
    }
}
