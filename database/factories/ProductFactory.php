<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $token = 'REF_'.Str::random(6);
        $remise = rand(1, 9)/10;
        $coleurOK =array('Blanche', 'Noire', 'Rouge', 'Verte', 'Bleue', 'Jaune', 'Rose', 'Violette', 'Orange', 'Grise');
        $pointurable = rand(0, 1);
        $taillable = rand(0,1);
        $colorable = rand(0,1);
        $couleur = $colorable ? $coleurOK[rand(0, 9)] : "pas de couleur";
        $pointure = $pointurable ? rand(10, 40) : 0;
        $nom = 'Produit '.fake() -> sentence();
        return [
            'product_ref' => $token,
            'name' => $nom,
            'slug' => Str::slug($nom),
            'price' => rand(10, 100),
            'remise' => $remise,
            'disponible' => rand(0, 1),
            'pointurable' => $pointurable,
            'ponture'=> $pointure,
            'taillable' => $taillable,
            'colorable' => $colorable,
            'couleur' => $couleur,
            'excerpt' => $nom,
            'description' => fake() -> paragraph(),
            'thumbnail' => 'images/vetement/homme/'.$token.'.png'
        ];
    }
}
