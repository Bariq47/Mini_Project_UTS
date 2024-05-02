<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('barang')->insert([
            [
                'kode_barang' => 'BRG001',
                'nama_barang' => 'Minyak Sayur',
                'harga_barang' => 20000,
                'deskripsi_barang' => 'Minyak yang diekstrak dari tumbuhan',
                'satuan_barang' => 1
            ],
            [
                'kode_barang' => 'BRG002',
                'nama_barang' => 'Gula',
                'harga_barang' => 10000,
                'deskripsi_barang' => 'Gula dengan kualitas tinggi',
                'satuan_barang' => 2
            ],
            [
                'kode_barang' => 'BRG003',
                'nama_barang' => 'Roti',
                'harga_barang' => 15000,
                'deskripsi_barang' => 'Roti dengan sehat',
                'satuan_barang' => 2
            ],
            [
                'kode_barang' => 'BRG004',
                'nama_barang' => 'Senar Gitar Elektrik',
                'harga_barang' => 50000,
                'deskripsi_barang' => 'Senar dengna kualitas tinggi',
                'satuan_barang' => 1
            ],
        ]);
    }
}
