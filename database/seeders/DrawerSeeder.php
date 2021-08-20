<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('drawers')->insert([
            [
               'name' => 'Hergé',
               'nationality' => 'Belge',
               'birth_year' => 1907
            ],
            [
               'name' => 'Goscinny',
               'nationality' => 'Francais',
               'birth_year' => 1926
            ],
            [
                'name' => 'Morris',
                'nationality' => 'Belge',
                'birth_year' => 1927
            ],
            [
                'name' => 'Zep',
                'nationality' => 'Suisse',
                'birth_year' => 1967
            ]
        ]);
    }
}