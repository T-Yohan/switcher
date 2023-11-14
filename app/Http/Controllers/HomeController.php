<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
public function index(Request $request)
{
    // Récupérez la catégorie sélectionnée à partir de la requête
    $category_id = $request->input('category_id');

    // Récupérez les produits en fonction du filtre
    $products = Product::when($category_id, function ($query, $category_id) {
        return $query->where('category_id', $category_id);
    })->paginate(4);

    // Récupérez toutes les catégories pour le filtre
    $categories = Category::all();

    return view('accueil', compact('products', 'categories'));
}
public function category($id = 0)
{
    // Récupérez la catégorie sélectionnée à partir de la requête
    // $category_id = $request->input('category_id');

    // Récupérez les produits en fonction du filtre
    $products = Product::when($id, function ($query, $id) {
        return $query->where('category_id', $id);
    })->paginate(2);

    // Récupérez toutes les catégories pour le filtre
    $categories = Category::all();

    return view('accueil', compact('products', 'categories'));
}
}


