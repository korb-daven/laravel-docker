<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaymentsTableSeeder extends Seeder {
    public function run() {
        DB::table('payments')->insert([
            'payment_method' => 'Credit Card',
            'amount' => 299.99,
            'order_id' => 1,
            'customer_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
