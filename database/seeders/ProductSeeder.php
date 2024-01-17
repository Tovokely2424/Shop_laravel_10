<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\Fournisseur;
use App\Models\Product;
use App\Models\Subcategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tagp;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = CategoryProduct::all();
        $subcategories = Subcategory::all();
        $fournisseurs = Fournisseur::all();
        $tagProducts = Tagp::all();
        Product::factory(20) 
                ->sequence(fn()=>[
                    'category_product_id' => $categories -> random(),
                    'subcategory_id' => $subcategories -> random(),
                    'fournisseur_id' => $fournisseurs -> random()
                ])
                -> create()
                ->each(fn($product) => 
                $product -> tagps()->attach($tagProducts->random(rand(1,3))));
    }
}
