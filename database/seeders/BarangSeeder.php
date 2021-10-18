<?php

namespace Database\Seeders;
use DB;
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
        $barang = [

            ['nama'=> 'Tiara', 'varian'=> 'Rinso', 'hargaBeli'=> 2000, 'hargaJual'=> 2500],
            ['nama'=> 'Alka', 'varian'=> 'odol', 'hargaBeli'=> 4000, 'hargaJual'=> 5500],
            ['nama'=> 'Kekey', 'varian'=> 'Shampo', 'hargaBeli'=> 1000, 'hargaJual'=> 2500],
            ['nama'=> 'Thami', 'varian'=> 'ciki', 'hargaBeli'=> 1000, 'hargaJual'=> 2000],
            ['nama'=> 'Yayu', 'varian'=> 'Wafer', 'hargaBeli'=> 1000, 'hargaJual'=> 2000],
        ];
        DB::table('barangs')->insert($barang);
    }
}
