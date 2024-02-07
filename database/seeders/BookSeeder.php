<?php

namespace Database\Seeders;

use App\Models\Book;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $book = new Book();
        $book->title = $faker->sentence(3);
        $book->author = $faker->name();
        $book->isbn = $faker->numberBetween(10000, 200000);
        $book->available = $faker->numberBetween(1, 100);
        $book->save();
    }
}
