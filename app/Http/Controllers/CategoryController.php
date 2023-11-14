<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_visible', true)->get();
        return view('category.index', compact('categories'));
    }

    public function show($slug)
{
    $category = Category::where('slug', $slug)->firstOrFail();
    return view('category.show', compact('category'));
}

}
