<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PembelianSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembelian = [
            ['namaPembeli'=> 'tiara', 'namaBarang'=> 'odol', 'namaSuplier'=>'Anita', 'qty'=>100, 'tgl'=> '2021-10-11'],
            ['namaPembeli'=> 'alka', 'namaBarang'=> 'sabun', 'namaSuplier'=>'Adit', 'qty'=>100, 'tgl'=> '2021-10-11'],
            ['namaPembeli'=> 'hafsya', 'namaBarang'=> 'sampo', 'namaSuplier'=>'Azahra', 'qty'=>100, 'tgl'=> '2021-10-11'],
            ['namaPembeli'=> 'nesya', 'namaBarang'=> 'ciki', 'namaSuplier'=>'Ucup', 'qty'=>100, 'tgl'=> '2021-10-11'],
            ['namaPembeli'=> 'yayu', 'namaBarang'=> 'yakult', 'namaSuplier'=>'Udin', 'qty'=>100, 'tgl'=> '2021-10-11'],
        ];
        DB::table('pembelians')->insert($pembelian);
    }
}
