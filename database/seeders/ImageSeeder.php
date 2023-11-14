<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Produit 1', 'description' => 'Description du produit 1'],
            ['name' => 'Produit 2', 'description' => 'Description du produit 2'],
            // Ajoutez d'autres produits si nécessaire
        ];

        foreach ($products as $product) {
            $imageUrl = $this->getRandomImageUrl();

            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'image' => $imageUrl,
                // Ajoutez d'autres colonnes si nécessaire
            ]);
    }
}
private function getRandomImageUrl()
{
    $randomWidth = rand(400, 800);
    $randomHeight = rand(400, 800);

    return "https://picsum.photos/{$randomWidth}/{$randomHeight}";
}
}
