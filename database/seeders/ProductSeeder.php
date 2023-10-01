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
            'name' => 'Aceite de coco',
            'description' => 'Un aceite vegetal puro y natural extraído de cocos frescos y maduros cultivados de forma orgánica. Reconocido por su versatilidad, este aceite es ideal para cocinar, hidratar la piel y el cabello, y promover un estilo de vida saludable.',
            'available' => true,
            'price' => 5.00,
            'review' => 'Excelente producto.',
            'image' => public_path('imagenes/aceite1.jpeg'),
        ]);

        Product::factory()->create([
            'name' => 'Aceite de romero',
            'description' => 'Un aceite de romero organico de origen vegertal',
            'available' => true,
            'price' => 5.00,
            'review' => 'Excelente producto. excelente aroma',
            'image' => public_path('imagenes/aceite2.jpeg'),
        ]);
    }
}
