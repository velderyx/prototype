<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        $suppliersNames = [
            "lainnya",
            "Sarinah Jaya",
            "Nusantara / Oto sentosa",
            "Wira Utama",
            "Tunas Motor",
            "Delta Terus Jaya",
            "Trijaya Motor",
            "SJM",
            "Rajawali",
            "Garuda Totalindo",
            "Putra Jaya",
            "Champion",
            "Surya Mas",
            "Cahaya Putra",
            "Auto Prima",
            "Delta Terus Jaya",
            "Putra Jaya",
            "Tri Sakti",
            "Step Auto",
            "Karya Abadi",
            "Prioritas",
            "Buana Sakti"
        ];

        foreach ($suppliersNames as $name) {
            DB::table('suppliers')->insert([
                'name' => $name,
            ]);
         }
    }
}
