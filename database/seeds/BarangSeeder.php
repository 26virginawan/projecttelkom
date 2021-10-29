<?php

use Illuminate\Database\Seeder;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barang')->insert([
            [
                'id' => 2,
                'kode_barang' => 'B002',
                'nama_barang' => 'Rak Supermarket Dobel T 150',
                'stok_barang' => 100,
                'harga_barang' => 1850,
            ],
            [
                'id' => 3,
                'kode_barang' => 'B003',
                'nama_barang' => 'Rak SAP + Mika',
                'stok_barang' => 100,
                'harga_barang' => 180,
            ],
            [
                'id' => 4,
                'kode_barang' => 'B004',
                'nama_barang' => 'Ram 150',
                'stok_barang' => 100,
                'harga_barang' => 250,
            ],
            [
                'id' => 5,
                'kode_barang' => 'B005',
                'nama_barang' => 'Mika',
                'stok_barang' => 100,
                'harga_barang' => 15,
            ],
            [
                'id' => 6,
                'kode_barang' => 'B006',
                'nama_barang' => 'Rak Merah Dobel',
                'stok_barang' => 100,
                'harga_barang' => 700,
            ],
            [
                'id' => 7,
                'kode_barang' => 'B007',
                'nama_barang' => 'Gondola Mie Dobel',
                'stok_barang' => 100,
                'harga_barang' => 1000,
            ],
            [
                'id' => 8,
                'kode_barang' => 'B008',
                'nama_barang' => 'Gondola Mie Engkel',
                'stok_barang' => 100,
                'harga_barang' => 650,
            ],
            [
                'id' => 9,
                'kode_barang' => 'B009',
                'nama_barang' => 'Rak Sekat',
                'stok_barang' => 100,
                'harga_barang' => 850,
            ],
        ]);
    }
}