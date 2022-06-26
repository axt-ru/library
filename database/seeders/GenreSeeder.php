<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genre = [
            [
                "title" => "Книги о войне",

            ],
            [
                "title" => "Исторические приключения",

            ],
            [
                "title" => "Современная проза",

             ]
        ];

        DB::table('genres')->insert($genre);
    }
}
