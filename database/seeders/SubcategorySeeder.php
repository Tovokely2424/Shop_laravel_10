<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\Subcategory;
use GuzzleHttp\Psr7\FnStream;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = CategoryProduct::all();
        $subcategories = [
            collect(['Femme', 'Homme', 'Classe', 'Enfant', 'Cool', 'Summer', 'short', 'T-shirt', 'Accessoire', 'Chapeau']),
            collect(['Ordinateur', 'Téléphone', 'Objet connecté', 'Télévision', 'Modem', 'Cablage']),
            collect(['Maison', 'Chambre', 'Personalisable', 'Art', 'Autocollant']),
            collect(['Salon', 'Table', 'Chaise', 'de cuisine', 'Bureau', 'Lit', 'Autre']),
            collect(['Scolaire', 'Fourniture de bureau', 'Cuisine', 'Jardin']),
            collect(['En gros', 'Détail', 'Pate', 'Legumineuse', 'Boisson', 'Legumes', 'Hygiène'])
        ];

        $subcategoriesCollection = collect($subcategories)->map(function ($subcategory) {
            return collect($subcategory);
        });

        $categoryIds = $categories->pluck('id')->toArray();

        $subcategoriesCollection->each(function ($subcategory, $index) use ($categoryIds) {
            $categoryId = $categoryIds[$index] ?? null;
            $subcategory->each(function ($item) use ($categoryId){ 
                Subcategory::updateOrCreate([
                'name' => $item,
                'slug' => Str::slug($item),
                'category_product_id' => $categoryId,
                'description' => fake() -> sentence()
                ]);
            });
            
        });

        
    }
    
}
