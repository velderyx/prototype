<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class PartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('parts')->insert([
            'name' => 'bumper',
            'car_id' => '1',
            'plate' => 'B 2050 OJK',
            'supplier_id' => '1',
            'insurance_id' => '1',
            'status_id' => '1',
            'date'=> '2024-12-12',
            'description'=> ''
        ]);
    }
}
