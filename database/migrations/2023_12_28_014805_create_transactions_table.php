<?php

use App\Enums\Statut;
use App\Enums\Transaction;
use App\Enums\Typepaiement;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
            $typeDePaiement = array_column(Typepaiement::cases(), 'value');
            $transaction = array_column(Transaction::cases(), 'value');
            $validation = array_column(Statut::cases(), 'value');
            $table->id();
            $table->string('ref') -> unique();
            $table->foreignId('vente_id')->constrained()->cascadeOnDelete();
            $table->double('montant');
            $table->enum('type', $typeDePaiement)->default(Typepaiement::Default->value);
            $table->enum('moyen', $transaction)->default(Transaction::Default->value);
            $table->enum('validationStatus', $validation)->default(Statut::Default->value);
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
