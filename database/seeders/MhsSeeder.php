<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class MhsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = [
            ['nim'=>"1234", 'nama'=> 'tiara', 'jurusan'=> 'rpl', 'wali'=> 'ucup'],
            ['nim'=>"4567", 'nama'=> 'risma', 'jurusan'=> 'rpl', 'wali'=> 'udin'],
            ['nim'=>"2873", 'nama'=> 'kayla', 'jurusan'=> 'rpl', 'wali'=> 'danang'],
            ['nim'=>"2938", 'nama'=> 'syifa', 'jurusan'=> 'rpl', 'wali'=> 'hanzo'],
            ['nim'=>"4672", 'nama'=> 'riskaa', 'jurusan'=> 'rpl', 'wali'=> 'hasi'],

        ];

        //memasukkan data ke dalam tabel "posts"
        DB::table('mhs')->insert($post);
    }
}
