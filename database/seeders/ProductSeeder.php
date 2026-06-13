<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        Product::query()->delete();

        $products = [
            [
                'name'        => 'Natural Carpet Grass',
                'description' => 'Fresh natural carpet grass for lawns, rooftops, gardens and outdoor areas.',
                'icon'        => 'swatch',
                'category'    => 'Grass',
                'sort_order'  => 0,
            ],
            [
                'name'        => 'Bermuda Grass',
                'description' => 'Durable Bermuda grass ideal for open lawns, sports fields and rooftop gardens.',
                'icon'        => 'squares-2x2',
                'category'    => 'Grass',
                'sort_order'  => 1,
            ],
            [
                'name'        => 'Indoor Plants',
                'description' => 'Beautiful air-purifying indoor plants for living rooms, offices and balconies.',
                'icon'        => 'home-modern',
                'category'    => 'Plants',
                'sort_order'  => 2,
            ],
            [
                'name'        => 'Outdoor Plants',
                'description' => 'Hardy outdoor plants for garden beds, rooftops and commercial landscapes.',
                'icon'        => 'sun',
                'category'    => 'Plants',
                'sort_order'  => 3,
            ],
            [
                'name'        => 'Flower Plants',
                'description' => 'Colourful seasonal and perennial flower plants to brighten any space.',
                'icon'        => 'sparkles',
                'category'    => 'Plants',
                'sort_order'  => 4,
            ],
            [
                'name'        => 'Trees & Hedges',
                'description' => 'Fruit trees, shade trees, privacy hedges and ornamental trees ready to plant.',
                'icon'        => 'scissors',
                'category'    => 'Trees',
                'sort_order'  => 5,
            ],
            [
                'name'        => 'Garden Pots & Planters',
                'description' => 'Ceramic, clay, fibreglass and plastic planters in all shapes and sizes.',
                'icon'        => 'archive-box',
                'category'    => 'Accessories',
                'sort_order'  => 6,
            ],
            [
                'name'        => 'Vertical Garden Materials',
                'description' => 'Panels, frames, pocket planters and support systems for living walls.',
                'icon'        => 'squares-plus',
                'category'    => 'Accessories',
                'sort_order'  => 7,
            ],
            [
                'name'        => 'Garden Lights',
                'description' => 'Solar and electric outdoor lights for gardens, pathways and rooftop décor.',
                'icon'        => 'light-bulb',
                'category'    => 'Accessories',
                'sort_order'  => 8,
            ],
            [
                'name'        => 'Soil & Fertilizer',
                'description' => 'Potting mix, organic compost, fertilizer and soil conditioners for healthy plants.',
                'icon'        => 'beaker',
                'category'    => 'Supplies',
                'sort_order'  => 9,
            ],
            [
                'name'        => 'Gardening Tools & Accessories',
                'description' => 'Spades, shears, sprayers, gloves, hoses and all essential gardening tools.',
                'icon'        => 'wrench-screwdriver',
                'category'    => 'Supplies',
                'sort_order'  => 10,
            ],
        ];

        foreach ($products as $data) {
            Product::create($data);
        }
    }
}
