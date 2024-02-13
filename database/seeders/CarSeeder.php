<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */

    


    public function run(): void
    {
        $carModels = array(
            // Toyota
            "Toyota Avanza",
            "Toyota Kijang Innova",
            "Toyota Rush",
            "Toyota Fortuner",
            "Toyota Yaris",
            // Honda
            "Honda Brio",
            "Honda HR-V",
            "Honda CR-V",
            "Honda City",
            "Honda Jazz",
            // Suzuki
            "Suzuki Ertiga",
            "Suzuki XL7",
            "Suzuki Ignis",
            "Suzuki Carry",
            "Suzuki APV",
            // Daihatsu
            "Daihatsu Terios",
            "Daihatsu Xenia",
            "Daihatsu Sigra",
            "Daihatsu Ayla",
            "Daihatsu Gran Max",
            // Mitsubishi
            "Mitsubishi Xpander",
            "Mitsubishi Pajero Sport",
            "Mitsubishi Outlander",
            "Mitsubishi Triton",
            "Mitsubishi Mirage",
            // Nissan
            "Nissan Livina",
            "Nissan Terra",
            "Nissan X-Trail",
            "Nissan Navara",
            "Nissan March",
            // Honda
            "Honda BR-V",
            "Honda Mobilio",
            // Mazda
            "Mazda CX-5",
            "Mazda 2",
            "Mazda CX-30",
            "Mazda CX-3",
            // Hyundai
            "Hyundai Creta",
            "Hyundai Venue",
            "Hyundai Santa Fe",
            "Hyundai Kona",
            "Hyundai i20",
            // BMW
            "BMW X1",
            "BMW X3",
            "BMW X5",
            "BMW 3 Series",
            "BMW 5 Series",
            // Mercedes-Benz
            "Mercedes-Benz GLA",
            "Mercedes-Benz A-Class",
            "Mercedes-Benz C-Class",
            "Mercedes-Benz E-Class",
            "Mercedes-Benz GLC",
            // Audi
            "Audi Q3",
            "Audi Q5",
            "Audi A3",
            "Audi A4",
            "Audi A6",
            // Add more car models as needed...
        );

        foreach ($carModels as $model) {
            DB::table('cars')->insert([
                'name' => $model,
            ]);
         }
    }
}
