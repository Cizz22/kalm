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
            'name' => 'Ani Suhandini S.Psi.',
            'email' => 'anidini@gmail.com',
            'password' => Hash::make('password'),
            'tipeakun' => 'psikolog'
            ],
            [
                'name' => 'Gandi Haryanto, S.Psi',
                'email' => 'gandiharyanto@gmail.com',
                'password' => Hash::make('password'),
                'tipeakun' => 'psikolog'
                ],

                [
                    'name' => 'Raina Yuniar, S.Psi',
                    'email' => 'rainayuniar@gmail.com',
                    'password' => Hash::make('password'),
                    'tipeakun' => 'psikolog'
                    ],
                    [
                        'name' => 'Rheza Andrawida, S.Psi',
                        'email' => 'rhezaandra@gmail.com',
                        'password' => Hash::make('password'),
                        'tipeakun' => 'psikolog'
                        ],
                        [
                            'name' => 'Fariz Prayugo, S.Psi',
                            'email' => 'farizp@gmail.com',
                            'password' => Hash::make('password'),
                            'tipeakun' => 'psikolog'
                            ],
                            [
                                'name' => 'Fitra Hartina, S.Psi',
                                'email' => 'fitrahartina@gmail.com',
                                'password' => Hash::make('password'),
                                'tipeakun' => 'psikolog'
                                ],
                                [
                                    'name' => 'Syahdian Sari, S.Psi',
                                    'email' => 'syahdiansari@gmail.com',
                                    'password' => Hash::make('password'),
                                    'tipeakun' => 'psikolog'
                                    ],
                                    [
                                        'name' => 'Ana Mayasari',
                                        'email' => 'anamayasari@gmail.com',
                                        'password' => Hash::make('password'),
                                        'tipeakun' => 'psikolog'
                                        ],
                                        [
                                            'name' => 'Dalima Fujiati',
                                            'email' => 'dalimafuji@gmail.com',
                                            'password' => Hash::make('password'),
                                            'tipeakun' => 'psikolog'
                                            ],
    ]);
    }
}
