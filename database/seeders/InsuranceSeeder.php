<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Insurance;

class InsuranceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $insuranceNames = [
            "Lainnya",
            "Etiqa / Asoka",
            "Harta Aman Pratama",
            "Multi Artha Guna",
            "Great Eastern General Insurance",
            "Asuransi Wahana Tata",
            "Rama Satria Wibawa",
            "Sonwelis Takaful",
            "Sunday Insurance Indonesia",
            "Untuk Semua",
            "Avrist General Insurance",
            "Bintang",
            "Chubb General Insurance Indonesia",
            "FPG",
            "Intra Asia",
            "LIPPO",
            "Malacca",
            "MPM / Mitra Pelindung Mustika",
            "MNC Insurance",
            "China Taiping Insurance Indonesia",
            "Purna Artanugraha (ASPANI)",
            "Sinar Mas",
            "Sompo Japan Nipponika",
            "Takaful Umum",
            "Tripakarta",
            "Tugu Pratama",
            "Victoria",
            "Zurich"

        ];

        foreach ($insuranceNames as $name) {
            // Check if the model already exists in the database
            $existingInsurance = Insurance::where('name', $name)->first();

            // If the model doesn't exist, insert it
            if (!$existingInsurance) {
                Insurance::create([
                    'name' => $name,
                ]);
            }
        }
    }
}
