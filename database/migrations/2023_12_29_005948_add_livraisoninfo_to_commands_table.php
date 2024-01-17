<?php

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
        Schema::table('commands', function (Blueprint $table) {
            $table->foreignId('livraison_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('livreur_id')->nullable()->constrained()->nullOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('commands', function (Blueprint $table) {
            $table->dropForeign('livraison_id');
            $table->dropForeign('livreur_id');
            $table->dropColumn('livraison_id');
            $table->dropColumn('livreur_id');
        });
    }
};
