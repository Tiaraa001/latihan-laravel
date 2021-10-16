<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nipd'=>"1234", 'nama'=> 'tiara', 'alamat'=> 'cisirung'],
            ['nipd'=>"4567", 'nama'=> 'alka', 'alamat'=> 'cisirung'],
            ['nipd'=>"0987", 'nama'=> 'irma', 'alamat'=> 'cisirung'],
            ['nipd'=>"6748", 'nama'=> 'nabil', 'alamat'=> 'cisirung'],
            ['nipd'=>"6327", 'nama'=> 'ami', 'alamat'=> 'cisirung'],

        ];

        //memasukkan data ke dalam tabel "posts"
        DB::table('dosens')->insert($post);
    }
}
