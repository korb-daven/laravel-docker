<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WishlistsTableSeeder extends Seeder {
    public function run() {
        DB::table('wishlists')->insert([
            'product_id' => 1,
            'customer_id' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
