<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = [
            [
                "name" => "Васильев Борис Львович",

            ],
            [
                "name" => "Роулинг Джоан Кэтлин",

            ],
            [
                "name" => "Дюма Александр",

            ],
            [
                "name" => "Глушко Мария Васильевна",

            ],
            [
                "name" => "Дойл Артур Конан",

            ]
        ];

        DB::table('authors')->insert($author);
    }
}
