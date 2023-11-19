<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Room;

class RoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $rooms = [
            [
                'propertyid' => 'P001',
                'roomid' => 'R001',
                'room_name' => 'Standard Room A',
                'room_category' => 'Standard',
                'is_listed' => 1, // Use 1 for true
            ],
            [
                'propertyid' => 'P001',
                'roomid' => 'R002',
                'room_name' => 'Suite Room A',
                'room_category' => 'Suite',
                'is_listed' => 1, // Use 1 for true
            ],
            // Add more rooms as needed
        ];

        foreach ($rooms as $roomData) {
            Room::create($roomData);
        }
    }
}
