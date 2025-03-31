<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder {
    public function run() {
        DB::table('categories')->insert([
            'name' => 'Electronics',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
