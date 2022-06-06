<?php

namespace Database\Seeders;

use App\Models\LaguMeditasi;
use Illuminate\Database\Seeder;

class LaguSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LaguMeditasi::insert([
            [
                'Judul' => 'Calm',
            ],
            [
                'Judul' => 'Relax',
            ],
            [
                'Judul' => 'Peace'
            ],
            [
                'Judul' => 'Serenity'
            ],
            [
                'Judul' => 'Serenity',
            ],
        ]
        );
    }
}
