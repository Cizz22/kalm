<?php

namespace Database\Seeders;

use App\Models\PaketKonsultasi;
use Illuminate\Database\Seeder;

class PaketKonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PaketKonsultasi::insert([
            [
                'nama' => 'Calm',
                'harga' => '280000'
            ],
            [
                'nama' => 'Relax',
                'harga' => '380000'
            ],
            [
                'nama' => 'Peace',
                'harga' => '1230000'
            ],
            [
                'nama' => 'Serenity',
                'harga' => '2999000'
            ],
        ]
        );
    }
}
