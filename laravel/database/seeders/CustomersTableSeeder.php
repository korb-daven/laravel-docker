<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CustomersTableSeeder extends Seeder {
    public function run() {
        DB::table('customers')->insert([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'address' => '123 Street, City',
            'phone' => '1234567890',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}