<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Modeltable;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //User::factory(10)->create();
        $this -> call([
            Modeltable::class,
            FournisseurSeeder::class,
            Categorie_productSeeder::class,
            SubcategorySeeder::class,
            TagpSeeder::class,
            // ProductSeeder::class,
        ]);
    }
}
