<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $locationNames = [
            "lainnya",
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
            DB::table('locations')->insert([
                'name' => $name,
            ]);
         }
    }
}
