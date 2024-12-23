<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run()
    {
        for($i = 0; $i < 5; $i++) {
            Product::create([
                'name' => 'Товар ' . ($i + 1),
                'price' => ($i + 1) * 100 + ($i * 23)
            ]);
        }
    }
}