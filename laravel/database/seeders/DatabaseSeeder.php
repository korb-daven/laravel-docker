<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategoriesTableSeeder::class,
            ProductsTableSeeder::class,
            CustomersTableSeeder::class,
            OrdersTableSeeder::class,
            OrderProductTableSeeder::class,
            CartsTableSeeder::class,
            WishlistsTableSeeder::class,
            PaymentsTableSeeder::class,
        ]);

        // DB::table('categories')->insert([
        //     [
        //         'name' => 'Food',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Drink',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ]
        // ]);

        // DB::table('products')->insert([
        //     [
        //         'name' => 'Coca Cola',
        //         'category_id' => 2, 
        //         'pricing' => 3.33,
        //         'description' => 'This is a Coca Cola in stock.',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        //     [
        //         'name' => 'Sandwich',
        //         'category_id' => 1,
        //         'pricing' => 9.99,
        //         'description' => 'This is a Sandwich.',
        //         'created_at' => now(),
        //         'updated_at' => now()
        //     ],
        // ]);
    }
}
