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
        $insurance_names = [
            // List of car insurance companies here...
        ];
        
        // Remove duplicates
        $uniqueCarInsuranceCompanies = array_unique($carInsuranceCompanies);

        foreach ($insurance_names as $name) {
            DB::table('insurances')->insert([
                'name' => $name,
            ]);
         }
    }
}
