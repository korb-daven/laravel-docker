<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrdersTableSeeder extends Seeder {
    public function run() {
        DB::table('orders')->insert([
            'total_price' => 299.99,
            'customer_id' => 1, // Assuming John Doe is ID 1
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
