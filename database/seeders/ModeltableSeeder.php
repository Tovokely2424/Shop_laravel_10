<?php

namespace Database\Seeders;

use App\Models\Modeltable;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class ModeltableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cheminModel = app_path('Models');
        $fichiers = File::files($cheminModel);
        $modeles = collect($fichiers)->map(function($fichiers){
            return pathinfo($fichiers, PATHINFO_FILENAME);
        });

        $modeles.each(fn($model)=>Modeltable::create([
            'name' => $model,
            'slug' => Str::slug($model)
        ]));
    }
}
