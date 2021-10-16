<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{

    public function run()
    {
        $post = [
            ['title'=>"Tajwid menyenangkan", 'content'=> 'lorem ipsum'],
            ['title'=>"Bacaan Shalat", 'content'=> 'lorem ipsum'],
            ['title'=>"Juz Amma", 'content'=> 'lorem ipsum'],
        ];

        //memasukkan data ke dalam tabel "posts"
        DB::table('posts')->insert($post);
    }
}
