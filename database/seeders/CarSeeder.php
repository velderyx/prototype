<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */




    public function run(): void
    {
        $carModels = array(
            "Lainnya",
            // Land Rover
            "Land Rover Defender",
            "Land Rover Discovery",
            "Land Rover Discovery Sport",
            "Land Rover Range Rover",
            "Land Rover Range Rover Evoque",
            "Land Rover Range Rover Sport",
            "Land Rover Range Rover Velar",
            // Toyota
            "Toyota Agya",
            "Toyota Avanza",
            "Toyota Innova",
            "Toyota Rush",
            "Toyota Fortuner",
            "Toyota Alphard",
            "Toyota Yaris",
            "Toyota",
            // Honda
            "Honda Brio",
            "Honda HR-V",
            "Honda BR-V",
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
            // chevrolet
            "Chevrolet",
            "Chevrolet Aveo",
            "Chevrolet  Orlando",
            "Chevrolet Cruze",
            "Chevrolet Trax",
            "Chevrolet Captiva",
            "Chevrolet Spin",
            "Chevrolet Colorado",
            "Chevrolet Trailblazer",
            // Daihatsu
            "Daihatsu Terios",
            "Daihatsu Xenia",
            "Daihatsu Sigra",
            "Daihatsu Ayla",
            "Daihatsu Gran Max",
            "Daihatsu Luxio",
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
            // VW
            "Volkswagen Golf",
            "Volkswagen Tiguan",
            "Volkswagen Touran",
            "Volkswagen Passat",
            "Volkswagen Tiguan Allspace",
            "Volkswagen Teramont",
            "Volkswagen Polo",
            "Volkswagen Jetta",
            "Volkswagen Arteon",
            "Volkswagen Sharan",
            "Volkswagen Touareg",
            "Volkswagen Beetle"
        );

        foreach ($carModels as $model) {
            // Check if the model already exists in the database
            $existingCar = Car::where('name', $model)->first();

            // If the model doesn't exist, insert it
            if (!$existingCar) {
                Car::create([
                    'name' => $model,
                ]);
            }
        }
    }
}
