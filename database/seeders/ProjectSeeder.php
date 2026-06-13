<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::query()->delete();

        $projects = [
            // ── Natural Grass ──────────────────────────────────────────────────
            [
                'image'       => 'images/projects/p12-img1-1210x681.png',
                'category'    => 'grass',
                'title'       => 'Bermuda Grass Lawn Installation',
                'description' => 'Professional Bermuda grass carpet installation for a smooth, durable outdoor lawn.',
                'is_featured' => false,
                'sort_order'  => 0,
            ],
            [
                'image'       => 'images/projects/p12-img2-640x480.png',
                'category'    => 'grass',
                'title'       => 'Natural Carpet Grass — Close-up',
                'description' => 'Close-up view of natural carpet grass installation with even surface finish.',
                'is_featured' => false,
                'sort_order'  => 1,
            ],
            [
                'image'       => 'images/projects/p12-img3-1383x624.png',
                'category'    => 'grass',
                'title'       => 'Wide Lawn — Grass Laying',
                'description' => 'Wide-area grass laying project with precision turf placement.',
                'is_featured' => false,
                'sort_order'  => 2,
            ],
            [
                'image'       => 'images/projects/p12-img4-1210x681.png',
                'category'    => 'grass',
                'title'       => 'Rooftop Grass Turf',
                'description' => 'Rooftop turf installation with grass carpeting for a rooftop green zone.',
                'is_featured' => false,
                'sort_order'  => 3,
            ],
            [
                'image'       => 'images/projects/p12-img5-1210x546.png',
                'category'    => 'grass',
                'title'       => 'Outdoor Carpet Grass Installation',
                'description' => 'Outdoor carpet grass laid over prepared soil with clean edge finishing.',
                'is_featured' => false,
                'sort_order'  => 4,
            ],
            [
                'image'       => 'images/projects/p12-img6-800x600.png',
                'category'    => 'grass',
                'title'       => 'Finished Natural Grass Area',
                'description' => 'Completed natural grass area with even coverage and healthy turf growth.',
                'is_featured' => false,
                'sort_order'  => 5,
            ],

            // ── Garden Design / Commercial ──────────────────────────────────────
            [
                'image'       => 'images/projects/p13-img1-681x511.png',
                'category'    => 'garden-design',
                'title'       => 'Private Garden — Full Development',
                'description' => 'Complete residential garden development with planting, pathways and finishing.',
                'is_featured' => true,
                'sort_order'  => 6,
            ],
            [
                'image'       => 'images/projects/p13-img2-640x480.png',
                'category'    => 'commercial',
                'title'       => 'Commercial Landscape — Entry Zone',
                'description' => 'Landscaped entry zone for a commercial property with manicured greenery.',
                'is_featured' => true,
                'sort_order'  => 7,
            ],
            [
                'image'       => 'images/projects/p13-img3-576x433.png',
                'category'    => 'garden-design',
                'title'       => 'Flower Beds & Hedge Design',
                'description' => 'Curated flower bed and hedge layout for an elegant private garden.',
                'is_featured' => true,
                'sort_order'  => 8,
            ],
            [
                'image'       => 'images/projects/p13-img4-567x421.png',
                'category'    => 'garden-design',
                'title'       => 'Garden Pathway & Planting',
                'description' => 'Decorative garden pathway with flanking plant beds and stone edging.',
                'is_featured' => true,
                'sort_order'  => 9,
            ],
            [
                'image'       => 'images/projects/p13-img5-807x605.png',
                'category'    => 'commercial',
                'title'       => 'Resort Landscape & Green Wall',
                'description' => 'Resort landscape project featuring a lush green wall and ornamental plants.',
                'is_featured' => true,
                'sort_order'  => 10,
            ],
            [
                'image'       => 'images/projects/p13-img6-615x461.png',
                'category'    => 'commercial',
                'title'       => 'Outdoor Sitting Area — Landscaping',
                'description' => 'Outdoor sitting area with surrounding greenery and landscape design.',
                'is_featured' => false,
                'sort_order'  => 11,
            ],

            // ── Industrial ──────────────────────────────────────────────────────
            [
                'image'       => 'images/projects/p14-img1-1383x778.png',
                'category'    => 'industrial',
                'title'       => 'Industrial Site Greening',
                'description' => 'Large-scale greening project for an industrial site perimeter.',
                'is_featured' => false,
                'sort_order'  => 12,
            ],
            [
                'image'       => 'images/projects/p14-img2-1383x778.png',
                'category'    => 'industrial',
                'title'       => 'Factory Perimeter Landscaping',
                'description' => 'Perimeter landscaping for a factory site with trees and ground cover.',
                'is_featured' => false,
                'sort_order'  => 13,
            ],
            [
                'image'       => 'images/projects/p14-img3-922x692.png',
                'category'    => 'industrial',
                'title'       => 'Industrial Complex — Green Zone',
                'description' => 'Green zone development within an industrial complex for environmental compliance.',
                'is_featured' => false,
                'sort_order'  => 14,
            ],
            [
                'image'       => 'images/projects/p14-img4-922x692.png',
                'category'    => 'industrial',
                'title'       => 'Boundary Planting — Industrial',
                'description' => 'Boundary planting with shrubs and trees around an industrial property.',
                'is_featured' => false,
                'sort_order'  => 15,
            ],
            [
                'image'       => 'images/projects/p14-img5-1383x778.png',
                'category'    => 'industrial',
                'title'       => 'Large-scale Industrial Landscape',
                'description' => 'Comprehensive landscape plan executed across a large industrial facility.',
                'is_featured' => false,
                'sort_order'  => 16,
            ],
            [
                'image'       => 'images/projects/p14-img6-1383x778.png',
                'category'    => 'industrial',
                'title'       => 'Site Landscape — Completed View',
                'description' => 'Final completed view of a fully landscaped industrial site.',
                'is_featured' => false,
                'sort_order'  => 17,
            ],

            // ── Rooftop & Vertical Gardening ────────────────────────────────────
            [
                'image'       => 'images/projects/p15-img1-615x820.png',
                'category'    => 'rooftop',
                'title'       => 'Rooftop Garden — Full View',
                'description' => 'Full rooftop garden with grass lawn, plants, seating and lighting.',
                'is_featured' => true,
                'sort_order'  => 18,
            ],
            [
                'image'       => 'images/projects/p15-img2-540x407.png',
                'category'    => 'rooftop',
                'title'       => 'Rooftop Seating & Green Lawn',
                'description' => 'Rooftop seating zone surrounded by a neatly laid green lawn.',
                'is_featured' => true,
                'sort_order'  => 19,
            ],
            [
                'image'       => 'images/projects/p15-img3-672x395.png',
                'category'    => 'vertical',
                'title'       => 'Vertical Garden — Green Wall',
                'description' => 'Lush vertical green wall installed on an interior or exterior facade.',
                'is_featured' => true,
                'sort_order'  => 20,
            ],
            [
                'image'       => 'images/projects/p15-img4-615x820.png',
                'category'    => 'rooftop',
                'title'       => 'Rooftop Garden — Plants & Walkway',
                'description' => 'Rooftop garden featuring decorative plants and a defined walkway.',
                'is_featured' => true,
                'sort_order'  => 21,
            ],
            [
                'image'       => 'images/projects/p15-img5-615x820.png',
                'category'    => 'vertical',
                'title'       => 'Vertical Gardening — Office Facade',
                'description' => 'Office facade vertical garden bringing greenery to an urban setting.',
                'is_featured' => false,
                'sort_order'  => 22,
            ],
            [
                'image'       => 'images/projects/p15-img6-615x461.png',
                'category'    => 'rooftop',
                'title'       => 'Rooftop Landscape — Overview',
                'description' => 'Overview of a completed rooftop landscape with full plant coverage.',
                'is_featured' => false,
                'sort_order'  => 23,
            ],
        ];

        foreach ($projects as $data) {
            Project::create($data);
        }
    }
}
