<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comics')->insert([
            [
                'title' => 'Objectif Lune',
                'comic_title' => 'Les aventures de Tintin',
                'author_id' => 1,
                'creation_year' => 1950,
            ],
            [
                'title' => 'Le domaine des dieux',
                'comic_title' => 'Astérix',
                'author_id' => 2,
                'creation_year' => 1970,
            ],
            [
                'title' => 'Les cousins Dalton',
                'comic_title' => 'Lucky Luke',
                'author_id' => 3,
                'creation_year' => 1958,
            ]
        ]);
    }
}
