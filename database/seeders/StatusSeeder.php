<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Status;

class StatusSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $statusNames = [
            "ada",
            "diambil",
            ""
        ];

        foreach ($statusNames as $name) {
            // Check if the model already exists in the database
            $existingStatus = Status::where('name', $name)->first();

            // If the model doesn't exist, insert it
            if (!$existingStatus) {
                Status::create([
                    'name' => $name,
                ]);
            }
        }

    }
}
