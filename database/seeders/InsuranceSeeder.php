<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insuranceNames = [
            "Etiqa/Asoka",
            "Harta Aman Pratama",
            "Multi Artha Guna"
        ];
        
        // Remove duplicates
        $uniqueInsuranceNames = array_unique($insuranceNames);

        foreach ($uniqueInsuranceNames as $name) {
            DB::table('insurances')->insert([
                'name' => $name,
            ]);
         }
    }
}
