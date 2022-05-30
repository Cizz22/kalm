<?php

namespace Database\Seeders;

use App\Models\TopikKonsultasi;
use Illuminate\Database\Seeder;

class TopikKonsultasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TopikKonsultasi::insert([
            [
                'nama' => 'Mental Health'
            ],
            [
                'nama' => 'Stress'
            ],
            [
                'nama' => 'Demotivated'
            ],
            [
                'nama' => 'Self-Growth'
            ],
            [
                'nama' => 'Healthy Food'
            ]
        ]
        );
    }
}
