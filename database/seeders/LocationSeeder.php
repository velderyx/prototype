<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Location;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationNames = [
            "#",
            "L1",
            "L2",
            "L3",
            "RAK A-1",
            "RAK A-2",
            "RAK A-3",
            "RAK A-4",
            "RAK B-1",
            "RAK B-2",
            "RAK B-3",
            "RAK B-4"
        ];

        foreach ($locationNames as $name) {
            // Check if the model already exists in the database
            $existingLocation = Location::where('name', $name)->first();

            // If the model doesn't exist, insert it
            if (!$existingLocation) {
                Location::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
