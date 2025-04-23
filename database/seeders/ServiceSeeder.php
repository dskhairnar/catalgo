<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        $services = [
            [
                'name' => 'Habitat Mapping',
                'description' => 'Explore and map local natural habitats in your area.',
                'icon' => '🌿'
            ],
            [
                'name' => 'Conservation Tracking',
                'description' => 'Monitor and participate in local conservation efforts.',
                'icon' => '📊'
            ],
            [
                'name' => 'Community Engagement',
                'description' => 'Connect with other nature enthusiasts and conservationists.',
                'icon' => '👥'
            ],
            [
                'name' => 'Wildlife Monitoring',
                'description' => 'Track and monitor local wildlife populations.',
                'icon' => '🦊'
            ]
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}