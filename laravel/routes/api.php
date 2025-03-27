<?php
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

// Category routes
Route::prefix('categories')->group(function () {
    Route::get('/', [CategoryController::class, 'index']); // Get all categories
    Route::post('/', [CategoryController::class, 'store']); // Create a category
    Route::get('/{categoryId}', [CategoryController::class, 'show']); // Get a category by ID
    Route::post('/{categoryId}', [CategoryController::class, 'update']); // Update a category
    Route::delete('/{categoryId}', [CategoryController::class, 'destroy']); // Delete a category
    Route::get('/{categoryId}/products', [ProductController::class, 'getProductsByCategory']); // Get all products in a category
});

// Product routes
Route::prefix('products')->group(function () {
    Route::get('/', [ProductController::class, 'index']); // Get all products
    Route::post('/', [ProductController::class, 'store']); // Create a product
    Route::get('/{productId}', [ProductController::class, 'show']); // Get a product by ID
    Route::post('/{productId}', [ProductController::class, 'update']); // Update a product
    Route::delete('/{productId}', [ProductController::class, 'destroy']); // Delete a product
});

