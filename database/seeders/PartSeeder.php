<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $parts = [
            [
                'name' => 'bumper',
                'car_id' => '1',
                'plate' => 'B 2050 OJK',
                'supplier_id' => '1',
                'insurance_id' => '1',
                'status_id' => '1',
                'date'=> '2024-12-12',
                'description'=> ''
            ],
            [
                'name' => 'tire',
                'car_id' => '2',
                'plate' => 'C 3090 XYZ',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-12-15',
                'description'=> ''
            ],
            [
                'name' => 'SPION KIRI',
                'car_id' => '5',
                'plate' => 'B 3022 QPW',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            [
                'name' => 'SPION KANAN',
                'car_id' => '5',
                'plate' => 'B 3022 QPW',
                'supplier_id' => '2',
                'insurance_id' => '2',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            [
                'name' => 'FENDER KIRI DEPAN',
                'car_id' => '22',
                'plate' => 'B 9092 POW',
                'supplier_id' => '1',
                'insurance_id' => '1',
                'status_id' => '1',
                'date'=> '2024-2-15',
                'description'=> ''
            ],
            // Add more parts as needed
        ];

        DB::table('parts')->insert($parts);
    }
}
