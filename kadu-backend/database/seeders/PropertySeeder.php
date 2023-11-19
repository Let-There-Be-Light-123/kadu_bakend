<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PropertySeeder extends Seeder
{
    public function run()
    {
        // Seed data for properties table
        DB::table('property')->insert([
            [
                'propertyid' => 'P001',
                'property_name' => 'Luxury Villa A',
                'property_category' => 'Villa',
                'number_of_rooms' => 5,
                'number_of_listed_rooms' => 3,
                'is_listed' => true,
                'is_featured' => false,
                'is_most_liked' => true,
                'location' => 'City X',
                'geolocation' => '123.456,-789.012',
                'contact_information' => 'Contact Person A',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'propertyid' => 'P002',
                'property_name' => 'Comfortable Apartment B',
                'property_category' => 'Apartment',
                'number_of_rooms' => 10,
                'number_of_listed_rooms' => 7,
                'is_listed' => false,
                'is_featured' => false,
                'is_most_liked' => false,
                'location' => 'City Y',
                'geolocation' => '456.789,-012.345',
                'contact_information' => 'Contact Person B',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more properties as needed
        ]);
    }
}
