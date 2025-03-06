<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


// Category routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']); // Get all categories
    Route::post('/', [CategoryController::class, 'store']); // Create a category
    Route::get('/{categoryId}', [CategoryController::class, 'show']); // Get a category by ID
    Route::patch('/{categoryId}', [CategoryController::class, 'update']); // Update a category
    Route::delete('/{categoryId}', [CategoryController::class, 'destroy']); // Delete a category
    Route::get('/{categoryId}/products', [ProductController::class, 'getProductsByCategory']); // Get all products in a category
});

// Product routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // Get all products
    Route::post('/', [ProductController::class, 'store']); // Create a product
    Route::get('/{productId}', [ProductController::class, 'show']); // Get a product by ID
    Route::patch('/{productId}', [ProductController::class, 'update']); // Update a product
    Route::delete('/{productId}', [ProductController::class, 'destroy']); // Delete a product
});




// Default
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', action: [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
