<?php

namespace Database\Seeders;

use App\Models\PaketKonsultasi;
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
        $this->call([
            AdminSeeder::class,
            TopikKonsultasiSeeder::class,
            PsikologSeeder::class,
            PaketKonsultasiSeeder::class
        ]);
    }
}
