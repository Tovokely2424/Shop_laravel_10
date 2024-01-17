<?php

namespace Database\Seeders;

use App\Models\CategoryProduct;
use App\Models\Fournisseur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class Categorie_productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    
    public function run(): void
    {
        $fournisseurs = Fournisseur::all();
        
        $fournisseurT = [
            collect(['Avance Center', 'Franky blazer', 'Eureka', 'Kate Miraine', 'Ialy et Iris', 'Costard made Mada', 'Akanjo', 'Somacou', 'Floreal', 'Future textile', 'Sih Rakoto', 'Ange Kembatsara', 'Trois frangine Manakambahiny']),
            collect(['Higth tech andrvoahangy ambony', 'Eureka','Supreme Center', 'Mr Mobile', 'Concept junior', 'Macbook madagascar', 'IT station behoririka', 'Baolai', 'Cosmos', 'Discount store Saturne analakaely']),
            collect(['Cosmos', 'Stefy crea', 'Tatamax', 'Xinda meuble et deco', 'Art malagasy', 'Rideau deco des reves', 'Tranoko decoration', 'Be store', 'Hossana deco', 'El store']), 
            collect(['Cosmos', 'Meuble Gautier Madagascar', 'Xinda meuble et deco', 'Habitat madagascar', 'Meuble haingon\'Ala', 'AMbiance Meuble', 'Expert meuble et deco', 'King Size mobilier']),
            collect(['Mora prix magasin', 'Supreme Center', 'Mr Mobile', 'Cosmos', 'Microsoft store Tana', 'Samsung store Tana' ,'LG store Tana', 'Eureka']),
            collect(['Leader price', 'Habibo', 'Jumbo score', 'Leuclerk', 'Shoprite', 'Magasin U', 'Shop Liantsoa', 'Maki store', 'Voangory grossiste'])
        ];    

        $categories = collect(['Vetements', 'Technologies', 'Décorations', 'Meubles', 'Fournitures', 'PPN']);
            $categories -> each(function ($category, $index) use ($fournisseurT) { 
                $newcategory = CategoryProduct::create([
                'name' => $category,
                'slug' => Str::slug($category)
            ]);

            $fournisseurForCategory = $fournisseurT[$index];
            $fournisseurForCategory -> each(function ($fournisseurName) use ($newcategory){
                $fournisseur = Fournisseur::where('name', $fournisseurName)->first();
                if($fournisseur){
                    $newcategory->fournisseurs()->attach($fournisseur->id);
                }
                else{
                    $fournisseur = Fournisseur::firstOrCreate([
                        'name' => $fournisseurName,
                        'slug' => Str::slug($fournisseurName),
                        'contact' => fake()->phoneNumber(),
                        'adresse' => fake()->address()
                    ]);                                                                 
                }
            });
        });


    }
}
