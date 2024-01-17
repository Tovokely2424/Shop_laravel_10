<?php

namespace Database\Seeders;

use App\Models\Fournisseur;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class FournisseurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = collect(['Vetements', 'Technologies', 'Décorations', 'Meubles', 'Fournitures', 'PPN']);
        $fournisseurs = collect(['Avance Center', 'Franky blazer', 'Eureka', 'Kate Miraine', 'Ialy et Iris', 'Costard made Mada', 'Akanjo', 'Somacou', 'Floreal', 'Future textile', 'Sih Rakoto', 'Ange Kembatsara', 'Trois frangine Manakambahiny', 'Higth tech andrvoahangy ambony', 'Eureka','Supreme Center', 'Mr Mobile', 'Concept junior', 'Macbook madagascar', 'IT station behoririka', 'Baolai', 'Cosmos', 'Discount store Saturne analakaely', 'Stefy crea', 'Tatamax', 'Xinda meuble et deco', 'Art malagasy', 'Rideau deco des reves', 'Tranoko decoration', 'Be store', 'Hossana deco', 'El store', 'Meuble Gautier Madagascar', 'Habitat madagascar', 'Meuble haingon\'Ala', 'AMbiance Meuble', 'Expert meuble et deco', 'King Size mobilier', 'Mora prix magasin', 'Microsoft store Tana', 'Samsung store Tana' ,'LG store Tana', 'Leader price', 'Habibo', 'Jumbo score', 'Leuclerk', 'Shoprite', 'Magasin U', 'Shop Liantsoa', 'Maki store', 'Voangory grossiste']);
        $fournisseurs -> each(fn($fournisseur)=>Fournisseur::create([
            'name' => $fournisseur,
            'slug' => Str::slug($fournisseur),
            'contact' => fake() -> phoneNumber(),
            'adresse' => fake() -> address()
        ]));
    }
}
