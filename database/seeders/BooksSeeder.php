<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert($this->getData());
    }

    private function getData() {
        $data = [];
        $faker = Faker\Factory::create('ru_RU');
        for ($i = 0; $i<=15; $i++) {
            $data[] = [
                'title' => $faker->realText(25),
                'description' => $faker->realText(rand(300,500)),
                'image' => $faker->imageUrl,
                'first_genre_id'=>$faker->randomElement(["0","1"]),
                'second_genre_id'=>$faker->randomElement(["0","1"]),
                'third_genre_id'=>$faker->randomElement(["0","1"]),
                'fourth_genre_id'=>$faker->randomElement(["0","1"]),
                'fifth_genre_id'=>$faker->randomElement(["0","1"]),
                'first_author_id'=>$faker->randomElement(["1","2","3","4","5"]),
                'second_author_id'=>$faker->randomElement(["1","2","3","4","5"]),
                'third_author_id'=>$faker->randomElement(["1","2","3","4","5"]),
            ];
        }
        return $data;
    }

}
