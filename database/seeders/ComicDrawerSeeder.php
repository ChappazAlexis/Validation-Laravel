<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComicDrawerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comic_drawer')->insert([
            [
                'comic_id' => 1,
                'drawer_id' => 1
            ],
            [
                'comic_id' => 2,
                'drawer_id' => 1
            ],
            [
                'comic_id' => 2,
                'drawer_id' => 2
            ],
            [
                'comic_id' => 3,
                'drawer_id' => 4
            ],
            [
                'comic_id' => 3,
                'drawer_id' => 3
            ]
        ]);
    }
}
