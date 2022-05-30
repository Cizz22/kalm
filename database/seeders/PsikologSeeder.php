<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PsikologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            [
            'name' => 'Psikolog 1',
            'email' => 'psikolog1@gmail.com',
            'password' => Hash::make('password'),
            'tipeakun' => 'psikolog'
            ],
            [
                'name' => 'Psikolog 2',
                'email' => 'psikolog2@gmail.com',
                'password' => Hash::make('password'),
                'tipeakun' => 'psikolog'
                ],

                [
                    'name' => 'Psikolog 3',
                    'email' => 'psikolog3@gmail.com',
                    'password' => Hash::make('password'),
                    'tipeakun' => 'psikolog'
                    ],
                    [
                        'name' => 'Psikolog 4',
                        'email' => 'psikolog4@gmail.com',
                        'password' => Hash::make('password'),
                        'tipeakun' => 'psikolog'
                        ],
                        [
                            'name' => 'Psikolog 5',
                            'email' => 'psikolog5@gmail.com',
                            'password' => Hash::make('password'),
                            'tipeakun' => 'psikolog'
                            ],
                            [
                                'name' => 'Psikolog 6',
                                'email' => 'psikolog6@gmail.com',
                                'password' => Hash::make('password'),
                                'tipeakun' => 'psikolog'
                                ],
                                [
                                    'name' => 'Psikolog 7',
                                    'email' => 'psikolog7@gmail.com',
                                    'password' => Hash::make('password'),
                                    'tipeakun' => 'psikolog'
                                    ],
                                    [
                                        'name' => 'Psikolog 8',
                                        'email' => 'psikolog8@gmail.com',
                                        'password' => Hash::make('password'),
                                        'tipeakun' => 'psikolog'
                                        ],
                                        [
                                            'name' => 'Psikolog 9',
                                            'email' => 'psikolog9@gmail.com',
                                            'password' => Hash::make('password'),
                                            'tipeakun' => 'psikolog'
                                            ],
    ]);
    }
}
