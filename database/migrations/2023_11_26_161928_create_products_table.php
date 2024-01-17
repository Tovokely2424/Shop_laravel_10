<?php

use App\Enums\Taille;
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
        Schema::create('products', function (Blueprint $table) {
            $roles = array_column(Taille::cases(), 'value');
            $table->id();
            $table->string('product_ref', 100) -> unique();
            $table->foreignId('user_id')->nullable()->default(null)-> constrained()->nullOnDelete();
            $table->string('name');
            $table->string('slug',100) -> unique();
            $table->double('price');
            $table->float('remise');
            $table->boolean('disponible')->default(true);
            $table->boolean('pointurable');
            $table->integer('ponture');
            $table->boolean('taillable');
            $table -> enum('taille', $roles)->default(Taille::Bebe->value);
            $table->boolean('colorable');
            $table->string('couleur');
            $table->text('excerpt');
            $table->text('description');
            $table->string('thumbnail');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
