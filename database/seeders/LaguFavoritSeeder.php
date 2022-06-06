<?php

namespace Database\Seeders;

use App\Models\LaguMeditasiFavorite;
use Illuminate\Database\Seeder;

class LaguFavoritSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LaguMeditasiFavorite::insert([
            [
                'lagu_id' => 1,
                'user_id' => 1
            ],
            [
                'lagu_id' => 2,
                'user_id' => 1
            ],
        ]
        );
    }
}
