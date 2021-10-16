<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // memanggil data yang akan dikirim
        $this->call(PostsSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(MhsSeeder::class);
        $this->command->info("Sample Data sudah terisi");
    }
}
