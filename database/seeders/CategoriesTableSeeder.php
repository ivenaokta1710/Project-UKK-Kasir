<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [ 
            ['nama' => 'Makanan'],
            ['nama' => 'Minuman'],
            ['nama' => 'Makanan ringan dan snak'],
            ['nama' => 'Perbumbuan Dapur'],
            ['nama' => 'Frozen Food'],
            ['nama' => 'Kesehatan'],
            ['nama' => 'Kecantikan'],
            ['nama' => 'Rumah Tangga'],
            ['nama' => 'Perawatan Bayi atau anak'],
            ['nama' => 'Perawatan Hewan'],
            ['nama' => 'Elektronik'],
            ['nama' => 'Alat Tulis dan Perlengkapan Kantor'],
            
            
        ];

        DB::table('categoris')->insert($categories);
    }
}
