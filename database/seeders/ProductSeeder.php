<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 20; $i++) {
            DB::table('products')->insert([
                'product_id' => 'PROD-' . str_pad($i, 3, '0', STR_PAD_LEFT), // e.g., PROD-001, PROD-002
                'name' => 'Product ' . $i,
                'description' => 'Description for Product ' . $i,
                'price' => rand(100, 1000),
                'stock' => rand(1, 50),
                'image' => 'image_' . $i . '.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
