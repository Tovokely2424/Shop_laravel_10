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
        Schema::table('ventes', function (Blueprint $table) {
            $table->foreignId('transaction_id')->nullable()->constrained()->nullOnDelete();
            $table->foreignId('caisse_id')->nullable()->constrained()->nullOnDelete();
            $table->unsignedBigInteger('validateur_id')->nullable();
            $table->unsignedBigInteger('createur_id')->nullable();

            $table->foreign('validateur_id')
                ->references('id')->on('users')
                ->onDelete('set null');

            $table->foreign('createur_id')
                ->references('id')->on('users')
                ->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ventes', function (Blueprint $table) {
            $table->dropForeign('transaction_id');
            $table->dropForeign('caisse_id');
            $table->dropForeign(['validateur_id']);
            $table->dropForeign(['createur_id']);
            $table->dropColumn(['transaction_id', 'caisse_id', 'validateur_id', 'createur_id']);
        });
    }
};
