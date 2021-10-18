<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesan = [

            ['namaPelanggan'=> 'Tiara', 'namaBarang'=> 'Sabun', 'qty'=>100, 'tglPesan'=>'2021-10-08'],
            ['namaPelanggan'=> 'Alka', 'namaBarang'=> 'Odol', 'qty'=>100, 'tglPesan'=>'2021-10-08'],
            ['namaPelanggan'=> 'Tami', 'namaBarang'=> 'Sampo', 'qty'=>100, 'tglPesan'=>'2021-10-08'],
            ['namaPelanggan'=> 'Hafsya', 'namaBarang'=> 'Ciki', 'qty'=>100, 'tglPesan'=>'2021-10-08'],
            ['namaPelanggan'=> 'Irma', 'namaBarang'=> 'Wafer', 'qty'=>100, 'tglPesan'=>'2021-10-08'],
        ];
    }
}
