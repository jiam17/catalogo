<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::factory()->create([
            'name' => 'Aceite Organico'
        ]);

        Product::factory()->create([
            'name' => "Aceite de Coco"
        ]);

        Product::factory()->count(7)->create();
    }
}
