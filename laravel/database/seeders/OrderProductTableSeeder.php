<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderProductTableSeeder extends Seeder {
    public function run() {
        DB::table('order_product')->insert([
            'order_id' => 1, // Assuming order ID 1
            'product_id' => 1, // Assuming product ID 1
            'price' => 299.99,
            'quantity' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
