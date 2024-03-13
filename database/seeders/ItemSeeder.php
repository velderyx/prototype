<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $items = [
            [
                'itemName' => 'Compound 2500',
                'date'=> '2024-12-12',
                'name' => 'yadi',
                'qty' => '-5',
                'balance' => '28',
            ],
            [
                'itemName' => 'vernish',
                'date'=> '2024-12-12',
                'name' => 'yadi',
                'qty' => '-8',
                'balance' => '28',
            ],
            // Add more parts as needed
        ];

        DB::table('items')->insert($items);
    }

}
