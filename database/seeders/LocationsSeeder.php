<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Location; // Make sure this matches your Model path

class LocationsSeeder extends Seeder
{
    public function run(): void
    {
        $locations = [
            [
                'name' => 'Kingdom Centre',
                'description' => 'Iconic skyscraper with a skybridge.',
                'latitude' => 24.7113,
                'longitude' => 46.6744,
                'category' => 'Landmark'
            ],
            [
                'name' => 'Al Faisaliah Tower',
                'description' => 'The first skyscraper built in Saudi Arabia.',
                'latitude' => 24.6902,
                'longitude' => 46.6849,
                'category' => 'Landmark'
            ],
            [
                'name' => 'King Saud University',
                'description' => 'First public university in the Kingdom.',
                'latitude' => 24.7162,
                'longitude' => 46.6191,
                'category' => 'Education'
            ],
            [
                'name' => 'Riyadh Park Mall',
                'description' => 'Popular shopping mall with cinema and restaurants.',
                'latitude' => 24.7554,
                'longitude' => 46.6305,
                'category' => 'Commercial'
            ],
            [
                'name' => 'The National Museum',
                'description' => 'Historical museum located in King Abdulaziz Historical Centre.',
                'latitude' => 24.6473,
                'longitude' => 46.7107,
                'category' => 'Museum'
            ],
            [
                'name' => 'Al Masmak Fortress',
                'description' => 'Clay and mud-brick fort in the old city.',
                'latitude' => 24.6312,
                'longitude' => 46.7134,
                'category' => 'Historical'
            ],
            [
                'name' => 'Boulevard City',
                'description' => 'Major entertainment zone for Riyadh Season.',
                'latitude' => 24.7699,
                'longitude' => 46.6047,
                'category' => 'Entertainment'
            ],
            [
                'name' => 'Princess Nourah University',
                'description' => 'The largest women university in the world.',
                'latitude' => 24.8464,
                'longitude' => 46.7247,
                'category' => 'Education'
            ],
            [
                'name' => 'Granada Mall',
                'description' => 'Large shopping center in eastern Riyadh.',
                'latitude' => 24.7828,
                'longitude' => 46.7366,
                'category' => 'Commercial'
            ],
            [
                'name' => 'King Khalid International Airport',
                'description' => 'The main airport serving Riyadh.',
                'latitude' => 24.9596,
                'longitude' => 46.7029,
                'category' => 'Transport'
            ],
        ];

        foreach ($locations as $location) {
            Location::create($location);
        }
    }
}
