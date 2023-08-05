<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Article; //Importing the Article model

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Clearing the article table.
        Article::truncate();

        $faker =\Faker\Factory::create();

        //Creating new articles in our database.
        for($i = 0; $i < 50; $i) {
            Article::create([
                'title' => $faker->sentence,
                'body' => $faker->paragraph
            ]);
        }
    }
}
//php artisan db:seed --class=ArticlesTableSeeder