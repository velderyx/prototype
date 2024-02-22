<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            DB::table('statuses')->insert([
                'name' => $name,
            ]);
         }


    }
}
