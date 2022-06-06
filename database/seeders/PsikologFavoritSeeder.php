<?php

namespace Database\Seeders;

use App\Models\PsikologFavorite;
use Illuminate\Database\Seeder;

class PsikologFavoritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PsikologFavorite::insert([
            [
                'psikolog_id' => 2,
                'user_id' => 1
            ],
            [
                'psikolog_id' => 3,
                'user_id' => 1
            ],
        ]
        );
    }
}
