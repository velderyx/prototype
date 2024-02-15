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
        $supplierNames = [
            "Nicho Jaya",
            "Nusantara",
            "Surya Elang Mas"
        ];
        
        foreach ($supplierNames as $name) {
            DB::table('suppliers')->insert([
                'name' => $name,
            ]);
         }
    }
}
