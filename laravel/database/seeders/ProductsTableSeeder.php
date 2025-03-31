<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder {
    public function run() {
        DB::table('products')->insert([
            'name' => 'Smartphone',
            'pricing' => 299.99,
            'description' => 'A powerful smartphone with 128GB storage',
            'images' => 'smartphone.jpg',
            'category_id' => 1, // Assume Electronics is ID 1
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
