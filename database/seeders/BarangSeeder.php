<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('barangs')->insert([
            [
                'kode_barang' => 'BRG-FOK',
                'nama_barang' => 'Mie Indomie Goreng',
                'harga_barang' => 10000,
                'deskripsi_barang' => 'Indomie goreng mentahan with extra mozarella on top of the box',
                'satuan_id' => 1
            ],
            [
                'kode_barang' => 'BRG-VNT',
                'nama_barang' => 'Mie Sedap Goreng',
                'harga_barang' => 5000,
                'deskripsi_barang' => 'Mending Indomie sih ngab',
                'satuan_id' => 2
            ],
            [
                'kode_barang' => 'BRG-T3N',
                'nama_barang' => 'Mie Samyang',
                'harga_barang' => 4000,
                'deskripsi_barang' => 'Aku Samyang Kamoeh <3',
                'satuan_id' => 3
            ]
        ]);
    }
}
