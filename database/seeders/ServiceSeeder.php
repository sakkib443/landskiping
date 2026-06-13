<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        Service::query()->delete();

        $services = [
            [
                'title'       => 'Rooftop Garden Design',
                'description' => 'We design and develop rooftop gardens with natural grass, plants, trees, seating areas, walkways, lighting and drainage planning.',
                'icon'        => 'home-modern',
                'image'       => 'images/services/p06-img1-1200x800.png',
                'type'        => 'landscaping',
                'sort_order'  => 0,
            ],
            [
                'title'       => 'Vertical Gardening',
                'description' => 'We create modern green walls for homes, offices, balconies, restaurants, showrooms and commercial spaces.',
                'icon'        => 'squares-2x2',
                'image'       => 'images/services/p07-img2-1127x615.png',
                'type'        => 'landscaping',
                'sort_order'  => 1,
            ],
            [
                'title'       => 'Natural Carpet Grass Installation',
                'description' => 'We supply and install Bermuda grass and natural carpet grass for lawns, rooftops, gardens, resorts and outdoor areas.',
                'icon'        => 'swatch',
                'image'       => 'images/projects/p12-img6-800x600.png',
                'type'        => 'landscaping',
                'sort_order'  => 2,
            ],
            [
                'title'       => 'Garden Design & Development',
                'description' => 'We design gardens with flowers, trees, hedges, grass, pots, walkways, decorative plants and lighting.',
                'icon'        => 'sparkles',
                'image'       => 'images/services/p06-img2-1127x615.png',
                'type'        => 'landscaping',
                'sort_order'  => 3,
            ],
            [
                'title'       => 'Tree Plantation',
                'description' => 'We provide tree selection, soil preparation, plantation, watering guidance and ongoing plant-care support.',
                'icon'        => 'sun',
                'image'       => 'images/services/p07-img5-1000x667.png',
                'type'        => 'landscaping',
                'sort_order'  => 4,
            ],
            [
                'title'       => 'Walkway & Outdoor Decoration',
                'description' => 'We design garden paths, walkways, sitting areas, decorative stone areas and outdoor finishing.',
                'icon'        => 'map',
                'image'       => 'images/projects/p15-img3-672x395.png',
                'type'        => 'landscaping',
                'sort_order'  => 5,
            ],
            [
                'title'       => 'Garden Lighting',
                'description' => 'We install outdoor lights for rooftops, gardens, walkways, trees, resorts and commercial landscapes.',
                'icon'        => 'light-bulb',
                'image'       => 'images/services/p07-img3-768x512.png',
                'type'        => 'landscaping',
                'sort_order'  => 6,
            ],
            [
                'title'       => 'Landscape Management',
                'description' => 'Regular supervision, watering, trimming, grass cutting, plant care, cleaning and seasonal improvement.',
                'icon'        => 'clipboard-document-check',
                'image'       => 'images/services/p06-img3-1127x615.png',
                'type'        => 'landscaping',
                'sort_order'  => 7,
            ],
            [
                'title'       => 'Landscape Maintenance',
                'description' => 'Monthly or regular garden maintenance to keep your space fresh, clean and healthy all year.',
                'icon'        => 'wrench-screwdriver',
                'image'       => 'images/services/p07-img6-768x512.png',
                'type'        => 'landscaping',
                'sort_order'  => 8,
            ],
            [
                'title'       => 'Landscaping Product Supply',
                'description' => 'Natural grass, indoor & outdoor plants, flowers, trees, hedges, pots, soil, fertilizer, garden lights and accessories.',
                'icon'        => 'shopping-bag',
                'image'       => 'images/services/p06-img4-740x519.png',
                'type'        => 'landscaping',
                'sort_order'  => 9,
            ],
        ];

        foreach ($services as $data) {
            Service::create($data);
        }
    }
}
