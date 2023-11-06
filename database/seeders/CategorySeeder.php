<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = [
            ['name' => 'Category1'],
            ['name' => 'Category2'],
            ['name' => 'Category3'],
            ['name' => 'Category4'],
            ['name' => 'Category5'],
        ];

        //générer les catégories avec name et slug
        foreach ($categories as $category) {
            $category['slug'] = Str::slug($category['name']);
            $category['is_visible'] = true;
            $category['created_at'] = now();
            $category['updated_at'] = now();
            DB::table('categories')->insert($category);
        }
    }
}
