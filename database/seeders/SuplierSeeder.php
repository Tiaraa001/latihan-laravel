<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class SuplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $suplier = [
            ['nama' => "Ajat",'alamat' => "jakarta Barat", 'kode_pos' => 19827,
            'kota' => "Bandung"],
            ['nama' => "Lira",'alamat' => "Dayeuhkolot",'kode_pos' => 19025 ,
            'kota' => "Bandung"],
            ['nama' => "Cucu", 'alamat' => "Balaendah",'kode_pos' => 12093,
            'kota' => "Bandung"],
            ['nama' => "Cici", 'alamat' => "Cangkuang",'kode_pos' => 20219 ,
            'kota' => "Bandung"],
            ['nama' => "Danang", 'alamat' => "Cibaduyut",'kode_pos' => 29301,
            'kota' => "Bojong"],
        ];

        DB::table('supliers')->insert($suplier);
    }
}
