<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tagp;
use Illuminate\Support\Str;

class TagpSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = collect(['Arrivage', 'Promotion', 'Meilleure vente', 'Bon prix']);
        $tags -> each(fn($tagp) => Tagp::create([
            'name' => $tagp,
            'slug' => Str::slug($tagp)
        ]));
    }
}
