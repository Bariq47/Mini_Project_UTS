<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SatuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('satuan')->insert([
            [
                'kode_satuan' => 'L',
                'nama_satuan' => 'Liter',
            ],
            [
                'kode_satuan' => 'kg',
                'nama_satuan' => 'Kilograms',
            ],
            [
                'kode_satuan' => 'pcs',
                'nama_satuan' => 'Pieces',
            ],
            [
                'kode_satuan' => 'Set',
                'nama_satuan' => 'Set(Paket)',
            ]

        ]);
    }
}
