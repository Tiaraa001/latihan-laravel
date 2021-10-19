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
        $this->call(PostsSeeder::class);
        $this->call(DosenSeeder::class);
        $this->call(MhsSeeder::class);
        $this->command->info("Sample Data sudah terisi");
        $this->call(HeroSeeder::class);
       $this->call(BarangSeeder::class);
       $this->call(PesananSeeder::class);
        $this->call(PembelianSeeder::class);
        $this->call(PembeliSeeder::class);
        $this->call(SuplierSeeder::class);
    }
}
