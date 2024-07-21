<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class BooksTableSeeder extends Seeder
{
    public function run()
        {
            $faker = Faker::create();
            
            foreach(range(1,100) as $index) {
                DB::table('books')->insert([
                    'title' => $faker->sentence,
                    'thumbnail' => 'https://picsum.photos/' . rand(200, 300),
                    'author' => $faker->name,
                    'publisher' => $faker->company,
                    'publication' => $faker->dateTime,
                    'price' => $faker->randomFloat(2, 5, 100),
                    'quantity' => $faker->numberBetween(1, 50),
                    'category_id' => $faker->numberBetween(1, 5),
                ]);
            }
        }
}
