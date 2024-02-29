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
            "Lainnya",
            // Toyota
            "Toyota Agya",
            "Toyota Avanza",
            "Toyota Kijang Innova",
            "Toyota Rush",
            "Toyota Fortuner",
            "Toyota Yaris",
            "Toyota",
            // Honda
            "Honda Brio",
            "Honda HR-V",
            "Honda CR-V",
            "Honda City",
            "Honda Jazz",
            "Honda Mobilio",
            "Honda",
            // Suzuki
            "Suzuki Ertiga",
            "Suzuki XL7",
            "Suzuki Ignis",
            "Suzuki Carry",
            "Suzuki APV",
            "Suzuki",
            // Daihatsu
            "Daihatsu Terios",
            "Daihatsu Xenia",
            "Daihatsu Sigra",
            "Daihatsu Ayla",
            "Daihatsu Gran Max",
            "Daihatsu",
            // Mitsubishi
            "Mitsubishi Xpander",
            "Mitsubishi Pajero Sport",
            "Mitsubishi Outlander",
            "Mitsubishi Triton",
            "Mitsubishi Mirage",
            "Mitsubishi",
            // Nissan
            "Nissan Livina",
            "Nissan Terra",
            "Nissan X-Trail",
            "Nissan Navara",
            "Nissan March",
            "Nissan",
            // Mazda
            "Mazda CX-5",
            "Mazda 2",
            "Mazda CX-30",
            "Mazda CX-3",
            "Mazda",
            // Hyundai
            "Hyundai Creta",
            "Hyundai Venue",
            "Hyundai Santa Fe",
            "Hyundai Kona",
            "Hyundai i20",
            "Hyundai",
            // BMW
            "BMW X1",
            "BMW X3",
            "BMW X5",
            "BMW 3 Series",
            "BMW 5 Series",
            "BMW",
            // Mercedes-Benz
            "Mercedes-Benz GLA",
            "Mercedes-Benz A-Class",
            "Mercedes-Benz C-Class",
            "Mercedes-Benz E-Class",
            "Mercedes-Benz GLC",
            "Mercedez",
            // Audi
            "Audi Q3",
            "Audi Q5",
            "Audi A3",
            "Audi A4",
            "Audi A6",
            "Audi",
        );

        foreach ($carModels as $model) {
            DB::table('cars')->insert([
                'name' => $model,
            ]);
         }
    }
}
