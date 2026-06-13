<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Seeder;

class TeamMemberSeeder extends Seeder
{
    public function run(): void
    {
        TeamMember::query()->delete();

        $members = [
            // Leadership (tier = 'lead')
            [
                'name'       => 'Jahidul Islam',
                'role'       => 'Proprietor',
                'tier'       => 'lead',
                'photo'      => 'images/team/p11-img2-308x461.png',
                'bio'        => 'Overall business management, client communication, project planning and service quality across all operations.',
                'sort_order' => 0,
            ],
            [
                'name'       => 'Tanvir Rahman Ajhor',
                'role'       => 'Landscape Architect',
                'tier'       => 'lead',
                'photo'      => 'images/team/p11-img21-538x717.png',
                'bio'        => 'Designs rooftop gardens, vertical gardens, landscape layouts, walkways and outdoor spaces.',
                'sort_order' => 1,
            ],
            [
                'name'       => 'Abu Hanif',
                'role'       => 'Agriculturist',
                'tier'       => 'lead',
                'photo'      => 'images/team/p11-img4-216x216.png',
                'bio'        => 'Expert advice on plants, grass, trees, soil, fertilizer and overall plant health.',
                'sort_order' => 2,
            ],
            [
                'name'       => 'Mahfuzur Rahman Manik',
                'role'       => 'Landscape Manager',
                'tier'       => 'lead',
                'photo'      => 'images/team/p11-img23-384x384.png',
                'bio'        => 'Manages site work, plantation, grass installation, workers, watering, trimming and maintenance.',
                'sort_order' => 3,
            ],

            // Field Team (tier = 'field')
            [
                'name'       => 'Bellal Howlader',
                'role'       => 'Site Supervisor',
                'tier'       => 'field',
                'photo'      => 'images/team/p11-img6-410x410.png',
                'bio'        => 'Supervises on-site work and quality across all active project sites.',
                'sort_order' => 0,
            ],
            [
                'name'       => 'Tanvir',
                'role'       => 'Landscaper',
                'tier'       => 'field',
                'photo'      => 'images/team/p11-img20-250x250.png',
                'bio'        => 'Hands-on landscaping, grass installation and outdoor finishing work.',
                'sort_order' => 1,
            ],
            [
                'name'       => 'Jaber Hossain',
                'role'       => 'Gardener',
                'tier'       => 'field',
                'photo'      => 'images/team/p11-img10-255x380.png',
                'bio'        => 'Plantation, grass care and garden upkeep on residential and commercial sites.',
                'sort_order' => 2,
            ],
            [
                'name'       => 'Ayub Ali',
                'role'       => 'Gardener',
                'tier'       => 'field',
                'photo'      => 'images/team/p11-img18-359x480.png',
                'bio'        => 'Plantation, regular watering and routine garden maintenance.',
                'sort_order' => 3,
            ],
        ];

        foreach ($members as $data) {
            TeamMember::create($data);
        }
    }
}
