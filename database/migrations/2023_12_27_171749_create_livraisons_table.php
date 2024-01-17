<?php

use App\Enums\Statut;
use App\Enums\Livraison;
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
        Schema::create('livraisons', function (Blueprint $table) {
            $statut = array_column(Statut::cases(), 'value');
            $livraison = array_column(Livraison::cases(), 'value');
            $table->id();
            $table->string('ref', 20) -> unique();
            $table->enum('moyen', $livraison)->default(Livraison::Default->value);
            $table->foreignId('product_id')->constrained()->cascadeOnDelete();
            $table->enum('statut', $statut)->default(Statut::Default->value);
            $table->string('destination');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livraisons');
    }
};
