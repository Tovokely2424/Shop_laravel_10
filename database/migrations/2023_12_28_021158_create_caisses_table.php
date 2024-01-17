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
        Schema::create('caisses', function (Blueprint $table) {
            $validation = array_column(Statut::cases(), 'value');
            $table->id();
            $table->string('ref', 20)->unique();
            $table->foreignId('command_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('transaction_id')->constrained()->cascadeOnDelete();
            $table->foreignId('journalfacture_id')->constrained()->cascadeOnDelete();
            $table->double('montant'); 
            $table->enum('validationStatus', $validation)->default(Statut::Default->value);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caisses');
    }
};
