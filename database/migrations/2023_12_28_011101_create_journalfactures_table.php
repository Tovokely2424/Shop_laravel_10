<?php

use App\Enums\Statut;
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
        Schema::create('journalfactures', function (Blueprint $table) {
            $staut = array_column(Statut::cases(), 'value');
            $table->id();
            $table->string('ref', 20)->unique();
            $table->double('montant');
            $table->foreignId('client_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('livraison_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('livreur_id')->nullable()->constrained()->nullOnDelete();
            $table->enum('validationStatus', $staut)->default(Statut::Default->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journalfactures');
    }
};
