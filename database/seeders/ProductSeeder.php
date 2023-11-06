<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Générer 5 produits par categories
        $categories = DB::table('categories')->get();
        foreach($categories as $category) {
            //création de 5 produits par categories
            for ($i=1; $i < 5; $i++) {
                $productName = $category->name .'-'. 'Product '.$i;
                // $table->id();
                // $table->string('name');
                // $table->string('slug')->unique();
                // $table->unsignedBigInteger('category_id');
                // $table->foreign('category_id')->references('id')->on('categories');
                // $table->longText('description')->nullable();
                // $table->unsignedBigInteger('qty')->default(0);
                // $table->boolean('is_visible')->default(false);
                // $table->boolean('is_new')->default(false);
                // $table->boolean('is_best')->default(false);
                // $table->date('published_at')->nullable();
                // $table->timestamps();
                DB::table('products')->insert([
                    'name' => $productName,
                    'slug' => Str::slug($productName),
                    'category_id' => $category->id,
                    'description' => 'Description du produit '. $i,
                    'qty' => rand(1, 100),
                    'is_visible' => rand(0 , 1),
                    'is_new' => rand(0 , 1),
                    'is_best' => rand(0 , 1),
                    'price' => rand(100 , 500),
                    'published_at' => now(),
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }
}
