<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/', [HomeController::class, 'index'])->name('accueil');
    Route::get('/category/{id}', [HomeController::class, 'category'])->name('categories.index');
    // Route::get('/categories/{slug}', [CategoryController::class, 'show'])->name('categories.show');
    // Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    // Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');
});

require __DIR__.'/auth.php';
